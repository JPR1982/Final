@extends("/plantilla/plantillaGeneral")
@section("Principal")
    <div class="container">
        <section class= "row p-2 justify-content-center">
            <h1 class="col-md-12 col-sm-12 p-3 text-center">NUEVA PELICULA</h1>
        </section>
        <section class="row p-2 justify-content-center listPeliculas">
            <article class="col-md-5 col-sm-12 p-3 m-3 border bg-light text-center">
            <div class="errors">
		        <ul>
		            @foreach($errors->all() as $error)
			        <li>{{ $error }}</li>
		            @endforeach
		        </ul>
	        </div>
                <form action="/nuevaPelicula" method="post">
                @csrf
                    <label for="titulo">TITULO</label><br>
                    <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}">
                    <br><br>
                    <label for="rating">RATING</label><br>
                    <input type="text" name="rating" id=rating value="{{old('rating')}}"> 
                    <br><br>
                    <label for="premios">PREMIOS</label><br>
                    <input type="text" name="premios" id="premios" value="{{old('premios')}}">
                    <br><br>
                    <label for="estreno">FECHA ESTERNO</label><br>
                    <input type="date" name="estreno" id=estreno value="{{old('estreno')}}">
                    <br><br>
                    <label for="genero">GENERO</label><br>
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
