<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{



	public $fillable = [
		'title',
		'description',
	]
	;



	public function product()
	{
		return $this->hasMany('App\Products');
	}
}
