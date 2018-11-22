<?php

namespace App\Http\Controllers\Admin;

use App\Model\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        dd(model()->produto());
        return view('admin.produto.index'); 
    }

}
