<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            $locale = Session::get('locale');
        } else {
            // Default locale if not set
            $locale = 'ar'; // Default to Arabic
            Session::put('locale', $locale);
        }
        
        App::setLocale($locale);
        
        // Set the direction in the config
        config(['app.direction' => $locale === 'ar' ? 'rtl' : 'ltr']);
        
        return $next($request);
    }
}
