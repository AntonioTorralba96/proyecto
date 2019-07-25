@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $arrayProducts as $producto )
            
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">

            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$producto->name}}<br>
                {{$producto->price}}<br>
                <a href="{{url('#')}}">
                    <button type="button" class="btn btn-primary">Añadir a mi Reserva</button></a>
            </h4>

        </div>
        @endforeach
        <a href="{{url('/list')}}">
            <button type="button" class="btn btn-primary">Finalizar Pedido</button></a>
    </div>

@stop