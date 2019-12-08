@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Editar Tienda
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/editShop/'. $shop->id) }}" method="POST">

                    {{method_field('post')}}

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" value="{{ $shop->name }}" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Categoria</label>
                    <input type="text" name="category" value="{{ $shop->category }}" id="category" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Localización</label>
                    <input type="text" name="location" value="{{ $shop->location }}" id="location" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Numero</label>
                    <input type="text" name="telephone" value="{{ $shop->telephone }}" id="telephone" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Web Sites</label>
                    <input type="text" name="website" value="{{ $shop->website }}" id="website" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Imagen</label>
                    <input type="text" name="poster" value="{{ $shop->poster }}" id="poster" class="form-control">
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Editar Tienda
                    </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>

@stop