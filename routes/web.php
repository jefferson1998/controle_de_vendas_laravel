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
$this->group(['middleware' => ['auth']], function(){
	$this->post('admin/produto/estoque',  "Admin\ProdutoController@produtoEstoque")->name('admin.produto.estoque') ;
	$this->get('admin/produto/create',  "Admin\ProdutoController@create")->name('admin.produto.create') ;
	$this->get('admin/produto',  "Admin\ProdutoController@index")->name('admin.produto') ;
	$this->get('admin',  "Admin\AdminController@index")->name('admin.home') ;
});
$this->get('/',  "Site\SiteController@index")->name('home');
Auth::routes();



