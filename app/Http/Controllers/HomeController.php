<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaqAide;
use App\EnquiryAide;


class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
	public function language(String $locale)
    {
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');
        session(['locale' => $locale]);
        return back();
    }
    public function storeFaq(Request $request){
        $faq = new FaqAide;
        $faq->name = $request->name;
        $faq->email = $request->email;
        $faq->message = $request->message;
        $faq->save();
        return back();
    }
    public function storeEnquiry(Request $request){
        $enquiry = new EnquiryAide;
        $enquiry->name = $request->name;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->number = $request->number;
        $enquiry->save();
        return back();
    }
}
