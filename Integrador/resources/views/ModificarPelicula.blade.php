@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">MODIFICAR PELICULA</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>SELECIONE PELICULA</h2>
                <form action="/modificarPelicula" method="post">
                    @csrf
                    <select name="titulo">
                        @foreach($titulos as $tit)
                            <option value="{{$tit->id}}">{{$tit["title"]}}</option>
                        @endforeach
                    </select>
                    <br><br>
                    <button type="submit">MODIFICAR</button>
                </form> 
            </article>
            <article class= "col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
                <h2>PELICULA A MODIFICAR</h2>
                <form action="modificarPelicula" method="post"> 
                @csrf
                @foreach($titulosId as $val)
                    <label for="titulo">TITULO </label><br>
                    <label for="titulo">{{$val['title']}} </label><br> <input type="text" name="titulo" id="titulo" placeholder="Ingrese el nuevo titulo">
                    <br><br>
                    <label for="rating">RATING</label><br>
                    <input type="text" name="rating" id=rating value="{{$val['rating']}}">
                    <br><br>
                    <label for="premios">PREMIOS</label><br>
                    <input type="text" name="premios" id="premios" value="{{$val['awards']}}">
                    <br><br>
                    <label for="estreno">FECHA ESTERNO</label><br>
                    <input type="date" name="estreno" id=estreno value="{{$val['release_date']}}">
                    <br><br>
                    <label for="genero">GENERO</label><br>
                @endforeach
                    <select name="genero">
                        @foreach($generos as $opciones)
                            <option value="{{$opciones->id}}">{{$opciones["name"]}}</option>
                        @endforeach
                    </select>
                    <br><br>
                    <button type="submit">CARGAR</button>
                
                </form>
                
            </article>
        </section>
    </div>
@endsection