<?php

namespace App\Http\Middleware;


use Closure;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->route()->getName() == 'livewire.update' || $request->route()->getName() == 'livewire.upload-file') {
            $request->merge(['language' => 'ar']);

            return $next($request);
        }


        if ( $request->language !==  "en" && $request->language !== "ar"  ) {
            $request->merge(["language" => "ar"]);
            return redirect('ar/');
        }

        app()->setLocale($request->language);

        return $next($request);
    }
}
