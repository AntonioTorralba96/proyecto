@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Editar Producto
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('vistas/edit'. $id) }}" method="POST">

                    {{method_field('PUT')}}

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Precio</label>
                    <input type="number" name="number" id="number" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Editar Producto
                    </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>

@stop