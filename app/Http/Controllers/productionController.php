<?php

namespace Proyecto\Http\Controllers;

use Illuminate\Http\Request;

class productionController extends Controller
{
    public function index(Request $request){
    	if($request->ajax()){
    		return response()->json([
    			['id' => 1, 'name' => 'Produccion_1'],
    			['id' => 2, 'name' => 'Produccion_2'],
    			['id' => 3, 'name' => 'Produccion_3'],
    		], 200);
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
