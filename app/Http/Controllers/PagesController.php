<?php

namespace oefeninglaravel\Http\Controllers;

use Illuminate\Http\Request;

use oefeninglaravel\Http\Requests;

class PagesController extends Controller
{


    function index(){
        return view('/index');
    }
    
    function about(){
        return view('/pages.about');
    }
    
    function services(){
        return view('/pages.services');
    }
    
    
    
    
}

