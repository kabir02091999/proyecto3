@extends('principal')

@section('cambio')

    <h1>administrador</h1>
    
    <div>
        <h2>plan para tu telecable</h2>
        <table>

            <tr>

                <td><h4>id</h4></td>
                <td><h4>tipo de plan</h4></td>
                <td><h4>programas</h4></td>
                <td><h4>precios</h4></td>

            </tr>

            @foreach ($cable as $item)
                <tr>
                    <td><p>{{$item->id}}</p></td>
                    <td><p>{{$item->nombre }}</p></td>
                    <td><p>{{$item->canales}}</p></td>
                    <td><p>{{$item -> precio}}</p></td>
                </tr>  
            @endforeach

        </table>

        <form method="POST" action="{{  route('crear.telecable') }}">
            {{ csrf_field() }}
            <div class="logi">
                <h3>nuevo paquetes de telecable </h3>
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="textarea" name="canales" placeholder="canales" required>
                <input type="number" name="precio" placeholder="precio" required>
                <input type="submit"value="entrar" name="entrarcuenta" placeholder="cambio">

            </div>
            
        </form>

    </div>

    <div>

        </table>
        <h2>plan para tu internet</h2>
        
        <table>

            <td><h4>id</h4></td>
            <td><h4>tipo de plan</h4></td>
            <td><h4>cantidad</h4></td>
            <td><h4>precios</h4></td>

            @foreach ($internet as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>{{$item->precio}}</td>
                </tr>
            @endforeach

        </table>

        <form method="POST" action="{{  route('nuevo_internet') }}">
            {{ csrf_field() }}
            <div class="logi">
                <h3>nuevo plan de internet </h3>
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="textarea" name="cantidad" placeholder="cantidad" required>
                <input type="number" name="precio" placeholder="precio" required>
                <input type="submit"value="entrar" name="entrarcuenta" placeholder="cambio">

            </div>
            
        </form>

    </div>

    <div>

        <h2>plan para tu telefono</h2>

        <table>

            <td><h4>id</h4></td>
            <td><h4>tipo de plan</h4></td>
            <td><h4>cantidad</h4></td>
            <td><h4>precios</h4></td>

            @foreach ($telefonia as $item)
                
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>{{$item->precio}}</td>
                </tr>

            @endforeach

        </table>

        <form method="POST" action="{{  route('nuevo.plan') }}">
            {{ csrf_field() }}
            <div class="logi">
                <h3>nuevo plan de telefonia </h3>
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="textarea" name="cantidad" placeholder="cantidad" required>
                <input type="number" name="precio" placeholder="precio" required>
                <input type="submit"value="entrar" name="entrarcuenta" placeholder="cambio">

            </div>
            
        </form>

    </div>

    <div>

        <h2>paquetes</h2>
        <table>
            <tr>

                <td><h4>id</h4></td>
                <td><h4>tipo de plan</h4></td>
                <td><h4>programas</h4></td>
                <td><h4>precios</h4></td>

            </tr>
            @foreach ($paquetes as $item)
                <tr>
                    <td><p>{{$item->id}}</p></td>
                    <td><p>{{$item->nombre }}</p></td>
                    <td><p>{{$item->paquete}}</p></td>
                    <td><p>{{$item -> precio}}</p></td>
                </tr>  
            @endforeach
        </table>

        <form method="POST" action="{{  route('nuevo.paquetes') }}">
            {{ csrf_field() }}
            <div class="logi">
                <h3>nuevo plan de paquetes </h3>
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="textarea" name="paquete" placeholder="paquete" required>
                <input type="number" name="precio" placeholder="precio" required>
                <input type="submit"value="entrar" name="entrarcuenta" placeholder="cambio">

            </div>
            
        </form>

    </div>

    <div>

        <h2>cambio de planes</h2>
        <table>

            <td><h4>id</h4></td>
            <td><h4>nombre</h4></td>
            <td><h4>apellido</h4></td>
            <td><h4>plan</h4></td>
            

            @foreach ($cambio as $item)
                <tr>
                    <td><p>{{$item->id}}</p></td>
                    <td><p>{{$item->nombre }}</p></td>
                    <td><p>{{$item->apellido}}</p></td>
                    <td><p>{{$item->plan}}</p></td>
                </tr>  
            @endforeach

        </table>


    </div>

    <div>

        <h2>usuarios</h2>
        <table>

            <td><h4>id</h4></td>
            <td><h4>nombre</h4></td>
            <td><h4>apellido</h4></td>
            <td><h4>cable</h4></td>
            <td><h4>internet</h4></td>
            <td><h4>telefonia</h4></td>
            <td><h4>paquetes</h4></td>
            <td><h4>precio</h4></td>

            @foreach ($usuarios as $item)
                <tr>
                    <td><p>{{$item->id}}</p></td>
                    <td><p>{{$item->nombre }}</p></td>
                    <td><p>{{$item->apellido}}</p></td>
                    <td><p>{{$item->cable}}</p></td>
                    <td><p>{{$item->internet}}</p></td>
                    <td><p>{{$item->telefonia}}</p></td>
                    <td><p>{{$item->paquetes}}</p></td>
                    <td><p>{{$item -> precio}}</p></td>
                </tr>  
            @endforeach

        </table>

        <form method="POST" action="{{  route('nuevo.usuario') }}">
            {{ csrf_field() }}
            <div class="logi">
                <h3>nuevo usuario  </h3>
                <h4>indicar el id en los campos de los planes</h4>
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="text" name="apellido" placeholder="apellido" required>
                <input type="text" name="cable" placeholder="cable" >
                <input type="text" name="internet" placeholder="internet" >
                <input type="text" name="telefonia" placeholder="telefonia" >
                <input type="text" name="paquetes" placeholder="paquetes" >
                <input type="number" name="precio" placeholder="precio" >
                <input type="submit"value="entrar" name="entrarcuenta" placeholder="nuevo">

            </div>
            
        </form>

    </div>

@endsection