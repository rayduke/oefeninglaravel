<?php

namespace oefeninglaravel\Http\Controllers;

use Illuminate\Http\Request;

use oefeninglaravel\Http\Requests;

class KledingController extends Controller
{
    public function dameskleding(){
        return view('pages.shop.dames.kleding.dameskleding');
    }
}
