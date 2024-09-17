<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Series extends Controller
{
 
    public function index(Request $request){

        //return redirect('https://google.com');
        $series = [
            'the walking dead',
            'game of thrones',
            'dark'
        ];
    
        return view('series.index', compact('series'));
    }
}
