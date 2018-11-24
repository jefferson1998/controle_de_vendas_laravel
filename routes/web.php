<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	$this->get('/',  "AdminController@index")->name('admin.home') ;

	$this->post('produto/criarProduto',  "ProdutoController@criarProduto")->name('admin.produto.criarProduto') ;
	$this->get('produto/create',  "ProdutoController@create")->name('admin.produto.create') ;
	$this->get('produto',  "ProdutoController@index")->name('admin.produto') ;
	
	$this->get('venda',  "VendaController@index")->name('admin.venda.index') ;
	
	$this->get('compra',  "CompraController@index")->name('admin.compra.index') ;
});
//$this->get('/', 'Site\SiteController@index')->name('home');

Route::get('/', function(){
	return view ('auth.login');
});




