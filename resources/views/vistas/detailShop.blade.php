@extends('layouts.master')

@section('content')

    <div class="row">
            
        <div class="col-sm-6">

            <img src="{{$shop->poster}}" style="height:300px"/>

        </div>
        <div class="col-sm-4">

            <h4 >{{$shop->name}}</h4>
            <h6>{{$shop->category}}</h6>
            <p><b>Localización:</b> {{$shop->location}}</p>
            <p><b>Telefono:</b> {{$shop->telephone}}</p>
            <p>{{$shop->website}}</p>
            @if(  Auth::check() )       
            @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2 &&  Auth::user()->shop_id==$shop->id)

                <a href="{{url('/editShop/' .$shop->id)}}">
                    <button type="button" class="btn btn-warning">
                    <img src="https://img.icons8.com/metro/26/000000/edit.png"></button></a>
            @endif
            @endif
        </div>


    </div>

@stop