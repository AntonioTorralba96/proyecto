@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Añadir Nueva Tienda
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/createShop') }}" method="POST">

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Categoria</label>
                    <input type="text" name="category" id="gategory" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Localización</label>
                    <input type="text" name="location" id="location" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Numero de Telefono</label>
                    <input type="text" name="telephone" id="telephone" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Web Site</label>
                    <input type="text" name="website" id="website" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Imagen Tienda</label>
                    <input type="text" name="poster" id="poster" class="form-control">
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Añadir Tienda
                    </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>


@stop