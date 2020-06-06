<?php

namespace App\Http\Middleware;

use App\Models\Devise;
use Closure;
use Illuminate\Support\Facades\Auth;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!session()->has('locale')) {
            session(['locale' => $request->getPreferredLanguage(config('app.locales'))]);
        }
        app()->setLocale(session('locale'));
        setlocale(LC_TIME, session('locale'));
        /*
         * Lorsqu'il va falloir mettre en ligne vous activez ceci !!!
         * /
         /*
        $locale = session('locale');
        $conversion = [
            'fr' => 'fr_FR',
            'en' => 'en_US',
        ];
        $locale = $conversion[$locale];
        setlocale(LC_TIME, $locale);*/

        //restoration de la devise active

        /*
        if (auth()->check()) {
            session(["devise" => Auth::user()->devise]);
        }else if (session()->has('devise')){
            session(["devise" =>session('devise')]);
        }else{
            session(["devise" =>Devise::where('code','FCFA')->first()]);
        }
        */


        return $next($request);


    }
}
