@extends('master')

<style>

 .estilo_imagen_lista{
     width: 40px !important;
 }
</style>
@section('content')
    <div class="container">
        <div class="row">



            <div class="col-6 justify-content-center">


                <img src="{{ asset('files/' . $serie->caratula) }}" class="card-img-top estilo_imagen">


            </div>


            <div class="col-6">
                <h2>{{ $serie->nombre_serie }}</h2>
                <p>{{ $serie->descripcion }}</p>

                <iframe width="560" height="315" src="https://www.youtube.com/embed/wfjlNisONJY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12">
            <textarea class="form-control" placeholder="Deja tu comentario acá" id="floatingTextarea" rows="5"></textarea>
        </div>

        <div class="col-12">

            <p>Tambien podrías ver...</p>

            <ul class="list-group">
                @foreach ($series as $serie)
                <a href="{{route('series.show', $serie->id)}}">
                    <li class="list-group-item">
                        <img src="{{ asset('files/' . $serie->caratula) }}" class="card-img-top estilo_imagen_lista">
                        {{$serie->nombre_serie}}
                    </li>
                </a>
                @endforeach
            </ul>


        </div>
    </div>
@endsection
