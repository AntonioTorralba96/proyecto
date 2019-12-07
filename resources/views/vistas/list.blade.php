@extends('layouts.master')

@section('content')

    <div class="row">
        
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">
        <h4>Lista de mi Reserva</h4>
            <table>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                </tr>
            @foreach( $arrayLists as $lists )
                <tr>
                    <td>{{$lists->name}}</td>
                    <td>5</td>
                    <td>
                        <a href="{{url('/deleteList/' .$lists->id. '/' .Auth::user()->id)}}">
                            <button type="button" class="btn btn-danger">Eliminar</button></a></td>
                </tr>
            @endforeach
            </table>
        </div>
        
    </div>

    <a href="{{url('/reserve')}}">
            <button type="button" class="btn btn-primary">Reservar</button></a>

@stop