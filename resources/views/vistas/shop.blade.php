@extends('layouts.master')

@section('content')

    <div class="row">
        @foreach( $arrayShop as $tienda )
            
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">

            <a href="{{ url('/products/' . $tienda->id) }}">
                <img src="{{$tienda->poster}}" style="height:200px"/>
                <h4 style="min-height:45px;margin:5px 0 10px 0">
                    {{$tienda->name}}<br>
                    {{$tienda->category}}
                </h4>
            </a>
            @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )

                <a href="{{url('/editShop/' .$tienda->id)}}">
                    <button type="button" class="btn btn-warning">Editar Producto</button></a>
                <a href="{{url('/deleteShop/' .$tienda->id)}}">
                    <button type="button" class="btn btn-danger">Eliminar Producto</button></a>
                @endif

        </div>
        @endforeach

    </div>

@stop