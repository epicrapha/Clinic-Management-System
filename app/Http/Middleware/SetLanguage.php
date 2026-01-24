<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use App\Models\Setting;

class SetLanguage
{
    /**
     * use Illuminate\Support\Facades\Session;
     */
    public function handle(Request $request, Closure $next): Response
    {
        $localeLanguage = Session::get('languageName');

        $lan = Setting::where('key', 'language')->first();

        if (!isset($localeLanguage)) {
            $value = $lan ? $lan->value : config('app.locale');
            \App::setLocale($value);
        } else {
            \App::setLocale($localeLanguage);
        }

        return $next($request);
    }
}
