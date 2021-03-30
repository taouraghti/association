@extends('layouts.userlayout')

@section('title','Home')

@section('content')

<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col col-lg-6 contact">
                <span style="margin-right: 20px; display: inline-block;"><i class="fas fa-phone-alt" style="margin-right: 3px"></i>0644197610</span>
                <span style="display: inline-block;"><i class="far fa-envelope" style="margin-right: 3px"></i>anas@gmail.com</span>
            </div>

            <div class="col col-lg-6 text-right res-soc">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="logo">
    <h1>Logo</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="app-nav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="#">Acceuil</a></li>
            <li class="nav-item"><a class="nav-link" href="#">A propos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Activité</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Actualités</a></li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Connexion
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Inscription</a>
              <a class="dropdown-item" href="#">se connecter</a>
            </div>
          </li>
        </ul>
        </div>
      </div>
    </nav>

<div class="container">

</div>

@endsection
