<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller
{
    public function index(){


        $empresas = Empresas::get();

        return view('empresas.index', [
            'empresas' => $empresas
        ]

        );

    }

    public function create(){

        return view('empresas.crear_empresa');

    }

    public function store(Request $request){

        $request->validate(
            [
                'nombre_empresa' => 'required',
                'direccion_empresa' => 'required',
                'nit_empresa' => 'required',
                'celular_empresa' => 'required|numeric',
                'correo_empresa' => 'required|email',
            ]
            ,
            [
                'nombre_empresa.required' => 'El nombre de la empresa es requerido',
                'direccion_empresa.required' => 'La dirección de la empresa es requerida',
                'nit_empresa.required' => 'El nit de la empresa es requerido',
                'celular_empresa.required' => 'El celular de la empresa es requerido',
                'celular_empresa.numeric' => 'El celular debe ser un dato númerico',
                'correo_empresa.required' => 'El correo es requerido',
                'correo_empresa.email' => 'El correo debe ser real ej. example@example.com',

            ]
        );

        $empresa = new Empresas;
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->direccion = $request->direccion_empresa;
        $empresa->nit = $request->nit_empresa;
        $empresa->telefono = $request->celular_empresa;
        $empresa->correo_contacto = $request->correo_empresa;
        $empresa->save();

        return back()->with('message','La empresa se creo exitosamente');



    }

    public function show($id){
        //Mostrar un registro de la base de datos de usuario final
    }

    public function edit($id){
        //Mostrar un registro de la base de datos pero nos permite añadirle o quitarle cosas
        $empresa = Empresas::where('id',$id)->first();

        return view('empresas.edit_empresa', [
            'empresa' => $empresa
        ]);


    }

    public function update(Request $request, $id){

        //Va a actualizar un registro que proviene del formulario edit

        $request->validate(
            [
                'nombre_empresa' => 'required',
                'direccion_empresa' => 'required',
                'nit_empresa' => 'required',
                'celular_empresa' => 'required|numeric',
                'correo_empresa' => 'required|email',
            ]
            ,
            [
                'nombre_empresa.required' => 'El nombre de la empresa es requerido',
                'direccion_empresa.required' => 'La dirección de la empresa es requerida',
                'nit_empresa.required' => 'El nit de la empresa es requerido',
                'celular_empresa.required' => 'El celular de la empresa es requerido',
                'celular_empresa.numeric' => 'El celular debe ser un dato númerico',
                'correo_empresa.required' => 'El correo es requerido',
                'correo_empresa.email' => 'El correo debe ser real ej. example@example.com',

            ]
        );

        $empresa = Empresas::where('id',$id)->first();
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->direccion = $request->direccion_empresa;
        $empresa->nit = $request->nit_empresa;
        $empresa->telefono = $request->celular_empresa;
        $empresa->correo_contacto = $request->correo_empresa;
        $empresa->save();

        return redirect('/empresas')->with('message','La empresa se actualizo exitosamente');
    }

    public function delete($id){

        Empresas::where('id',$id)->delete();

        return back();
    }



}
