@extends('layouts.userlayout')

@section('title','Association')

@section('content')

<div class="upper-bar">
    <div class="container">
        <div class="row">
            <div class="col contact">
                <span style="margin-right: 10px; display: inline-block;"><i class="fas fa-phone-alt" style="margin-right: 3px"></i>0644197610</span>
                <span style="display: inline-block;"><i class="far fa-envelope" style="margin-right: 3px"></i>anas@gmail.com</span>
            </div>

            <div class="col text-right res-soc">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>
</div>
<?php
   if(isset($users))
       print_r($users);
?>
<nav class="navbar navbar-expand-lg navbar-light" id="acceuil">
    <div class="container">
      <a class="navbar-brand" href="#">Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="app-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#" data-value="acceuil">Acceuil</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-value="apropos">A propos</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-value="activites">Activités</a></li>
            <li class="nav-item"><a class="nav-link" href="#" data-value="actualites">Actualités</a></li>
        </ul>
        <ul class="navbar-nav navbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Connexion
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route("register")}}">Inscription</a>
              <a class="dropdown-item" href="{{route("login")}}">Se connecter</a>
            </div>
          </li>
        </ul>
        </div>
    </div>
</nav>

<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item carousel-one active">
            </div>
            <div class="carousel-item carousel-two">
            </div>
            <div class="carousel-item carousel-three">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

    <div class="activite text-center" id="activites">
        <div class="container">
        <h2 style="margin-bottom: 50px">Activités</h2>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-futbol fa-3x rounded-circle"></i>
                    <h3>Football</h3>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quisquam consectetur, iure corrupti alias hic similique eveniet perspiciatis esse earum reiciendis nam accusantium!</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-basketball-ball fa-3x rounded-circle"></i>
                    <h3>bascketball</h3>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quisquam consectetur, iure corrupti alias hic similique eveniet perspiciatis esse earum reiciendis nam accusantium!</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-theater-masks fa-3x rounded-circle"></i>
                    <h3>théatre</h3>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quisquam consectetur, iure corrupti alias hic similique eveniet perspiciatis esse earum reiciendis nam accusantium!</p>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <i class="fas fa-music fa-3x rounded-circle"></i>
                    <h3>Music</h3>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati quisquam consectetur, iure corrupti alias hic similique eveniet perspiciatis esse earum reiciendis nam accusantium!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-images text-center" id="actualites">
        <div class="container">
            <h2 style="margin-bottom: 40px">Dernieres photos</h2>
            <ul class="list-unstyled row">
                <li data-class="all" class="col-md active">All</li>
                <li data-class=".football" class="col-md">Football</li>
                <li data-class=".basketball" class="col-md">basketball</li>
                <li data-class=".theatre" class="col-md">Théatre</li>
                <li data-class=".music" class="col-md">Music</li>
            </ul>
        </div>
        <div class="row" style="margin-top: 40px">
            <div class="col-sm">
                <img class="football" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
            <div class="col-sm">
                <img class="basketball" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
            <div class="col-sm">
                <img class="football" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
            <div class="col-sm">
                <img class="basketball" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <img class="theatre" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
            <div class="col-sm">
                <img class="music" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
            <div class="col-sm">
                <img class="theatre" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
            <div class="col-sm">
                <img class="music" src="{{asset('assets/front/images/latest/03.jpg')}}" alt="">
            </div>
        </div>
    </div>

    <div class="join-us" id="apropos">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <p>You think we're cool? Let's work together</p>
                </div>
                <div class="col-md-6 text-right">
                    <a href="{{route("register")}}">Join us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="site-info">
                        <h3>Logo</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Impedit possimus ex quaerat assumenda suscipit eos odit sequi autem error illo,
                            officia, sed quae reiciendis modi nam necessitatibus quos deserunt unde.
                        </p>
                        <a href="#" style="color: #000"><i class="fas fa-chevron-circle-right" style="margin-right: 5px"></i>Read more</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="helpful">
                        <h3>Helpful-links</h3>
                        <div class="row" style="padding-left:10px">
                            <div class="col-sm">
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-chevron-right"></i>About</li>
                                    <li><i class="fas fa-chevron-right"></i>Team</li>
                                    <li><i class="fas fa-chevron-right"></i>Privacy</li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-chevron-right"></i>About</li>
                                    <li><i class="fas fa-chevron-right"></i>Team</li>
                                    <li><i class="fas fa-chevron-right"></i>Privacy</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contactez-nous">
                        <h3>Contactez-nous</h3>
                        <ul class="list-unstyled">
                            <li>Ensa Khouribga</li>
                            <li>Phone: 0644197610</li>
                            <li>Email: <a href="#" style="color:#08526d">anasidrissi@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col text-left text-uppercase">copyright 2020 logo &copy; All right reserved</div>
                <div class="col text-right">
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
