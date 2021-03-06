@extends('layouts.master')

@section('content')        
<div class="row">

    <div class="col-xs-6 col-sm-4 col-md-12">

    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Role</th>
            <th></th>
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
            <th>Cliente</th>
            @endif
            <th><a href="{{url('/editUser/' .$listUsers->id)}}">
                <button type="button" class="btn btn-warning">
                    <img src="https://img.icons8.com/metro/26/000000/edit.png">
                </button>
                </a>
            </th>
            <th><a href="{{url('/deleteUser/' .$listUsers->id)}}">
                <button type="button" class="btn btn-danger">
                    <img src="https://img.icons8.com/metro/26/000000/delete.png">
                </button>
                </a>
            </th>
        </tr>
        @endforeach
    </table>

    </div>

</div>
@stop