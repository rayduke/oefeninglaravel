<?php

namespace oefeninglaravel\Http\Controllers;

use Illuminate\Http\Request;

use oefeninglaravel\Http\Requests;

class PagesController extends Controller
{


    function index(){
        $title = 'Welcome to Laravel!';
//        return view('/index', compact('title'));
        return view('index')->with('title', $title);
    }
    
    function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }
    
    function services(){
//        $title = 'Services';
        $data = array(
            'title' => 'Services', 
            'services' => ['mixing','mastering','recording','vocal editing']);
        return view('pages.services')->with($data);
    }
    
    function todo(){
        $title = 'Todo Lijst';
        return view('pages.todo')->with('title', $title);
        
    }
    
    
}

