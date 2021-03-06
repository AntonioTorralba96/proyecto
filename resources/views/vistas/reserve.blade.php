@extends('layouts.master')

@section('content')

<div class="row" style="margin-top:40px">
    <div class="offset-md-3 col-md-6">
        <div class="card">
            <div class="card-header text-center">
                Datos del Cliente
            </div>
            <div class="card-body" style="padding:30px">

                <form action="{{ url('/reserves') }}" method="POST">

                    @csrf
                    <?php $user = Auth::user()->id;  ?>

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
                    <input type="checkbox" name="vehicle1" id="vehicle1" value="Domicilio">Llevar Pedido a Casa
                    <br>
                    <input type="checkbox" name="vehicle1" id="vehicle1" value="Tienda">Recoger en Tienda 
                    </div>

                    <div class="form-group">
                    <p>El pago se realizara a través de una transferencia a la cuenta bancaria ES00 1111 2222 3333</p>
                    </div>
                    
                    <div class="form-group">
                    <input type="hidden" name="status" id="status" class="form-control" value="0"  readonly>
                    </div>

                    <div class="form-group">
                    
                    <input type="hidden" name="idUser" id="idUser" class="form-control" value="<?php echo $user;?>"  readonly>
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