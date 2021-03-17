<?php

use App\Models\Canal;

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Internet;
use App\Models\Canal;
use App\Models\Telefonia;
use App\Models\Paquete;
use App\Models\Usuario;

use App\Http\Requests;


class cambiosController extends Controller
{




    public function principa()
    {
        return view('inicio');
    }

    public function cable()
    {
        $datos = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
        return view('cable', compact('datos'));
    }

    public function internet()
    {
        $datos = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
        return view('internet', compact('datos'));
    }

    public function llamada()
    {
        $datos = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
        return view('llamada', compact('datos'));
    }

    public function paquetes()
    {
        $datos = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
        return view('paquetes', compact('datos'));
    }

    public function login()
    {
        $datos = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
        foreach ($datos as $item) {

            if ($_POST['nombre'] == "kabir" && $_POST['apellido'] == "contreras" && $_POST['id'] == "1") {
                $cable = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
                $internet = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $telefonia = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $paquetes = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
                $usuarios = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
                $cambio=DB::table('cambioplan')->select('id', 'nombre', 'apellido', 'plan')->get();
                return view('administrador', compact('cable', 'internet', 'telefonia', 'paquetes', 'usuarios','cambio'));
            } else if ($_POST['nombre'] == $item->nombre && $_POST['apellido'] == $item->apellido && $_POST['id'] == $item->id) {
                $id=$item->id;
                $nombre=$item->nombre;
                $apellido = $item->apellido;
                $cable = $item->cable;
                $internet = $item->internet;
                $telefonia = $item->telefonia;
                $paquetes = $item->paquetes;
                $precio = $item->precio;

                
                return view('usuario',compact('id','nombre','apellido','cable','internet','telefonia','paquetes','precio'));
            }
        }
        return "no exite";
    }

    public function crear_telecable(Request $request)
    {

        $nombre = $request->input('nombre');
        $canales = $request->input('canales');
        $precio = $request->input('precio');

        Canal::create([
            'nombre' => $nombre,
            'canales' => $canales,
            'precio' => $precio,
        ]);
        $cable = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
        $internet = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
        $telefonia = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
        $paquetes = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
        $usuarios = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
        $cambio=DB::table('cambioplan')->select('id', 'nombre', 'apellido', 'plan')->get();
        return view('administrador', compact('cable', 'internet', 'telefonia', 'paquetes', 'usuarios','cambio'));
    }

    public function nuevo_telefonia(Request $request){

        $nombre = $request->input('nombre');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');

        Telefonia::create([
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'precio' => $precio,
        ]);

        $cable = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
                $internet = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $telefonia = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $paquetes = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
                $usuarios = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
                $cambio=DB::table('cambioplan')->select('id', 'nombre', 'apellido', 'plan')->get();
                return view('administrador', compact('cable', 'internet', 'telefonia', 'paquetes', 'usuarios','cambio'));

    }

    public function nuevo_internet(Request $request){


        $nombre = $request->input('nombre');
        $cantidad = $request->input('cantidad');
        $precio = $request->input('precio');

        Internet::create([
            'nombre' => $nombre,
            'cantidad' => $cantidad,
            'precio' => $precio,
        ]);

        $cable = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
                $internet = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $telefonia = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $paquetes = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
                $usuarios = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
                $cambio=DB::table('cambioplan')->select('id', 'nombre', 'apellido', 'plan')->get();
                return view('administrador', compact('cable', 'internet', 'telefonia', 'paquetes', 'usuarios','cambio'));

    }

    public function nuevo_paquete(Request $request){

        $nombre = $request->input('nombre');
        $paquete = $request->input('paquete');
        $precio = $request->input('precio');

        Paquete::create([
            'nombre' => $nombre,
            'paquete' => $paquete,
            'precio' => $precio,
        ]);

        $cable = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
                $internet = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $telefonia = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $paquetes = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
                $usuarios = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
                $cambio=DB::table('cambioplan')->select('id', 'nombre', 'apellido', 'plan')->get();
                return view('administrador', compact('cable', 'internet', 'telefonia', 'paquetes', 'usuarios','cambio'));

    }

    public function nuevo_usuario(Request $request)
    {

        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $cable = $request->input('cable');
        $internet = $request->input('internet');
        $telefonia = $request->input('telefonia');
        $paquetes = $request->input('paquetes');
        $precio = $request->input('precio');

        if($cable==""){

            $cable="0";

        }if($internet==""){

            $internet="0";

        }if($telefonia==""){

            $telefonia="0";

        }if($paquetes==""){

            $paquetes="0";

        }

        Usuario::create([
            'nombre' => $nombre,
            'apellido' => $apellido,
            'cable' => $cable,
            'internet' => $internet,
            'telefonia' => $telefonia,
            'paquetes' => $paquetes,
            'precio' => $precio,
        ]);

        $cable = DB::table('cable')->select('id', 'nombre', 'canales', 'precio')->get();
                $internet = DB::table('internet')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $telefonia = DB::table('telefonia')->select('id', 'nombre', 'cantidad', 'precio')->get();
                $paquetes = DB::table('paquetes')->select('id', 'nombre', 'paquete', 'precio')->get();
                $usuarios = DB::table('usuarios')->select('id', 'nombre', 'apellido', 'cable', 'internet', 'telefonia', 'paquetes', 'precio')->get();
                $cambio=DB::table('cambioplan')->select('id', 'nombre', 'apellido', 'plan')->get();
                return view('administrador', compact('cable', 'internet', 'telefonia', 'paquetes', 'usuarios','cambio'));
    }

    public function cambio(){


        return "cambio";

    }

}
