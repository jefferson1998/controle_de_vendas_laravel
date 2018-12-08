@extends('adminlte::page')

@section('title', 'Compra')

@section('content_header')
    <h1>Compras</h1>
@stop

@section('content')
		<div class="box">
				<div class="box-header">
					<a href="{{ route ('admin.compra.buying')}}" class="btn btn-primary"> Realizar compra</a>
					{{-- <a href="" class="btn btn-primary"> Excluir</a> --}}
					<br> </br>
					
				</div>
		</div>
@stop