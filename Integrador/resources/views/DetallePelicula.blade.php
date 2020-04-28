@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">DETALLE DE PELICULA</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>CARACTERISTICAS</h2>
                <ul class="ListDetalle">
                    <li>TITULO: {{$detalle["title"]}}</li>
                    <li>RATING: {{$detalle["rating"]}}</li>
                    <li>PREMIOS: {{$detalle["awards"]}}</li>
                    <li>FECHA DE ESTRENO: {{$detalle["release_date"]}}</li>
                </ul>
            </article>    
            <article class= "col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
            <h2>ACTORES</h2>
                <ul class="ListDetalle">
                @foreach ($detalle->Actores as $actores)
                    <li>NOMBRE: {{$actores["first_name"]}}</li>
                    <li>APELLIDO: {{$actores["last_name"]}}</li>
                    <li>RATING: {{$actores["rating"]}}</li>
                    <br>
                @endforeach
                </ul>
            </article>
        </section>
    </div>
@endsection
