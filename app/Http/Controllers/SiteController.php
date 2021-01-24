<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){


        $user = "Eugenij Panasevich";

        return view('welcome', [
            'user' => $user
        ]);

    }

    public function blog(Request $request, $alias){

        //dump($request->input());
    }
}
