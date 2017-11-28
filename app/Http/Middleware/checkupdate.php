<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Model\View\forms_view;

class checkupdate
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
      if (Auth::user()->status_fm=='SF') {
        return redirect()->route('eform.edit',['eform'=>forms_view::where('code_card',Auth::user()->username)->first()->id_form]);
      }elseif (Auth::user()->status_fm=='PF') {
        return $next($request);
      }else {
        return abort(403);
      }
    }
}
