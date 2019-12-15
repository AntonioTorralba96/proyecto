@extends('layouts.master')

@section('content')

    <div class="row">
            
        <div>
            <h6>Nombre: {{$User->name}}</h4>
            <h6>Email: {{$User->email}}</h6>
            @if($User->role_id == 1)
                <h6>Admin</h6>
            @elseif($User->role_id == 2)
                <h6>Propietario</h6>
            @elseif($User->role_id == 3)
                <h6>Cliente</h6>
            @endif
            <a href="{{url('/editUser/' .$User->id)}}">
                <button type="button" class="btn btn-warning">
                    <img src="https://img.icons8.com/metro/26/000000/edit.png">
                </button>
            </a>
        </div>
    </div>

@stop