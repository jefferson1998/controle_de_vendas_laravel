<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	public $timestamps = false;
	
    protected $fillable = [
    	'nome', 'valor', 'quantidade',
    ];

    public static function addProduto(String $nome, String $quantidade)
    {
    	$produto = Produto::where('nome', $nome)->first();

    	//dd($quantidade, $nome);

    	$produto->quantidade = $produto->quantidade + $quantidade;
    	$produto->save();
    }
 
    public static function removerProduto(Produto $produto)
    {
    	$produto->delete();
    }
}
