<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    
    public function home(){
        
        $comics = Comic::all();

        return view('pages.home', compact('comics'));
    }

    public function show($id){

        $comic = Comic::findOrFail($id);

        return view('pages.show', compact('comic'));
    }
}
