@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Usuario Producto
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/editUsers/'. $user->id) }}" method="PUT">

                    {{method_field('put')}}

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="title">Role</label>
                    <select name="role" value="{{ $user->role_id }}" id="role" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Propietario</option>
                        <option value="3">Usuario</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="title">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" id="email" class="form-control">
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Editar Usuario
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@stop