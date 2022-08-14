<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    </head>
    <body>
        <nav>
            <img src="{{ asset('img/waterPark.png') }}" height="140px"/>
		    <ul>
                <li><a class="inicionav" href="#"></a></li>
		    	<li><a href="/inicio">Inicio</a></li>
		    	<li><a href="/waterpark">WaterPark</a></li>
		    	<li><a href="/hospedagem">Hospedagem</a></li>
                <li><a href="/taxi">Taxi</a></li>
                <li><a href="/auth/google/redirect">Entrar</a></li>
                <li><a class="fimnav" href="#"></a></li>
		    </ul>
	    </nav>
        <div class="navDetalhe"></div>
        <div class="bannerWP"></div>

        </script>

        <div class="Container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.885210102076!2d-38.20533383042603!3d-6.146116567167793!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a4ccc3c24db8e5%3A0xebb7c60f5ddbfc02!2sEstacionamento%20do%20IFRN%20-%20Campus%20Pau%20dos%20Ferros%20-%20Chico%20Caj%C3%A1%2C%20Pau%20dos%20Ferros%20-%20RN%2C%2059900-000!5e0!3m2!1spt-BR!2sbr!4v1657021666363!5m2!1spt-BR!2sbr" width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
