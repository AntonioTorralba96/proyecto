@extends('layouts.master')

@section('content')

    <div class="row">
        
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
            <form action="{{ url('/editList/'. Auth::user()->id) }}" method="POST">

                {{method_field('post')}}

                @csrf
                <h4>Lista de mi Reserva</h4>
                    <table class="table table-striped">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th></th>
                        </tr>
                    @foreach( $arrayLists as $lists )
                        <tr>
                            <td>{{$lists->name}}</td>
                            <td><input type="number" name="quantity[{{$lists->id}}]" value="{{ $lists->quantity }}" id="quantity" class="form-control"></td>
                            <td>
                                <a href="{{url('/deleteList/' .$lists->id. '/' .Auth::user()->id)}}">
                                    <button type="button" class="btn btn-danger">
                                        <img src="https://img.icons8.com/metro/26/000000/delete.png">
                                    </button></a></td>
                        </tr>
                    @endforeach
                    </table>
                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Reservar
                    </button>
                    </div>
                </div>
            </form>    
        </div>

    <!-- <a href="{{url('/reserve')}}">
            <button type="button" class="btn btn-primary">Reservar</button></a> -->

@stop