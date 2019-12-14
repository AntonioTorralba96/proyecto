@extends('layouts.master')

@section('content')

    <div class="row">
        
        <div class="col-xs-6 col-sm-4 col-md-3 text-center">

                <h4>Lista de mi Reserva</h4>
                    <table class="table table-striped">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                        </tr>
                    @foreach( $arrayLists as $lists )
                        <tr>
                            <td>{{$lists->name}}</td>
                            <td>{{ $lists->quantity }}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </form>    
        </div>
@stop