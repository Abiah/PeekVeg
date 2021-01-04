<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
          if (Auth::user()->user_type === "Farmer") {
              
            return $request->wantsJson()
            ? response()->json(['two_factor' => true])
            : redirect()->intended(config('fortify.farm'));
          }
          else{
            return $request->wantsJson()
            ? response()->json(['two_factor' => true])
            : redirect()->intended(config('fortify.home'));
          }
        
    }

}