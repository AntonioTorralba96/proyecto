@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Usuario Producto
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/editUser2/'. $user->id) }}" method="POST">

                    {{method_field('put')}}

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" value="{{ $user->name }}" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="title">Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" id="email" class="form-control">
                    </div>

                    <?php $user = Auth::user()->id;  ?>
                    <input type="hidden" name="usuario" id="usuario" class="form-control" value="<?php echo $user;?>"  readonly>

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