<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
   protected $fillable = [
    	'nome', 'data', 'valorTotal',
    ];
}