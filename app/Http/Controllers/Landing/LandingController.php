<?php

namespace App\Http\Controllers\Landing;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index(){

        return view('landing.layout');
    }

    public function addClients(Request $request){

        $rule = [

            'nombre' => 'required|string|max:255',
            'apellidos' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'telefono' => 'required',
            'mensaje' => '',

        ];

        $data = $request->validate($rule);
        $Cliente = Cliente::create($data);

        //Enviar Correos
        $datos = $request->all();
        Mail::send('landing.email',$datos, function ($message) use($datos){

            $message->from('gflandingpage@gmail.com')
            ->to('silviotista93@gmail.com','Mauricio')
            ->subject('Nuevo Cliente');
        });


        return back()->with('flash',$datos['nombre'].' , Tu mensaje ha sido recibido');

    }

}
