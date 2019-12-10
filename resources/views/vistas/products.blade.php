@extends('layouts.master')

@section('content')

    <div class="row">

        @foreach( $arrayProducts as $producto )
            
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        
                <a href="{{ url('/detailsProduct/' . $producto->id) }}">
                <img src="{{$producto->poster}}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">
                        {{$producto->name}}
                    </h4>
                </a>
                
                <h5>{{$producto->price}}</h5>
                <h5>Cantidad Diponible: {{$producto->quantity}}</h5>
                
                @if( Auth::check() ) 
                @if( Auth::user()->role_id == 3)
                <a href="{{url('/anadir/' . $producto->id. '/user/' . Auth::user()->id)}}">
                    <button type="button" class="btn btn-primary">Añadir a mi Reserva</button></a>
                @elseif( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 && Auth::user()->shop_id==$producto->shop_id )

                <a href="{{url('/deleteProduct/' . $producto->id)}}">
                    <button type="button" class="btn btn-danger">Eliminar Producto</button></a>
                @endif
            @endif 

        </div>
        @endforeach
        
    </div><br>
    @if( Auth::check() ) 
        @if( Auth::user()->role_id == 3)
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
            <a href="{{url('/list/' . Auth::user()->id)}}">
                <button type="button" class="btn btn-primary">Finalizar Pedido</button></a>
        </div>
        @endif
    @endif
@stop