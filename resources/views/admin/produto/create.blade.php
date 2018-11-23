@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Create Produto</h1>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3> Cadastro Produto </h3>
			<div class="box-boy">
        		<form method="POST" action="{{route ('admin.produto.estoque')}}">
        			{!! csrf_field() !!}
        			<div class="form-group">
        				<input type="text" name="nome" placeholder="Nome produto" class="form-control">
        				<input type="text" name="valor" placeholder="Valor" class="form-control">
        			</div>

        			<div class="form-group">
        				<button type="submit" class="btn btn-success"> Cadastrar </button>
        			</div>

        		</form>
	      </div>
		</div>
	</div>
@stop