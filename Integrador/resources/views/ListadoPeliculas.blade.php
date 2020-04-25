@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">DETALLE DE PELICULAS</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>PELICULAS RANDOW</h2>
                <ul >
                @foreach ($peliculasAleatorias as $peliculaRW)
                    <li>
                        <a href="/detalle/{{$peliculaRW->id}}">{{$peliculaRW["title"]}}</a>
                    </li>
                @endforeach
                </ul>
            </article>    
            <article class= "col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
            <h2>ULTIMAS 5 PELICULAS</h2>
                <ul>
                @foreach ($peliculasUltimas as $peliculaUlt)
                    <li>
                        <a href="/detalle/{{$peliculaUlt->id}}">{{$peliculaUlt["title"]}}</a>
                    </li>
                @endforeach
                </ul>
            </article>
        </section>
    </div>
@endsection
