@extends('master')

<link rel="stylesheet" href="{{ asset('/css/estilos_empresa.css') }}" />


@section('content')

    <form action="{{ route('empresas.store') }}" method="POST">
        @csrf

        <div class="row">

            <div class="col-12">
                <label for="nombre_empresa" class="form-label">Nombre Empresa</label>
                <input type="text" class="form-control" id="nombre_empresa" name="nombre_empresa"
                    placeholder="Introduzca el nombre de la empresa">
            </div>

            <div class="col-4">
                <label for="celular_empresa" class="form-label">Celular</label>
                <input type="text" class="form-control" id="celular_empresa" name="celular_empresa"
                    placeholder="Introduzca el celular de la empresa">
            </div>

            <div class="col-4">
                <label for="direccion_empresa" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion_empresa" name="direccion_empresa"
                    placeholder="Introduzca el dirección de la empresa">
            </div>
            <div class="col-4">
                <label for="nit_empresa" class="form-label">NIT</label>
                <input type="text" class="form-control" id="nit_empresa" name="nit_empresa"
                    placeholder="Introduzca el NIT de la empresa">
            </div>

            <div class="col-12 estilo_center">
                <button type="submit" class="btn btn-success estilo_boton">ENVIAR</button>
            </div>

        </div>


    </form>


@endsection
