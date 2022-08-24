<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tabela.css') }}">

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
        <h1>Relatórios</h1>
        </div>
        
        <div class="divform">  
            <div class="container2">
            <table class="tabela">
                    <thead>
                        <tr>
                            <th>Qtd. Corridas Agosto</th>
                            <th>Qtd. Atendidas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $responseArray2['CorridasFinalizadas'] }}</td>
                            <td>{{ $responseArray2['CorridasMes'] }}</td>
                        </tr>
                    </tbody>  
                </table>
                <br>
                <br>
                <table class="tabela">
                    
                    <thead>
                        <tr>
                            <th>Origem</th>
                            <th>Destino</th>
                            <th>Cod.Taxi</th>
                            <th>Cliente</th>
                            <th>Preço</th>
                            <th>Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($responseArray as $corridas)
                        <tr>
                            <td>{{ $corridas['origem'] }}</td>
                            <td>{{ $corridas['destino'] }}</td>
                            <td>{{ $corridas['id_taxi'] }}</td>
                            <td>{{ $corridas['nome_usuario'] }}</td>
                            <td>{{ $corridas['preco'] }}</td>
                            <td>{{ $corridas['id_empresa'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    
                </table>
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
