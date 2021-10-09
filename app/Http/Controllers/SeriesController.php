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

        $request->validate(
            [
                'nombre_serie' => 'required',
                'caratula' => 'required',
                'descripcion' => 'required',
                'empresa_id' => 'required',
            ]
            ,
            [
                'nombre_serie.required' => 'El nombre de la serie es requerida',
                'caratula.required' => 'La caratula es requerida',
                'descripcion.required' => 'La descripción es requerida',
                'empresa_id.required' => 'La empresa es requerida',

            ]
        );

        $series = new Series;
        $series->nombre_serie = $request->nombre_serie;

        $series->descripcion = $request->descripcion;
        $series->empresa_id = $request->empresa_id;

       if ($request->hasfile('caratula')) {
           $file = $request->file('caratula');
           $nombre = "archivo_".time().".".$file->guessExtension();
           $ruta = public_path("files/".$nombre);

           copy($file,$ruta);
           $series->caratula = $nombre;
       }

        $series->save();

        return back()->with('message','La serie se creo exitosamente');
    }

    public function show($id){

        $serie = Series::where('id',$id)->first();
        $empresas = Empresas::get();
        $series = Series::whereNotIn('id', [$id])->get();

        return view('series.ver_serie', [
            'serie' => $serie,
            'empresas' => $empresas,
            'series' => $series
            ]);

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

        $request->validate(
            [
                'nombre_serie' => 'required',
                'caratula' => 'required',
                'descripcion' => 'required',
                'empresa_id' => 'required',
            ]
            ,
            [
                'nombre_serie.required' => 'El nombre de la serie es requerida',
                'caratula.required' => 'La caratula es requerida',
                'descripcion.required' => 'La descripción es requerida',
                'empresa_id.required' => 'La empresa es requerida',

            ]
        );

        $serie = Series::where('id',$id)->first();
        $serie->nombre_serie = $request->nombre_serie;
        $serie->descripcion = $request->descripcion;
        $serie->empresa_id = $request->empresa_id;

        if ($request->hasfile('caratula')) {
            $file = $request->file('caratula');
            $nombre = "archivo_".time().".".$file->guessExtension();
            $ruta = public_path("files/".$nombre);

            copy($file,$ruta);
            $series->caratula = $nombre;
        }

        $serie->save();

        return back()->with('message','La serie se actualizo exitosamente');

    }

    public function delete($id){

        Series::where('id',$id)->delete();

        return back();
    }
}
