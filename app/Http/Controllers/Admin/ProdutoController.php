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

    public function produtoEstoque(Request $request)
    {
    	dd(auth()->users()->produto()->firstOnCreate([]));

    }
}
