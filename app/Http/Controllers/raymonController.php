<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class raymonController extends Controller
{
    public function index(Request $request){
        
        $auto = $request->name('name');
        return $auto;
        
    }
}
