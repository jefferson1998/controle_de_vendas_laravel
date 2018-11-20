<?php

namespace App\Model;;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
	public $timestamps = false;

    protected $fillable = [
    	'data', 'valorTotal',
    ];
}
