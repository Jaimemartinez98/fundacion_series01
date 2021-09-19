@extends('master')

<link rel="stylesheet" href="{{ asset('/css/estilos_empresa.css') }}" />


@section('content')

    <form action="{{ route('series.update', $serie->id) }}" method="POST">
        @csrf
        @method('put')

        <div class="row">

            <div class="col-12">
                <label for="nombre_serie" class="form-label">Nombre Serie</label>
                <input type="text" class="form-control" id="nombre_serie" name="nombre_serie"
                    value="{{ $serie->nombre_serie }}" placeholder="Introduzca el nombre de la serie">
            </div>

            <div class="col-4">
                <label for="caratula" class="form-label">Caratula</label>
                <input type="text" class="form-control" id="caratula" name="caratula" placeholder="Introduzca la portada"
                    value="{{ $serie->caratula }}">
            </div>

            <div class="col-4">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion"
                    value="{{ $serie->descripcion }}" placeholder="Introduzca el descripción de la serie">
            </div>
            <div class="col-4">
                <label for="empresa_id" class="form-label">Seleccione la empresa</label>
                <select class="form-select" aria-label="Default select example" name="empresa_id">
                    <option selected>Porfavor seleccione una empresa...</option>
                    @foreach ($empresas as $empresa)
                        @if ($serie->empresa_id == $empresa->id)
                            <option value="{{ $empresa->id }}" selected>{{ $empresa->nombre_empresa }}</option>
                        @else
                            <option value="{{ $empresa->id }}">{{ $empresa->nombre_empresa }}</option>
                        @endif
                    @endforeach

                </select>

            </div>


            <div class="col-12 estilo_center">
                <button type="submit" class="btn btn-success estilo_boton">ENVIAR</button>
            </div>

        </div>


    </form>


@endsection
