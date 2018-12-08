@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    <h1>Update Produto</h1>
@stop

@section('content')
	<div class="box">
		<div class="box-header">
			<h3> Update Produto </h3>
			<div class="box-boy">
                @include('admin.includes.alert')
        		<form method="POST" action="{{route ('admin.produto.update')}}">
        			{!! csrf_field() !!}
        			<div class="form-group">
        				<input type="text" name="nome" placeholder="Nome produto" class="form-control">
                        <input type="text" name="quantidade" placeholder="quantidade" class="form-control">

        			</div>

        			<div class="form-group">
        				<button type="submit" class="btn btn-success"> Adicionar Quantidade </button>
        			</div>

        		</form>
	      </div>
		</div>
	</div>
@stop