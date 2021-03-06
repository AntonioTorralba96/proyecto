@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Añadir Nuevo Producto
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/createProduct') }}" method="POST">

                    @csrf
                    <?php $user = Auth::user()->shop_id;  ?>
                    <div class="form-group">
                    
                    @if(Auth::user()->role_id ==1)
                    <label for="title">Id Tienda</label>
                    <input type="number" name="idShop" id="idShop" class="form-control" >
                    @endif
                    @if(Auth::user()->role_id ==2)
                    <!-- <label for="title">Id Tienda</label> -->
                    <input type="hidden" name="idShop" id="idShop" class="form-control" value="<?php echo $user;?>"  readonly>
                    @endif
                    </div>
                    <div class="form-group">
                    <label for="title">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Precio</label>
                    <input type="number" step="any" name="price" id="price" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                    <label for="title">Imagen Producto</label>
                    <input type="text" name="poster" id="poster" class="form-control">
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Añadir Producto
                    </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>


@stop