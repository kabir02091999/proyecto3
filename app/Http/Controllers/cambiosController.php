<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class cambiosController extends Controller
{
    public function principa(){
        return view('inicio');
    }

    public function cable(){
        $datos = DB::table('cable')->select('id','nombre','canales','precio')->get();
        return view('cable',compact('datos'));
    }

    public function internet(){
        $datos = DB::table('internet')->select('id','nombre','cantidad','precio')->get();
        return view('internet',compact('datos'));
    }

    public function llamada(){
        $datos = DB::table('telefonia')->select('id','nombre','cantidad','precio')->get();
        return view('llamada',compact('datos'));
    }

    public function paquetes(){
        $datos = DB::table('paquetes')->select('id','nombre','paquete','precio')->get();
        return view('paquetes',compact('datos'));
    }

}
