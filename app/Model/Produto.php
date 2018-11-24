<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	public $timestamps = false;
	
    protected $fillable = [
    	'nome', 'valor',
    ];

    
}
