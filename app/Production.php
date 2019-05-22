<?php

namespace Proyecto;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    public function trainer(){
		return $this->belongsTo('Proyecto\Trainer')
	}
}