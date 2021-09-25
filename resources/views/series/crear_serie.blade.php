@extends('master')

<link rel="stylesheet" href="{{ asset('/css/estilos_empresa.css') }}" />


@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('series.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-12">
                <label for="nombre_serie" class="form-label">Nombre Serie</label>
                <input type="text" class="form-control" id="nombre_serie" name="nombre_serie"
                    value="{{ old('nombre_serie') }}" placeholder="Introduzca el nombre de la serie">
                @if ($errors->has('nombre_serie'))
                    <p class="text-danger">{{ $errors->first('nombre_serie') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="caratula" class="form-label">Caratula</label>
                <input type="file" class="form-control" id="caratula" name="caratula" placeholder="Introduzca la portada"
                    value="{{ old('caratula') }}" accept="image/*">
                @if ($errors->has('caratula'))
                    <p class="text-danger">{{ $errors->first('caratula') }}</p>
                @endif
            </div>

            <div class="col-4">
                <label for="descripcion" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion"
                    value="{{ old('descripcion') }}" placeholder="Introduzca el descripción de la serie">
                @if ($errors->has('correo_empresa'))
                    <p class="text-danger">{{ $errors->first('descripcion') }}</p>
                @endif
            </div>
            <div class="col-4">
                <label for="empresa_id" class="form-label">Seleccione la empresa</label>
                <select class="form-select" aria-label="Default select example" name="empresa_id">
                    <option value="">Porfavor seleccione una empresa...</option>
                    @foreach ($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre_empresa }}</option>
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
