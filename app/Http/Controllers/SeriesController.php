<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresas;
use App\Models\Series;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(){

        $series = DB::table('series AS s')
                ->select('s.id','s.nombre_serie','e.nombre_empresa')
                ->join('empresas AS e', 's.empresa_id', '=', 'e.id')
                ->get();

        return view('series.index', [
            'series' => $series
        ]

        );
    }

    public function create(){

        $empresas = Empresas::get();

        return view('series.crear_serie', [
            'empresas' => $empresas
            ]);
    }

    public function store(Request $request){

        $series = new Series;
        $series->nombre_serie = $request->nombre_serie;
        $series->caratula = $request->caratula;
        $series->descripcion = $request->descripcion;
        $series->empresa_id = $request->empresa_id;
        $series->save();

        return back();
    }

    public function show($id){
        //Mostrar un registro de la base de datos de usuario final
    }

    public function edit($id){

        $serie = Series::where('id',$id)->first();
        $empresas = Empresas::get();

        return view('series.edit_serie', [
            'serie' => $serie,
            'empresas' => $empresas
            ]);
    }

    public function update(Request $request, $id){

        $serie = Series::where('id',$id)->first();
        $serie->nombre_serie = $request->nombre_serie;
        $serie->caratula = $request->caratula;
        $serie->descripcion = $request->descripcion;
        $serie->empresa_id = $request->empresa_id;
        $serie->save();

        return back();

    }

    public function delete($id){

        Series::where('id',$id)->delete();

        return back();
    }
}
