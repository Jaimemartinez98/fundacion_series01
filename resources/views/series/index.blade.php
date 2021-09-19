@extends('master')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Serie</th>
                <th scope="col">Nombre Empresa</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
                    <td>{{ $serie->id }}</td>
                    <td>{{ $serie->nombre_serie }}</td>
                    <td>{{ $serie->nombre_empresa }}</td>
                    <td>
                        <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-warning">EDITAR</a>
                        <form action="{{ route('series.delete', $serie->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">ELIMINAR</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
