@extends('layouts.master')

@section('content')

    <div class="row">
            
        <div class="col-sm-6">

            <img src="{{$producto->poster}}" style="height:300px"/>

        </div>
        <div class="col-sm-4">

            <h4 >{{$producto->name}}</h4>
            <h6>{{$producto->price}}</h6>
            <h6>{{$producto->description}}</h6>
            @if(  Auth::check() )       
            @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )
            <a href="{{ url('/editProduct/' . $producto->id ) }}">
                <button type="button" class="btn btn-warning">Editar</button></a>
            @endif
            @endif
        </div>


    </div>

@stop