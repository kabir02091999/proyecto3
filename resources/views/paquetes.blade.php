@extends('principal')

@section('cambio')

<div class="container_tabla">

    <h1>paquetes de planes</h1>
    <table>
        <tr>

            <td><h4>id</h4></td>
            <td><h4>tipo de plan</h4></td>
            <td><h4>programas</h4></td>
            <td><h4>precios</h4></td>

        </tr>
        @foreach ($datos as $item)
            <tr>
                <td><p>{{$item->id}}</p></td>
                <td><p>{{$item->nombre }}</p></td>
                <td><p>{{$item->paquete}}</p></td>
                <td><p>{{$item -> precio}}</p></td>
            </tr>  
        @endforeach
    </table>

</div>  
    
@endsection