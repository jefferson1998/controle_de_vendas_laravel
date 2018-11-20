<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
	public $timestamps = false;
	
   	protected $fillable = [
    	'data', 'valorTotal',
    ];
}
