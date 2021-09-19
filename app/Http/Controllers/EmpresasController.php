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

        $empresa = new Empresas;
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->direccion = $request->direccion_empresa;
        $empresa->nit = $request->nit_empresa;
        $empresa->telefono = $request->celular_empresa;
        $empresa->correo_contacto = $request->correo_empresa;
        $empresa->save();

        return back();


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
        $empresa = Empresas::where('id',$id)->first();
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->direccion = $request->direccion_empresa;
        $empresa->nit = $request->nit_empresa;
        $empresa->telefono = $request->celular_empresa;
        $empresa->correo_contacto = $request->correo_empresa;
        $empresa->save();

        return redirect('/empresas');
    }

    public function delete($id){

        Empresas::where('id',$id)->delete();

        return back();
    }



}
