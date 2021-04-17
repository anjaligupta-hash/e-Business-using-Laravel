<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    function storesession(Request $request)
    {
        $request->session()->put('data', $request->input());
        if($request->session()->has('data'))
        {
            return redirect('profile');
        }
    }
}
