@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Datos del Cliente
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('vistas/reserva') }}" method="POST">

                    @csrf

                    <div class="form-group">
                    <label for="title">Nombre y Apellidos</label>
                    <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Población</label>
                    <input type="text" name="poblacion" id="poblacion" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="title">Codigo Postal</label>
                    <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                    </div>

                    <div class="form-group">
                    <form action="/action_page.php">
                    <input type="checkbox" name="vehicle1" value="Bike">Llevar Pedido a Casa
                    <br>
                    <input type="checkbox" name="vehicle2" value="Car">Recoger en Tienda 
                    <br><br>
                    <input type="submit">
                    </form> 
                    </div>

                    <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Finalizar Reserva
                    </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    </div>

@stop