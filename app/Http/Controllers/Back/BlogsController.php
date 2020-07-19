<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\User;
use App\Blog;
use Illuminate\Http\Request;
use Exception;

class BlogsController extends Controller
{

    /**
     * Display a listing of the blogs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $blogsObjects = Blog::paginate(25);

        return view('admin.blogs.index', compact('blogsObjects'));
    }

    /**
     * Show the form for creating a new blogs.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $Users = Blog::pluck('id','id')->all();
        $Users = User::all();
        
        return view('admin.blogs.create', compact('Users'));
    }

    /**
     * Store a new blogs in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            $blog=new Blog;
            $path = 'blog';
            if(!empty($request->image)){
                $logoName = $this->uploadImage($request->image, $path);
                $blog->image=$logoName;
            }
            $blog->title_english=$request->title_english;
            $blog->title_frensh=$request->title_frensh;
            $blog->title_spanish=$request->title_spanish;
            $blog->title_deush=$request->title_deush;
            $blog->content_english=$request->content_english;
            $blog->content_frensh=$request->content_frensh;
            $blog->content_spanish=$request->content_spanish;
            $blog->content_deush=$request->content_deush;
            $blog->user_id=$request->user_id;
            $blog->save();

            return redirect()->route('blogs.blogs.index')
                ->with('success_message', 'Blogs was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified blogs.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $blogs = Blog::with('user')->findOrFail($id);

        return view('admin.blogs.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified blogs.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        $Users = User::pluck('id','id')->all();

        return view('admin.blogs.edit', compact('blogs','Users'));
    }

    /**
     * Update the specified blogs in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $blog = Blog::findOrFail($id);
            $path = 'blog';
            if(!empty($request->image)){
                $logoName = $this->uploadImage($request->image, $path);
                $blog->image=$logoName;
            }
            $blog->title_english=$request->title_english;
            $blog->title_frensh=$request->title_frensh;
            $blog->title_spanish=$request->title_spanish;
            $blog->title_deush=$request->title_deush;
            $blog->content_english=$request->content_english;
            $blog->content_frensh=$request->content_frensh;
            $blog->content_spanish=$request->content_spanish;
            $blog->content_deush=$request->content_deush;
            $blog->user_id=$request->user_id;
            $blog->save();

            return redirect()->route('blogs.blogs.index')
                ->with('success_message', 'Blogs was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified blogs from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $blogs = Blog::findOrFail($id);
            $blogs->delete();

            return redirect()->route('blogs.blogs.index')
                ->with('success_message', 'Blogs was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'image' => 'nullable|file|min:0|max:255',
            'title_english' => 'nullable|string|min:0|max:255',
            'title_frensh' => 'nullable|string|min:0|max:255',
            'title_spanish' => 'nullable|string|min:0|max:255',
            'title_deush' => 'nullable|string|min:0|max:255',
            'content_english' => 'nullable',
            'content_frensh' => 'nullable',
            'content_spanish' => 'nullable',
            'content_deush' => 'nullable',
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

    public function uploadImage($file, $dest_folder)
    {
        if(isset($file)){
            $fileName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $destinationPath = public_path() . '/images/'.$dest_folder;
            $extensions_valides = array( 'ai','eps','psd','jpg' , 'gif' , 'tif','png','svg');

            // Generer aleatoirement le nom du fichier (à revoir avec l'utilisation du SSIUD)
            //$safeName  = str_random(10).'.'.$extension;

            //Vérifions que le dossier $dest_folder existe sinon on le crée
            if ( !in_array(strtolower($extension),$extensions_valides) )
            {
                $extension = 'png';
            }
            if (!is_dir($destinationPath))
            {
                //Permettons l'accès complet sur ce dossier: lecture, écriture et suppression
                mkdir($destinationPath, 0777, true);
            }
            //Créer un identifiant difficile à deviner
            $safeName = md5(uniqid(rand(), true)).'.'.$extension;
            // Deplacer le fichier à sa destination
            $file->move($destinationPath, $safeName);
            return $safeName;
        }
        else {
            return " ";
        }

    }

}
