@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">MODIFICAR PELICULA</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>SELECIONE PELICULA</h2>
                <form action="/bajarPelicula" method="post">
                    @csrf
                    <select name="titulo">
                        @foreach($titulos as $tit)
                            <option value="{{$tit->id}}">{{$tit["title"]}}</option>
                        @endforeach
                    </select>
                    <br><br>
                    <button type="submit">ELIMINAR</button>
                </form> 
            </article>
         </section>
    </div>
@endsection