<?php

namespace App\Model;;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
    	'nome', 'data', 'valorTotal',
    ];
}
