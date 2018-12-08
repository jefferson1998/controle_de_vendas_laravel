@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
    <h1>Vendas</h1>
@stop

@section('content')
		<div class="box">
				<div class="box-header">
					<a href="{{ route ('admin.venda.sell')}}" class="btn btn-primary"> Escolher Produtos</a>
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
      						<th class="text-center text-black"> Realizar Venda </th>
      					</tr>
      				</thead>
      				<tbody>

      					@forelse ($produtos as $produto)	
      						<tr class="text-center">
      							<td>{{ $produto->id }} </td>
      							<td>{{ $produto->nome }} </td>
      							<td>{{ $produto->valor }} </td>
      							<td>{{ $produto->quantidade }} </td>
      							<td><button class="btn btn-danger" action="{{ route('admin.produto.delete') }}"> Vender </button></td>
      						</tr>
      					@empty
      					@endforelse
      				</tbody>
      			</table>
		      </div>
            </div>
		         
				</div>
		</div>
@stop