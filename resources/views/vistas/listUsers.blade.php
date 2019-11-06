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
            @if($listUsers->role_id == 1)
            <th>Admin</th>
            @elseif($listUsers->role_id == 2)
            <th>Propietario</th>
            @elseif($listUsers->role_id == 3)
            <th>Usuario</th>
            @endif
            <th><a href="{{url('/editUser/' .$listUsers->id)}}">
                <button type="button" class="btn btn-primary">Editar</button>
                </a>
            </th>
        </tr>
        @endforeach
    </table>

    </div>

</div>
@stop