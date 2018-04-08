<?php

namespace oefeninglaravel\Http\Controllers;

use Illuminate\Http\Request;

use oefeninglaravel\Http\Requests;

class raymonController extends Controller
{
    public function index(Request $request){
        
        $auto = $request->name('name');
        return $auto;
        
    }
}
