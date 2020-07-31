<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\FaqAide;
use App\EnquiryAide;
use App\Blog;
use App\Information;
use App\Mail\Contact;


class HomeController extends Controller
{
    public function index()
    {
        $blogsObject = Blog::all()->last();
        $informationsObject = Information::findOrFail(1);
        return view('index', compact('blogsObject','informationsObject'));
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
        $enquiry->parent = $request->parent;
        $enquiry->age = $request->age;
        $enquiry->grade = $request->grade;
        $enquiry->choice = $request->choice;
        $enquiry->primary_course = $request->primary_course;
        $enquiry->additional_course = $request->additional_course;
        $enquiry->gender = $request->gender;
        
        $enquiry->save();
        return back();
    }
    public function storeMail(Request $request)
    {
        Mail::to('fomacorp000@gmail.com')
            ->send(new Contact($request->except('_token')));
 
        return redirect()->to('/');
    }
}
