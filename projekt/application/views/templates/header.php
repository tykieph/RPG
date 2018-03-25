<!DOCTYPE html>
<html>
    <head>
        <title>Projekt - <?=$title;?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
       
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>

<body>

<!--Visible everywhere except sm devices-->
<nav class="navbar navbar-dark bg-dark justify-content-center d-none d-sm-block">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="home">Strona główna</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about">O nas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="contact">Kontakt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="character">Bohater</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="register">Zarejestruj się</a>
        </li>
    </ul>
</nav>


<!--Visible only on sm devices-->
<div class="pos-f-t d-block d-sm-none">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4" >
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="home">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="character">Opis bohatera</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Zarejestruj się</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>

<div class="container-fluid" id="<?=$title;?>">