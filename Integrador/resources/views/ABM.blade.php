@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">PELICULAS</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>MENU</h2>
                <a href="/nuevaPelicula">ALTA</a>
                <br>
                <a href="/bajarPelicula">BAJA</a>
                <br>
                <a href="/modificarPelicula">MODIFIACAR</a>
                <br>
            </article>    
        </section>
    </div>
@endsection
