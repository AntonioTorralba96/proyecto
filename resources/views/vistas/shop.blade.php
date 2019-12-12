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
            <a href="{{url('/detailsShop/' .$tienda->id)}}">
                    <button type="button" class="btn btn-primary">Detalles</button></a><br>

            @if(  Auth::check() )       
            @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 &&  Auth::user()->shop_id==$tienda->id)

                <a href="{{url('/deleteShop/' .$tienda->id)}}">
                    <button type="button" class="btn btn-danger">Eliminar Tienda</button></a>
            @endif
            @endif

        </div>
        @endforeach

    </div>

@stop