<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about_us(){
		return view('pages.about_us');
	}
}
