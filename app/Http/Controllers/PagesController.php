<?php

namespace oefeninglaravel\Http\Controllers;

use Illuminate\Http\Request;

use oefeninglaravel\Http\Requests;

class PagesController extends Controller
{
    function about(){
        return view('/pages.about');
    }

    function index(){
        return view('/index');
    }
    
    
    
    
    
}

