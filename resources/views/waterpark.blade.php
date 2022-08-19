<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/galeria.css') }}">

    </head>
    <body>
        <nav>
            <img src="{{ asset('img/waterPark.png') }}" height="140px"/>
		    <ul>
            <li><a class="inicionav" href="#"></a></li>
		    	<li><a href="/inicio">Inicio</a></li>
		    	<li><a href="/waterpark">WaterPark</a></li>
		    	<li><a href="/hospedagem">Hospedagem</a></li>
                @if($UserLogado['name'] != null) 
                <li><a href="/taxi">Taxi</a></li> 
                @endif
                @if($UserLogado['name'] == null) 
                <li><a href="auth/google">Entrar</a></li>
                @endif
                @if($UserLogado['name'] != null) 
                <li><a href="logout">Sair</a></li>
                @endif
                <li><a class="fimnav" href="#"></a></li>
		    </ul>
            <h1>{{ $UserLogado['name'] }}</h1>
	    </nav>
        <div class="navDetalhe"></div>
        <div class="bannerWP"></div>

        <div class="TituloContainer">
        <h1>Conheça o Water Park</h1>
        </div>
        
        <div class="Containergaleria">
        <div class="gallery-container">
            
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto1.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto2.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto3.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto4.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto3.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto2.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto4.png') }}">
            </a>
            <a href="#" class="gallery-items">
                <img src="{{ asset('img/galeria/foto1.png') }}">
            </a>

            
        </div>
        </div>

        <div class="footer-container">
            <footer>
                <div class="footer01">
                    <div class="logo-text">
                        <img src="{{ asset('img/waterPark.png') }}" alt="Logo footer">
                    </div>
                    <p>Thermas WaterPark <br/>
                        Rodovia RN 999, Km999 <br/>
​                          <br/>
                        Tel: (99) 99999-9999 <br/>
                        E-mail: contato@thermaspacu.com.b</p>
                    <div class="icons">
                        <ion-icon size="large" name="logo-twitter" class="icon"></ion-icon>
                        <ion-icon size="large" name="logo-instagram" class="icon"></ion-icon>
                        <ion-icon size="large" name="logo-facebook" class="icon"></ion-icon>
                    </div>
               </div>
            </footer>
        </div>

        <div class="footer2">
            <p>&copy; 2022 Copyright - Agildo Medeiros Junior</p>
        </div>
        
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
