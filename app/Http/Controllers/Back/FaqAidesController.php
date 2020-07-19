<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\FaqAide;
use Illuminate\Http\Request;
use Exception;

class FaqAidesController extends Controller
{

    /**
     * Display a listing of the faq aides.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $faqAidesObjects = FaqAide::paginate(25);

        return view('admin.faq_aides.index', compact('faqAidesObjects'));
    }

    /**
     * Show the form for creating a new faq aides.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('admin.faq_aides.create');
    }

    /**
     * Store a new faq aides in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            FaqAide::create($data);

            return redirect()->route('faq_aides.faq_aides.index')
                ->with('success_message', 'Faq Aides was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified faq aides.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $faqAides = FaqAide::findOrFail($id);

        return view('admin.faq_aides.show', compact('faqAides'));
    }

    /**
     * Show the form for editing the specified faq aides.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $faqAides = FaqAide::findOrFail($id);
        

        return view('admin.faq_aides.edit', compact('faqAides'));
    }

    /**
     * Update the specified faq aides in the storage.
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
            
            $faqAides = FaqAide::findOrFail($id);
            $faqAides->update($data);

            return redirect()->route('faq_aides.faq_aides.index')
                ->with('success_message', 'Faq Aides was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified faq aides from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $faqAides = FaqAide::findOrFail($id);
            $faqAides->delete();

            return redirect()->route('faq_aides.faq_aides.index')
                ->with('success_message', 'Faq Aides was successfully deleted.');
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
            'name' => 'nullable|string|min:0|max:255',
            'email' => 'nullable|string|min:0|max:255',
            'message_en' => 'required|string',
            'message_fr' => 'required|string',
            'message_es' => 'required|string',
            'message_de' => 'required|string', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
