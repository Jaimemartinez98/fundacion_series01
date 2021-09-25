@extends('master')

<link rel="stylesheet" href="{{ asset('/css/estilos_empresa.css') }}" />


@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-12">
                <label for="nombre_empresa" class="form-label">Nombre Empresa</label>
                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa" value="{{old('nombre_empresa')}}"
                    placeholder="Introduzca el nombre de la empresa">
                @if ($errors->has('nombre_empresa'))
                    <p class="text-danger">{{ $errors->first('nombre_empresa') }}</p>
                @endif
            </div>

            <div class="col-3">
                <label for="celular_empresa" class="form-label">Celular</label>
                <input type="number" class="form-control" id="celular_empresa" name="celular_empresa" value="{{old('celular_empresa')}}"
                    placeholder="Introduzca el celular de la empresa">
                @if ($errors->has('celular_empresa'))
                    <p class="text-danger">{{ $errors->first('celular_empresa') }}</p>
                @endif
            </div>

            <div class="col-3">
                <label for="direccion_empresa" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion_empresa" name="direccion_empresa" value="{{old('direccion_empresa')}}"
                    placeholder="Introduzca el dirección de la empresa">
                @if ($errors->has('direccion_empresa'))
                    <p class="text-danger">{{ $errors->first('direccion_empresa') }}</p>
                @endif
            </div>
            <div class="col-3">
                <label for="nit_empresa" class="form-label">NIT</label>
                <input type="text" class="form-control" id="nit_empresa" name="nit_empresa" value="{{old('nit_empresa')}}"
                    placeholder="Introduzca el NIT de la empresa">
                @if ($errors->has('nit_empresa'))
                    <p class="text-danger">{{ $errors->first('nit_empresa') }}</p>
                @endif
            </div>
            <div class="col-3">
                <label for="correo_empresa" class="form-label">Correo de contacto</label>
                <input type="text" class="form-control" id="correo_empresa" name="correo_empresa" value="{{old('correo_empresa')}}"
                    placeholder="Introduzca el NIT de la empresa">
                @if ($errors->has('correo_empresa'))
                    <p class="text-danger">{{ $errors->first('correo_empresa') }}</p>
                @endif
            </div>

            <div class="col-12 estilo_center">
                <button type="submit" class="btn btn-success estilo_boton">ENVIAR</button>
            </div>

        </div>


    </form>


@endsection
