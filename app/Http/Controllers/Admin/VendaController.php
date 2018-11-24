<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendaController extends Controller
{
   public function index ()
   {
   	return view('admin.venda.index');
   }

    public function create ()
   {
   	return view('admin.venda.index');
   }
}
