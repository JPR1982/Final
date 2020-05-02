<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <!-- VIEWPORT - Para que nuestro proyecto sea adaptable de PC a Smarphone. -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<!-- CSS -->
	<link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    
	<!-- ICONOS -->
	<link rel="stylesheet" href="{{ asset('css/fontsMenu.css') }}">

    
    <title>PROYECTO FINAL</title>
</head>
<body>
    <header>
        <!-- Menu principal celular-->
            <input type="checkbox" id="btn_menu">
        <label for="btn_menu"><span class="icon-menu3"></span>MENU</label>
        
        <!-- Menu princila PC-->
        <nav class="menu_principal">
            <ul>
                <li><a href="/inicial"><span class="icon-profile"></span>PRINCIPAL</a></li>
                <li><a href=""><span class="icon-clipboard"></span>PELICULAS</a></li>
                <li><a href=""><span class="icon-spell-check"></span>ACTORES</a></li>
                <li><a href="/titulos"><span class="icon-stats-bars"></span>TITULOS</a></li>
                <li><a href="/ABM"><span class="icon-coin-dollar"></span>ABM</a></li>
            </ul>
        </nav>
    </header>
    
    <section>
        @yield("Principal")
    </section>

    <footer>
        <h6>PROYECTO DE JUAN REALE</h6>    
    </footer>

</body>
</html>