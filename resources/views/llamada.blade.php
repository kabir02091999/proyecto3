@extends('principal')

@section('cambio')
<div class="container_tabla">
    <h1>plan para tu telefono</h1>

    <table>

        <td><h4>id</h4></td>
        <td><h4>tipo de plan</h4></td>
        <td><h4>cantidad</h4></td>
        <td><h4>precios</h4></td>

        @foreach ($datos as $item)
            
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->cantidad}}</td>
                <td>{{$item->precio}}</td>
            </tr>

        @endforeach

    </table>
</div>

    
@endsection