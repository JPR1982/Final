@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">DETALLE DE PELICULAS</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>CARACTERISTICA</h2>
                <ul >
                    <li>
                        <p>TITULO:</p>
                    </li>
                </ul>
            </article>    
            <article class= "col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
            <h2>ACTORES</h2>
                <ul>
                    <li>
                        <p>ACTORES:</p>
                    </li>
                </ul>
            </article>
        </section>
    </div>
@endsection
