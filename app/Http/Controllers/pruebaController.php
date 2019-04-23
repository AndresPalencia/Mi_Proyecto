<?php

namespace Proyecto\Http\Controllers;

use Proyecto\Http\Controllers\Controller;

class pruebaController extends Controller {
	public function prueba($param){
		return 'Estoy dentro de pruebaController con el parametro'. $param;
	}
}