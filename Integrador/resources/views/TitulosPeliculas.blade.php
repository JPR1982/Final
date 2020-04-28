@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">TODOS LOS TITULOS</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <ul class="ListDetalle">
                    @foreach($titulos as $tit)
                    <li> - {{$tit["title"]}}
                        @if($tit->Genero)
                            ({{$tit->Genero["name"]}})
                        @endif
                    </li>
                    @endforeach
                </ul>
                <br>
                <div>{{$titulos->links()}}</div>
                <br><br>
                <form action="/titulos" method="post">
                    @csrf
                    <select name="genero">
                        @foreach($generos as $opciones)
                            <option value="{{$opciones->id}}">{{$opciones["name"]}}</option>
                        @endforeach
                    </select>
                    <br>
                    <button type="submit">BUSCAR POR GENERO</button>
                </form> 
                <br>
                <form action="/titulosfiltro" method="post">
                    @csrf
                    <label for="filtro">BUSCAR PELICULA</label>
                    <input type="text" name="filtro" id=filtro>
                    <br>
                    <button type="submit">BUSCAR</button>
                </form> 
            </article>    
        </section>
    </div>
@endsection
