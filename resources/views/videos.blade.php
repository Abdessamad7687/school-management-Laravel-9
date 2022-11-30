<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESPAV</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
</head>
<body>

 <!-- header -->
 <header>
        <label for="checkbox_toggle" class="hamburger" style="margin-bottom: 25px;">&#9776;</label>
        <div id="navBar">
            <a href="/"><img src="{{ asset('img/logo2.png') }}" alt="" class="logo"></a>
                <ul class="list-items1">
                    <li><a href="{{ url('/') }}">Acceuil</a></li>
                </ul>
            <ul class="list-items">
                <li><a href="{{ url('/News') }}">News</a></li>
                <li> <a href="./reportages.html">Reportages</a></li>
                <li><a href="./Couvertures Mediatiques.html">Couvertures Médiatiques</a></li>
                <li><a href="./Emission.html">Émissions</a></li>
                <li><a href="./Magazines.html">Magazines</a></li>
                <li><a href="./Podcast.html">Podcast</a></li>
                <li><a href="./Making off.html">Making Off</a></li>
                <li><a href="./Court Metrage.html">courts métrage </a></li>
                <li><a href="./Documentaire.html">Documentaire
                    </a></li>
                <li><a href="./Ecole.html">Autres vidéos</a></li>
            </ul>
        </div>
    </header>
    <br>
    <br>


    @yield('main')
    
</body>
</html>