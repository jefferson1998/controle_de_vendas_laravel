<?php

namespace App\Http\Controllers\Admin;

use App\Model\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produto.index', compact('produtos'));
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
            'quantidade' => 'required|numeric|min:0',
    	]);

        $produto = Produto::where('nome', $request->nome)->get()->first();

        if($produto) {
            Produto::addProduto($produto->nome, $request->quantidade);
            return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
        }

    	$newproduto = new Produto;
    	$newproduto->user_id = auth()->user()->id;
    	$newproduto->nome = $request->nome;
    	$newproduto->valor = $request->valor;
        $newproduto->quantidade = $request->quantidade;
     	$newproduto->save();

    	return redirect()->back()->with('success', 'Produto cadastrado com sucesso!');
    }

    public function mostrarFormularioUpdate()
    {
        if(count(Produto::get()) == 0) {
            return redirect()->route('admin.produto.create');
        }

        return view ('admin.produto.update');
    }

    public function addProduto(Request $request)
    {
        $request->validate([

            'nome' => 'required',
            'quantidade' => 'required|min:1|numeric',

        ]);

        Produto::addProduto($request->nome, $request->quantidade);

        return redirect()->back();
    }

    public function removeProduto($idPassada)
    {
        dd($idPassada);

        // $produto = Produto::where('nome', $request->nome)->get()->first();
        // $produto = Produto::where('id', $idPassada)->first();
        // dd($produto);
        // Produto::removerProduto($produto);

        return redirect()->back();
    }
}
    