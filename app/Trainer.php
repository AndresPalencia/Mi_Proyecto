<?php

namespace Proyecto;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name', 'avatar'];
    /**
 	* Get the route key for the model.
 	*
 	* @return string
 	*/
	public function getRouteKeyName()
	{
    	return 'slug';
	}

	public function production(){
		return $this->hasMany('Proyecto\Production');
	}
}
