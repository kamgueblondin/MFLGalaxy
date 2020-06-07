<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about_us(){
		return view('pages.about_us');
	}
    public function our_goals(){
		return view('pages.our_goals');
	}
    public function our_services(){
		return view('pages.our_services');
	}
    public function testimonials(){
		return view('pages.testimonials');
	}
    public function blogs(){
		return view('pages.blogs');
	}
    public function legal_documents(){
		return view('pages.legal_documents');
	}
    public function french(){
		return view('pages.french');
	}
    public function spanish(){
		return view('pages.spanish');
	}
	public function gallery(){
		return view('pages.gallery');
	}
	public function class_structure(){
		return view('pages.class_structure');
	}
	public function extension_classes(){
		return view('pages.extension_classes');
	}
	public function adult_classes(){
		return view('pages.adult_classes');
	}
	public function target_schools(){
		return view('pages.target_schools');
	}
	public function useful_links(){
		return view('pages.useful_links');
	}
	public function faq(){
		return view('pages.faq');
	}
	public function enquiry_form(){
		return view('pages.enquiry_form');
	}
	public function more_infos(){
		return view('pages.more_infos');
	}
}
