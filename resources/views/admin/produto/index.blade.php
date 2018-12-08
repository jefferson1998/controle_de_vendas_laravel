@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Produtos</h1>
@stop

@section('content')
<div class="box">
	<div class="box-header">
		<a href="{{ route ('admin.produto.create')}}" class="btn btn-primary"> Criar Produto</a>
		<a href="{{ route ('admin.produto.update')}}" class="btn btn-primary"> Adicionar Produto</a>
		<a href="" class="btn btn-primary"> Excluir</a>
		<br> </br>
		<div class="small-box bg-green">
      		<div class="inner">
      			<h4 class="text-center">Lista de Produtos</h4>
      			<table class="table table-bordered">
      				<thead>
      					<tr>
      						<th class="text-center text-black"> # </th>
      						<th class="text-center text-black"> Nome </th>
      						<th class="text-center text-black"> Valor </th>
      						<th class="text-center text-black"> Quantidade </th>
      						<th class="text-center text-black"> Excluir </th>
      					</tr>
      				</thead>
      				<tbody>

      					@forelse ($produtos as $produto)	
      						<tr class="text-center">
      							<td>{{ $produto->id }} </td>
      							<td>{{ $produto->nome }} </td>
      							<td>{{ $produto->valor }} </td>
      				 			<td>{{ $produto->quantidade }} </td>
      							<td><button class="btn btn-danger" action="{{ route('$produto->id', 'admin.produto.delete') }}"> Excluir </button></td>
      						</tr>
      					@empty
      					@endforelse
      				</tbody>
      			</table>
		      </div>
            </div>
    		<div class="icon">
              		
      	</div>
      		{{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
      </div>
</div>
@stop