<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    public function accueil(){
        return view('accueil');
    }

    public function resume(){
        return view('resume');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request){
        return view('contactInfo', ['data' => $request]);
    }
}

