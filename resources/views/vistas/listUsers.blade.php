@extends('layouts.master')

@section('content')        
<div class="row">

    <div class="col-xs-6 col-sm-4 col-md-12">

    <table>
        <tr>
            <th>Nombre</th>
            <th>Role</th>
            <th></th>
        </tr>
        @foreach( $arrayUsers as $listUsers )
        <tr>
            <th>{{$listUsers->name}}</th>
            <th>{{$listUsers->role_id}}</th>
            <th><a href="{{url('#')}}">
                <button type="button" class="btn btn-primary">Editar</button>
                </a>
            </th>
        </tr>
        @endforeach
    </table>

    </div>

</div>
@stop