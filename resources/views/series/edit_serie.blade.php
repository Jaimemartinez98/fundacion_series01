@extends('master')

<link rel="stylesheet" href="{{ asset('/css/estilos_empresa.css') }}" />


@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('series.update', $serie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="row">

            <div class="col-12">
                <label for="nombre_serie" class="form-label">Nombre Serie</label>
                <input type="text" class="form-control" id="nombre_serie" name="nombre_serie"
                    value="{{ $serie->nombre_serie }}" placeholder="Introduzca el nombre de la serie">
                @if ($errors->has('nombre_serie'))
                    <p class="text-danger">{{ $errors->first('nombre_serie') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="caratula" class="form-label">Caratula</label>
                <a href="{{ asset('files/' . $serie->caratula) }}" target="_blank">Ver recurso actual</a>
                <input type="file" class="form-control" id="caratula" name="caratula" placeholder="Introduzca la portada" accept="images/*"
                    value="{{ $serie->caratula }}">
                @if ($errors->has('caratula'))
                    <p class="text-danger">{{ $errors->first('caratula') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion"
                    value="{{ $serie->descripcion }}" placeholder="Introduzca el descripción de la serie">
                @if ($errors->has('descripcion'))
                    <p class="text-danger">{{ $errors->first('descripcion') }}</p>
                @endif
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
                @if ($errors->has('empresa_id'))
                    <p class="text-danger">{{ $errors->first('empresa_id') }}</p>
                @endif
            </div>


            <div class="col-12 estilo_center">
                <button type="submit" class="btn btn-success estilo_boton">ENVIAR</button>
            </div>

        </div>


    </form>


@endsection
