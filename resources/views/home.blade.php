@extends('master')

<style>
    .estilo_card {
        border: 2px solid #6c6a6a !important;
        border-radius: 0px 0px 50px 0px !important;
        box-shadow: 7px 11px 20px 2px #5751a8 !important;
        margin-bottom: 40px !important;
    }

    .hover figure {
        background: #5751a8;
        border-radius: 0px 0px 50px 0px;

    }

    .hover figure img {
        opacity: 1;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;

    }

    .hover figure:hover img {
        opacity: .5;
    }

    .estilo_boton {
        border-radius: 0px 0px 20px 20px !important;
        background: #7d79bc !important;
        color: white !important;
    }

    .estilo_imagen{
        min-height: 545px !important;
        max-height: 545px !important;
    }

</style>
@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @foreach ($series as $serie)

                <div class="col-4">

                    <div class="card estilo_card">
                        <div class="hover">
                            <figure>
                                <img src="{{ asset('files/'.$serie->caratula) }}" class="card-img-top estilo_imagen">
                            </figure>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$serie->nombre_serie}}</h5>
                            @php
                                $caracteres = 250;
                                $descripcion_corta = substr($serie->descripcion, 0, $caracteres) . '- Ver más...';

                            @endphp
                            <p class="card-text">{{$descripcion_corta}}</p>
                            <center> <a href="{{route('series.show', $serie->id)}}" class="btn estilo_boton">Ver</a></center>

                        </div>
                    </div>

                </div>

            @endforeach
        </div>
    </div>
@endsection
