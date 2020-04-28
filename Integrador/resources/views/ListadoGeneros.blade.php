@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">TODOS LOS TITULOS</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <ul class="ListDetalle">
                    @foreach($generos as $gen)
                        <li>{{$gen["name"]}}</li>

                    @endforeach
                </ul>
                <br>
                <div>{{$generos->links()}}</div>
                <br><br>
                <div><input type="text" name="buscar" id="buscar"></div>
                <div><button type="submit">BUSCAR</button></div>
                    
                </p>
            </article>    
        </section>
    </div>
@endsection