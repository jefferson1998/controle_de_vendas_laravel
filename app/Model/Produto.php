<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	public $timestaps = false;
	
    protected $fillable = [
    	'nome', 'valor',
    ];
}
