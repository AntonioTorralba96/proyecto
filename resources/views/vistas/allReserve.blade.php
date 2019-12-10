@extends('layouts.master')

@section('content')        
<div class="row">

    <div class="col-xs-6 col-sm-4 col-md-12">

    <table>
        <tr>
            <th>Nombre </th>
            <th>Modo de reparto</th>
            <th>Estado del Pedido</th>
            <th></th>
        </tr>
        @foreach( $arrayReserves as $reserve )
        <tr>
            <th>{{ $reserve->name }}</th>
            <th>{{ $reserve->pick }}</th>
            @if( Auth::user()->role_id == 3)
                @if($reserve->status)
                    @php
                        $class = "btn btn-success";
                        $texto = "Pedido Finalizado";
                    @endphp
                @else    
                    @php
                        $class = "btn btn-danger";
                        $texto = "Pedido Pendiente";
                    @endphp
                @endif
            <th>{{$texto}}</th>
            @endif
            <th><a href="{{url('/endlist/' .$reserve->user_id)}}">
                <button type="button" class="btn btn-primary">Detalles</button>
                </a>
            </th>
            @if( Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
            @if($reserve->status)
                @php
                    $class = "btn btn-success";
                    $texto = "Pedido Finalizado";
                @endphp
            @else    
                @php
                    $class = "btn btn-danger";
                    $texto = "Pedido Pendiente";
                @endphp
            @endif
            <th>
            <form action="{{ url('/changeStatus/' . $reserve->id) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <input type="submit"  class="{{$class}}" value="{{$texto}}" />
            </form>
            </th>
            @elseif (Auth::user()->role_id == 3)
            <th>
            <a href="{{url('/deleteReserve/' . $reserve->id)}}">
                <input type="submit"  class="btn btn-danger" value="Anular Pedido" />
            </a>
            </th>
            @endif
        </tr>
        @endforeach
    </table>

    </div>

</div>
@stop