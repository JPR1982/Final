@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">NOMBRE DE PELICULA</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>CARACTERISTICAS</h2>
                <ul >
                @foreach ($peliculasAleatorias as $peliculaRW)
                    <li>
                        <a href="">{{$peliculaRW["title"]}}</a>
                    </li>
                @endforeach
                </ul>
            </article>    
            <article class= "col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
            <h2>ACTORES</h2>
                <ul>
                @foreach ($peliculasUltimas as $peliculaUlt)
                    <li>
                        <a href="">{{$peliculaUlt["title"]}}</a>
                    </li>
                @endforeach
                </ul>
            </article>
        </section>
    </div>
@endsection
