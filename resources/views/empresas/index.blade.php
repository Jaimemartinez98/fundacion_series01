@extends('master')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">NIT</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Mark</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <button type="button" class="btn btn-warning">EDITAR</button>
                    <button type="button" class="btn btn-danger">ELIMINAR</button>
                </td>
            </tr>

        </tbody>
    </table>

@endsection
