<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        //Muestra un listado de una consulta
    }

    public function create(){
        //Muestra un formulario donde luego introduciremos datos
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
