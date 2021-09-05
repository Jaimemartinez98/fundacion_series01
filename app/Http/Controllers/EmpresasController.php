<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\Pruebas;

class EmpresasController extends Controller
{
    public function index(){

        // $empresas = Empresas::where('id',3)->first();

        // dd($empresas);

        $pruebas = Pruebas::all();

        dd($pruebas);


        return view('empresas.index');

    }

    public function create(){

        return view('empresas.crear_empresa');

    }

    public function store(){
        //Introduce los datos que provienen de un formulario
    }

    public function show($id){
        //Mostrar un registro de la base de datos de usuario final
    }

    public function edit($id){
        //Mostrar un registro de la base de datos pero nos permite añadirle o quitarle cosas
    }

    public function update($id){
        //Va a actualizar un registro que proviene del formulario edit
    }

    public function delete($id){
        //Elimina un registro de la base datos
    }



}
