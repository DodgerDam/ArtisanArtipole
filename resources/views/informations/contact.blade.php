@extends('base')
@section('content')

        <div class="site-content main" data-aos="fade">

            <section class="section-bandeau section-bandeau__actualites">
                <picture>
                    <source media="(max-width: 768px)" srcset="./assets/images/bandeaux/exposition/salle-exposition-w768.webp" type="image/webp">
                    <source media="(max-width: 768px)" srcset="./assets/images/bandeaux/exposition/salle-exposition-w768.jpg" type="image/jpg">
                    <source media="(max-width: 1400px)" srcset="./assets/images/bandeaux/exposition/salle-exposition-w1440.webp" type="image/webp">
                    <source media="(max-width: 1400px)" srcset="./assets/images/bandeaux/exposition/salle-exposition-w1440.jpg" type="image/jpg">
                    <img data-src="./assets/images/bandeaux/exposition/salle-exposition-w1920.jpg" width="1920" height="550" alt="" uk-img />
                </picture>
                <div class="uk-position-center">
                    <div id="breadcrumb">
                        <div class="uk-container">
                            <ul class="uk-breadcrumb">
                                <li><a href="index.html" class="home">Accueil</a></li>
                                <li class="uk-disabled"><a href="#">Je recherche un artisan</a></li>
                            </ul>
                        </div>
                    </div>
                    <h1>Contact</h1>
                </div>
                <div class="pattern"></div>
            </section>

        </div>

@stop
