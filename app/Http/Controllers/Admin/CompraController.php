<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompraController extends Controller
{
   public function index ()
   {
   	return view('admin.compra.index');
   }

   public function create ()
   {
   	return view('admin.compra.index');
   }

   public function buying ()
   {
   	return view('admin.compra.buying');
   }
}
