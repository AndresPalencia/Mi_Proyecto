<?php

namespace Proyecto\Http\Controllers;
use Proyecto\Production;
use Proyecto\Trainer;
use Illuminate\Http\Request;

class productionController extends Controller
{
    public function index(Trainer $trainer, Request $request){
    	if($request->ajax()){
    		return response()->json($trainer->production, 200);
    	}
    	return view('productions.index');
    }
    
    public function store(Trainer $trainer, Request $request){
        if($request->ajax()){
            $production = new Production();
            $production->name = $request->input('name');
            $production->picture = $request->input('picture');
            $production->trainer()->associate($trainer)->save();
           // $production->save();
               
                return response()->json([
                    //"trainer" => $trainer,
                    "message" => "Produccion Incluida Exitosamente",
                    "production" => $production,
                ], 200);
        }
    }
}
