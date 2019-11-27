@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $arrayProducts as $producto )
            
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        
                <a href="{{ url('/details/' . $producto->id) }}">
                <img src="{{$producto->poster}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$producto->name}}
                    </h4>
                </a>
                
                <h5>{{$producto->price}}</h5>
                <h5>Cantidad Diponible: {{$producto->quantity}}</h5>

                <a href="{{url('/anadir/' . $producto->id. '/user/' . Auth::user()->id)}}">
                    <button type="button" class="btn btn-primary">Añadir a mi Reserva</button></a>
                
                @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )

                <a href="{{url('/deleteProduct/' . $producto->id)}}">
                    <button type="button" class="btn btn-danger">Eliminar Producto</button></a>
                @endif  

        </div>
        @endforeach
        
    </div><br>
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
            <a href="{{url('/list/' . Auth::user()->id)}}">
                <button type="button" class="btn btn-primary">Finalizar Pedido</button></a>
        </div>

@stop