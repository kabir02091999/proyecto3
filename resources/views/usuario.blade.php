@extends('principal')

@section('cambio')

    <h1>usuario</h1>

    <h2>factura</h2>
    <table>

        <td><h4>id</h4></td>
        <td><h4>nombre</h4></td>
        <td><h4>apellido</h4></td>
        <td><h4>cable</h4></td>
        <td><h4>internet</h4></td>
        <td><h4>telefonia</h4></td>
        <td><h4>paquetes</h4></td>
        <td><h4>precio</h4></td>

            <tr>
                <td><p>{{$id}}</p></td>
                <td><p>{{$nombre }}</p></td>
                <td><p>{{$apellido}}</p></td>
                <td><p>{{$cable}}</p></td>
                <td><p>{{$internet}}</p></td>
                <td><p>{{$telefonia}}</p></td>
                <td><p>{{$paquetes}}</p></td>
                <td><p>{{$precio}}</p></td>
            </tr>  
        

    </table>
{{if(){



}}}
    <div>

        <h2>quieres cambiar de plan</h2>
        <a href="{{ route('cambiodeusuario') }}"><button class="inicio">cambiar plan</button></a>

    </div>
    
    
@endsection