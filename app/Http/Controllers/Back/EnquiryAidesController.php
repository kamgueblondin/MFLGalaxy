<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\EnquiryAide;
use Illuminate\Http\Request;
use Exception;

class EnquiryAidesController extends Controller
{

    /**
     * Display a listing of the enquiry aides.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $enquiryAidesObjects = EnquiryAide::paginate(25);

        return view('admin.enquiry_aides.index', compact('enquiryAidesObjects'));
    }

    /**
     * Show the form for creating a new enquiry aides.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.enquiry_aides.create');
    }

    /**
     * Store a new enquiry aides in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            EnquiryAide::create($data);

            return redirect()->route('enquiry_aides.enquiry_aides.index')
                ->with('success_message', 'Enquiry Aides was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified enquiry aides.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $enquiryAides = EnquiryAide::findOrFail($id);

        return view('admin.enquiry_aides.show', compact('enquiryAides'));
    }

    /**
     * Show the form for editing the specified enquiry aides.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $enquiryAides = EnquiryAide::findOrFail($id);
        

        return view('admin.enquiry_aides.edit', compact('enquiryAides'));
    }

    /**
     * Update the specified enquiry aides in the storage.
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
            
            $enquiryAides = EnquiryAide::findOrFail($id);
            $enquiryAides->update($data);

            return redirect()->route('enquiry_aides.enquiry_aides.index')
                ->with('success_message', 'Enquiry Aides was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified enquiry aides from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $enquiryAides = EnquiryAide::findOrFail($id);
            $enquiryAides->delete();

            return redirect()->route('enquiry_aides.enquiry_aides.index')
                ->with('success_message', 'Enquiry Aides was successfully deleted.');
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
            'name' => 'required|string|min:1|max:255',
            'email' => 'required|string|min:1|max:255',
            'number' => 'required|string|min:1|max:255',
            'message' => 'required|string', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
