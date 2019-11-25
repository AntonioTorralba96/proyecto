@extends('layouts.master')

@section('content')        
<div class="row">

    <div class="col-xs-6 col-sm-4 col-md-12">

    <table>
        <tr>
            <th>Nombre </th>
            <th>Pick</th>
            <th></th>
        </tr>
        @foreach( $arrayReserves as $reserve )
        <tr>
            <th>{{ $reserve->name }}</th>
            <th>{{ $reserve->pick }}</th>
            <th><a href="{{url('/list/' .$reserve->user_id)}}">
                <button type="button" class="btn btn-primary">Detalles</button>
                </a>
            </th>
        </tr>
        @endforeach
    </table>

    </div>

</div>
@stop