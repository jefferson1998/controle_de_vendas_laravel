<?php

namespace App\Http\Controllers\Admin;

use App\Model\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('admin.produto.index');
    }

    public function create()
    {
        return view('admin.produto.create');
    }

    public function criarProduto(Request $request)
    {
    	$validacao = $request->validate([
    		'nome' => 'required|string|max:100',
   			'valor' => 'required|numeric|min:0',
    	]);

    	$produto = new Produto;
    	$produto->user_id = auth()->user()->id;
    	$produto->nome = $request->nome;
    	$produto->valor = $request->valor;

    	$produto->save();

    	return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
    }
}
