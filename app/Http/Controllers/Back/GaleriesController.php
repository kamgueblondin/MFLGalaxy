<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Galerie;
use Illuminate\Http\Request;
use Exception;

class GaleriesController extends Controller
{

    /**
     * Display a listing of the galeries.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $galeriesObjects = Galerie::paginate(25);

        return view('admin.galeries.index', compact('galeriesObjects'));
    }

    /**
     * Show the form for creating a new galeries.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.galeries.create');
    }

    /**
     * Store a new galeries in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            //Galerie::create($data);
            $galerie=new Galerie;
            $path = 'galerie';
            if(!empty($request->image)){
                $logoName = $this->uploadImage($request->image, $path);
                $galerie->image=$logoName;
            }
            $galerie->title_english=$request->title_english;
            $galerie->title_frensh=$request->title_frensh;
            $galerie->title_spanish=$request->title_spanish;
            $galerie->title_deush=$request->title_deush;
            $galerie->content_english=$request->content_english;
            $galerie->content_frensh=$request->content_frensh;
            $galerie->content_spanish=$request->content_spanish;
            $galerie->content_deush=$request->content_deush;
            $galerie->save();

            return redirect()->route('galeries.galeries.index')
                ->with('success_message', 'Galeries was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified galeries.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $galeries = Galerie::findOrFail($id);

        return view('admin.galeries.show', compact('galeries'));
    }

    /**
     * Show the form for editing the specified galeries.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $galeries = Galerie::findOrFail($id);
        

        return view('admin.galeries.edit', compact('galeries'));
    }

    /**
     * Update the specified galeries in the storage.
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
            
            $galeries = Galerie::findOrFail($id);
            //$galeries->update($data);
            $path = 'galerie';
            if(!empty($request->image)){
                $logoName = $this->uploadImage($request->image, $path);
                $galerie->image=$logoName;
            }
            $galerie->title_english=$request->title_english;
            $galerie->title_frensh=$request->title_frensh;
            $galerie->title_spanish=$request->title_spanish;
            $galerie->title_deush=$request->title_deush;
            $galerie->content_english=$request->content_english;
            $galerie->content_frensh=$request->content_frensh;
            $galerie->content_spanish=$request->content_spanish;
            $galerie->content_deush=$request->content_deush;
            $galerie->save();

            return redirect()->route('galeries.galeries.index')
                ->with('success_message', 'Galeries was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified galeries from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $galeries = Galerie::findOrFail($id);
            $galeries->delete();

            return redirect()->route('galeries.galeries.index')
                ->with('success_message', 'Galeries was successfully deleted.');
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
            'image' => 'nullable|file',
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

