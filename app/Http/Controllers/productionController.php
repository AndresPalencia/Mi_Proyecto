<?php

namespace Proyecto\Http\Controllers;

use Illuminate\Http\Request;

class productionController extends Controller
{
    public function index(Request $request){
    	if($request->ajax()){
    		return response()->json([
    			['id' => 1, 'name' => 'Productor1'],
    			['id' => 2, 'name' => 'Productor2'],
    			['id' => 3, 'name' => 'Productor3'],
    		]);
    	}
    	return view('productions.index');
    }
}
