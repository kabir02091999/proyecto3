@extends('principal')

@section('cambio')
    <div class="containe_logi">
        <form method="POST" action="{{  route('login') }}">
            {{ csrf_field() }}
            <div class="logi">
                <h2>indique a que nombre esta la linia </h2>
                <input type="text" name="nombre" placeholder="nombre" required>
                <input type="text" name="apellido" placeholder="apellido" required>
                <input type="number" name="id" placeholder="id" required>
                <input type="submit"value="entrar" name="entrarcuenta" placeholder="cambio">

            </div>
            
        </form>
    </div>
@endsection