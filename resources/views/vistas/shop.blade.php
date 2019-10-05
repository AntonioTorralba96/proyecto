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

        </div>
        @endforeach

    </div>

@stop