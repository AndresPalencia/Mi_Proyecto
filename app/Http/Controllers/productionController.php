<?php

namespace Proyecto\Http\Controllers;

use Illuminate\Http\Request;

class productionController extends Controller
{
    public function index(){
    	return view('productions.index');
    }
}
