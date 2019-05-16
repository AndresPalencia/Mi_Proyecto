<?php

namespace Proyecto\Http\Controllers;
use Proyecto\Production;
use Illuminate\Http\Request;

class productionController extends Controller
{
    public function index(Request $request){
    	if($request->ajax()){
            $productions = Production::all();
    		return response()->json($productions, 200);
    	}
    	return view('productions.index');
    }
    
    public function store(Request $request){
        if($request->ajax()){
            $production = new Production();
            $production->name = $request->input('name');
            $production->picture = $request->input('picture');
            $production->save();
               
                return response()->json([
                    "message" => "Produccion Incluida Exitosamente"
                ], 200);
        }
    }
}
