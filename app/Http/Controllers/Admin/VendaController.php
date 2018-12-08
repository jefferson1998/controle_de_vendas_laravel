<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Venda;
use App\Model\Produto;
use App\Http\Controllers\Controller;

class VendaController extends Controller
{
   public function index ()
   {

   	return view('admin.venda.index');
   }

    public function sell ()
   {
    $produtos = Produto::all();

   	return view('admin.venda.sell', compact('produtos'));
   }
}
