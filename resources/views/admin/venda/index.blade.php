@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header') 
    <h1>Vendas</h1>
@stop

@section('content')
		<div class="box">
				<div class="box-header">
					<a href="{{ route ('admin.venda.sell')}}" class="btn btn-primary"> Realizar venda</a>
					<br> </br>
		
					{{-- <div class="small-box bg-green"> --}}
		            		{{-- <div class="inner">
		             				 <h3>53<sup style="font-size: 20px">%</sup></h3>

		             		 <p>Valor total da venda</p>
		           			</div>
			          		<div class="icon">
			              		<i class="ion ion-stats-bars"></i>
			            	</div> --}}
		            		{{-- <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> --}}
		         {{--  </div> --}}

				</div>
		</div>
@stop