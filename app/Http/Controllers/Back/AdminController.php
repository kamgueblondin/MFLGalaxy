<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Information;
use Exception;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
    
    public function information(){
        $information = Information::findOrFail(1);
        return view('admin.informations.index',compact('information'));
    }
    /**
     * Update the specified information in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function updateInformation($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $information = Information::findOrFail($id);
            $information->update($data);

            return back()->with('success_message', 'Information was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }
/**
     * Remove the specified information from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $information = information::findOrFail($id);
            $information->delete();

            return redirect()->route('information.information.index')
                ->with('success_message', 'Information was successfully deleted.');
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
            'en' => 'nullable|string|min:0|max:255',
            'fr' => 'nullable|string|min:0|max:255',
            'es' => 'nullable|string|min:0|max:255',
            'de' => 'nullable|string|min:0|max:255', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}

