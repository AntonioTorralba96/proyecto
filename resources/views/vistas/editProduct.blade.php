@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Editar Producto
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/editProduct/'. $producto->id) }}" method="POST">

                    {{method_field('post')}}

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" value="{{ $producto->name }}" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Precio</label>
                    <input type="number" name="price" value="{{ $producto->price }}" id="price" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea name="description" value="" id="description" class="form-control" rows="3">{{ $producto->description }}</textarea>
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