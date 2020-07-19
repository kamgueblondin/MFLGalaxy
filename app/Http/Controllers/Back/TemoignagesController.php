<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Temoignage;
use Illuminate\Http\Request;
use Exception;

class TemoignagesController extends Controller
{

    /**
     * Display a listing of the temoignages.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $temoignagesObjects = Temoignage::paginate(25);

        return view('admin.temoignages.index', compact('temoignagesObjects'));
    }

    /**
     * Show the form for creating a new temoignages.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.temoignages.create');
    }

    /**
     * Store a new temoignages in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            $temoignage=new Temoignage;
            $path = 'temoignage';
            if(!empty($request->image)){
                $logoName = $this->uploadImage($request->image, $path);
                $temoignage->image=$logoName;
            }
            $temoignage->name=$request->name;
            $temoignage->content_english=$request->content_english;
            $temoignage->content_frensh=$request->content_frensh;
            $temoignage->content_spanish=$request->content_spanish;
            $temoignage->content_deush=$request->content_deush;
            $temoignage->save();
            //Temoignage::create($data);

            return redirect()->route('temoignages.temoignages.index')
                ->with('success_message', 'Temoignages was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified temoignages.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $temoignages = Temoignage::findOrFail($id);

        return view('admin.temoignages.show', compact('temoignages'));
    }

    /**
     * Show the form for editing the specified temoignages.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $temoignages = Temoignage::findOrFail($id);
        

        return view('admin.temoignages.edit', compact('temoignages'));
    }

    /**
     * Update the specified temoignages in the storage.
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
            
            $temoignages = Temoignage::findOrFail($id);
            $path = 'temoignage';
            if(!empty($request->image)){
                $logoName = $this->uploadImage($request->image, $path);
                $temoignages->image=$logoName;
            }
            $temoignage->name=$request->name;
            $temoignages->content_english=$request->content_english;
            $temoignages->content_frensh=$request->content_frensh;
            $temoignages->content_spanish=$request->content_spanish;
            $temoignages->content_deush=$request->content_deush;
            $temoignages->save();
            //$temoignages->update($data);

            return redirect()->route('temoignages.temoignages.index')
                ->with('success_message', 'Temoignages was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified temoignages from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $temoignages = Temoignage::findOrFail($id);
            $temoignages->delete();

            return redirect()->route('temoignages.temoignages.index')
                ->with('success_message', 'Temoignages was successfully deleted.');
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
