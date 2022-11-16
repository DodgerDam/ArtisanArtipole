@extends('base')
@section('content')

    <div class="site-content main" data-aos="fade">

        <section class="section-bandeau">
            <picture>
                <source media="(max-width: 768px)" srcset="./assets/images/bandeaux/artisan/bandeau-artisan-w768.webp"
                        type="image/webp">
                <source media="(max-width: 768px)" srcset="./assets/images/bandeaux/artisan/bandeau-artisan-w768.jpg"
                        type="image/jpg">
                <source media="(max-width: 1400px)" srcset="./assets/images/bandeaux/artisan/bandeau-artisan-w1440.webp"
                        type="image/webp">
                <source media="(max-width: 1400px)" srcset="./assets/images/bandeaux/artisan/bandeau-artisan-w1440.jpg"
                        type="image/jpg">
                <img data-src="./assets/images/bandeaux/artisan/bandeau-artisan-w1920.jpg" width="1920" height="550"
                     alt="" uk-img/>
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
                <h1>Je recherche un artisan</h1>
            </div>
        </section>

        <div class="search-container">
            <div class="uk-container">
                <div class="container-items-search">
                    <div class="container-picto">
                        <svg class="icon">
                            <use xlink:href="/assets/images/sprite.svg#artisan"></use>
                        </svg>
                        <p class="title-search">Je recherche un artisan...</p>
                    </div>
                    <form id="search_form" autocomplete="off">

                        <div class="container-select-field">
                            <label class="uk-form-label sr-only" for="metiers-search-form">Métiers</label>
                            <select id="metiers-search-form" class="custom-select" name="metiers"
                                    v-model="selected_metier" autocomplete="off">
                                <option value="#">Tous</option>
                                @foreach($metiers as $metier)
                                    <option value="{{ $metier->nom }}">{{ $metier->nom }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="custom_city_container">
                            <div class="container-select-field">
                                <label class="uk-form-label sr-only" for="ville"></label>
                                <input id="ville" placeholder="Ville" class="custom_input">
                                <input hidden name="code" id="code" placeholder="Code Postal">
                            </div>
                            <div class="custom_drop_1">
                                <div class="custom_drop_2" id="ville-search-form">
                                    <div class="custom_drop_little" data-vicopo="#ville, #code"
                                         data-vicopo-click='{"#code": "code", "#ville": "ville"}'>
                                        <strong data-vicopo-code-postal></strong>
                                        <span data-vicopo-ville></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--                        <div class="container-select-field uk-margin">--}}
                        {{--                            <label class="uk-form-label sr-only" for="ville-search-form">Villes</label>--}}
                        {{--                            <select id="ville-search-form" class="custom-select" name="ville"--}}
                        {{--                                    autocomplete="off">--}}
                        {{--                                <option value="0">Villes</option>--}}
                        {{--                                <option v-for="ville in moteurs.villes">ville.label (ville.code)</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}

                        <button type="submit" class="submit-search-button" aria-label="Valider votre recherche"><span
                                class="txt-search-button">Rechercher</span><span uk-search-icon></span></button>
                    </form>
                </div>
                <div class="pattern"></div>
            </div>
        </div>

        @if($artisanID != 0)
            <section class="section-listing-items">
                <div class="uk-container">
                    <div class="kg-listing-list-map">
                        <div class="container-listing-map">
                            <div class="container-listing-items">
                                <ul class="listing-items">
                                    @foreach($artisans as $artisan)
                                        @if($artisanID == $artisan->id)
                                            <li>
                                                <div class="card-artisan">
                                                    <form action="./{{ $artisan->id }}">
                                                        <button class="poptomap" data-id="marker_1">
                                                            <figure>
                                                                <img width="390" height="170" alt=""
                                                                     src="{{ $artisan->images }}"/>
                                                            </figure>
                                                            <div class="content-card">
                                                                <h2>{{ $artisan->nom }}</h2>
                                                                <ul class="competences">
                                                                    <li>
                                                                        {{ $domaines[$artisan->id]->nom }}
                                                                    </li>
                                                                </ul>
                                                                <div class="container-adresse">
                                                                    <svg class="icon">
                                                                        <use
                                                                            xlink:href="/assets/images/sprite.svg#carte"></use>
                                                                    </svg>
                                                                    <div class="adresse">
                                                                        <p>{{ $artisan->adresse }}
                                                                            <br>{{ $artisan->code_postal }}
                                                                            <span>{{ $artisan->ville}}</span></p>
                                                                    </div>
                                                                </div>
                                                                <ul class="share-buttons">
                                                                    <li>
                                                                        <a href="mailto:{{ $artisan->mail }}"
                                                                           uk-tooltip="Contacter par email">
                                                                            <svg class="icon">
                                                                                <use
                                                                                    xlink:href="/assets/images/sprite.svg#fiche-mail"></use>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ $artisan->telephone }}"
                                                                           uk-tooltip="Contacter par Téléphone">
                                                                            <span class="icon-phone"></span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a :href="data.link"
                                                                           uk-tooltip="En savoir plus">
                                                                            <svg class="icon">
                                                                                <use
                                                                                    xlink:href="/assets/images/sprite.svg#fiche-plus"></use>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section class="section-listing-items">
                <div class="uk-container">
                    <div class="kg-listing-list-map">
                        <div class="container-listing-map">
                            <div class="container-listing-items">
                                <ul class="listing-items">

                                    @foreach($artisans as $artisan)
                                        @if(($filterMetiers == '#' OR $filterMetiers == null) AND ($filterVille == '#' OR $filterVille == null))
                                            <li>
                                                <div class="card-artisan">
                                                    <form action="./{{ $artisan->id }}">
                                                        <button class="poptomap" data-id="marker_1">
                                                            <figure>
                                                                <img width="390" height="170" alt=""
                                                                     src="{{ $artisan->images }}"/>
                                                            </figure>
                                                            <div class="content-card">
                                                                <h2>{{ $artisan->nom }}</h2>
                                                                <ul class="competences">
                                                                    <li>
                                                                        {{ $domaines[$artisan->id]->nom }}
                                                                    </li>
                                                                </ul>
                                                                <div class="container-adresse">
                                                                    <svg class="icon">
                                                                        <use
                                                                            xlink:href="/assets/images/sprite.svg#carte"></use>
                                                                    </svg>
                                                                    <div class="adresse">
                                                                        <p>{{ $artisan->adresse }}
                                                                            <br>{{ $artisan->code_postal }}
                                                                            <span>{{ $artisan->ville}}</span></p>
                                                                    </div>
                                                                </div>
                                                                <ul class="share-buttons">
                                                                    <li>
                                                                        <a href="mailto:{{ $artisan->mail }}"
                                                                           uk-tooltip="Contacter par email">
                                                                            <svg class="icon">
                                                                                <use
                                                                                    xlink:href="/assets/images/sprite.svg#fiche-mail"></use>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ $artisan->telephone }}"
                                                                           uk-tooltip="Contacter par Téléphone">
                                                                            <span class="icon-phone"></span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a :href="data.link"
                                                                           uk-tooltip="En savoir plus">
                                                                            <svg class="icon">
                                                                                <use
                                                                                    xlink:href="/assets/images/sprite.svg#fiche-plus"></use>
                                                                            </svg>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </button>
                                                    </form>
                                                </div>
                                            </li>
                                        @else
                                            @if($filterMetiers == $domaines[$artisan->id]->nom AND $filterVille == $artisan->code_postal)
                                                <li>
                                                    <div class="card-artisan">
                                                        <form action="./{{ $artisan->id }}">
                                                            <button class="poptomap" data-id="marker_1">
                                                                <figure>
                                                                    <img width="390" height="170" alt=""
                                                                         src="{{ $artisan->images }}"/>
                                                                </figure>
                                                                <div class="content-card">
                                                                    <h2>{{ $artisan->nom }}</h2>
                                                                    <ul class="competences">
                                                                        <li>
                                                                            {{ $domaines[$artisan->id]->nom }}
                                                                        </li>
                                                                    </ul>
                                                                    <div class="container-adresse">
                                                                        <svg class="icon">
                                                                            <use
                                                                                xlink:href="/assets/images/sprite.svg#carte"></use>
                                                                        </svg>
                                                                        <div class="adresse">
                                                                            <p>{{ $artisan->adresse }}
                                                                                <br>{{ $artisan->code_postal }}
                                                                                <span>{{ $artisan->ville}}</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="share-buttons">
                                                                        <li>
                                                                            <a href="mailto:{{ $artisan->mail }}"
                                                                               uk-tooltip="Contacter par email">
                                                                                <svg class="icon">
                                                                                    <use
                                                                                        xlink:href="/assets/images/sprite.svg#fiche-mail"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ $artisan->telephone }}"
                                                                               uk-tooltip="Contacter par Téléphone">
                                                                                <span class="icon-phone"></span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a :href="data.link"
                                                                               uk-tooltip="En savoir plus">
                                                                                <svg class="icon">
                                                                                    <use
                                                                                        xlink:href="/assets/images/sprite.svg#fiche-plus"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </li>
                                            @elseif($filterVille == $artisan->code_postal)
                                                <li>
                                                    <div class="card-artisan">
                                                        <form action="./{{ $artisan->id }}">
                                                            <button class="poptomap" data-id="marker_1">
                                                                <figure>
                                                                    <img width="390" height="170" alt=""
                                                                         src="{{ $artisan->images }}"/>
                                                                </figure>
                                                                <div class="content-card">
                                                                    <h2>{{ $artisan->nom }}</h2>
                                                                    <ul class="competences">
                                                                        <li>
                                                                            {{ $domaines[$artisan->id]->nom }}
                                                                        </li>
                                                                    </ul>
                                                                    <div class="container-adresse">
                                                                        <svg class="icon">
                                                                            <use
                                                                                xlink:href="/assets/images/sprite.svg#carte"></use>
                                                                        </svg>
                                                                        <div class="adresse">
                                                                            <p>{{ $artisan->adresse }}
                                                                                <br>{{ $artisan->code_postal }}
                                                                                <span>{{ $artisan->ville}}</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="share-buttons">
                                                                        <li>
                                                                            <a href="mailto:{{ $artisan->mail }}"
                                                                               uk-tooltip="Contacter par email">
                                                                                <svg class="icon">
                                                                                    <use
                                                                                        xlink:href="/assets/images/sprite.svg#fiche-mail"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ $artisan->telephone }}"
                                                                               uk-tooltip="Contacter par Téléphone">
                                                                                <span class="icon-phone"></span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a :href="data.link"
                                                                               uk-tooltip="En savoir plus">
                                                                                <svg class="icon">
                                                                                    <use
                                                                                        xlink:href="/assets/images/sprite.svg#fiche-plus"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </li>
                                            @elseif($filterMetiers == $domaines[$artisan->id]->nom)
                                                <li>
                                                    <div class="card-artisan">
                                                        <form action="./{{ $artisan->id }}">
                                                            <button class="poptomap" data-id="marker_1">
                                                                <figure>
                                                                    <img width="390" height="170" alt=""
                                                                         src="{{ $artisan->images }}"/>
                                                                </figure>
                                                                <div class="content-card">
                                                                    <h2>{{ $artisan->nom }}</h2>
                                                                    <ul class="competences">
                                                                        <li>
                                                                            {{ $domaines[$artisan->id]->nom }}
                                                                        </li>
                                                                    </ul>
                                                                    <div class="container-adresse">
                                                                        <svg class="icon">
                                                                            <use
                                                                                xlink:href="/assets/images/sprite.svg#carte"></use>
                                                                        </svg>
                                                                        <div class="adresse">
                                                                            <p>{{ $artisan->adresse }}
                                                                                <br>{{ $artisan->code_postal }}
                                                                                <span>{{ $artisan->ville}}</span></p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="share-buttons">
                                                                        <li>
                                                                            <a href="mailto:{{ $artisan->mail }}"
                                                                               uk-tooltip="Contacter par email">
                                                                                <svg class="icon">
                                                                                    <use
                                                                                        xlink:href="/assets/images/sprite.svg#fiche-mail"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ $artisan->telephone }}"
                                                                               uk-tooltip="Contacter par Téléphone">
                                                                                <span class="icon-phone"></span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a :href="data.link"
                                                                               uk-tooltip="En savoir plus">
                                                                                <svg class="icon">
                                                                                    <use
                                                                                        xlink:href="/assets/images/sprite.svg#fiche-plus"></use>
                                                                                </svg>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="section section-background">
            <div class="uk-background-cover" uk-parallax="media: @m; bgy: -1000"
                 style="background-image: url({{asset('assets/images/content/home/background-visite-virtuelle.jpg')}});">
                <div class="uk-position-center container-title-section">
                    <h2>Salle d'exposition à Dole-Choisey</h2>
                    <a href="#" class="virtuel-button" title="Visite virtuelle">
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#360"></use>
                        </svg>
                        <span>Visite virtuelle</span>
                    </a>
                </div>
            </div>
        </section>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>


        {{--        <script src="https://code.jquery.com/jquery-3.6.1.js"--}}
        {{--                integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous">--}}

        {{--            var search_terms = [];--}}

        {{--            fetch( '127.0.0.1:8000/communes', {--}}
        {{--                method: 'get'--}}
        {{--            }).then( function( response ) {--}}
        {{--                search_terms = response;--}}
        {{--            }).catch( function( err ) {--}}
        {{--                // Error--}}
        {{--            });--}}

        {{--            function autocompleteMatch(input) {--}}
        {{--                console.log(search_terms);--}}
        {{--                if (input == '') {--}}
        {{--                    return [];--}}
        {{--                }--}}
        {{--                var reg = new RegExp(input)--}}
        {{--                return search_terms.filter(function(term) {--}}
        {{--                    if (term.match(reg)) {--}}
        {{--                        return term;--}}
        {{--                    }--}}
        {{--                });--}}
        {{--            }--}}

        {{--            function showResults(val) {--}}
        {{--                var res = document.getElementById("result");--}}
        {{--                res.innerHTML = '';--}}
        {{--                let list = '';--}}
        {{--                let terms = autocompleteMatch(val);--}}
        {{--                for (i=0; i<terms.length; i++) {--}}
        {{--                    list += '<li>' + terms[i] + '</li>';--}}
        {{--                }--}}
        {{--                res.innerHTML = '<ul>' + list + '</ul>';--}}
        {{--            }--}}

        {{--            document.getElementById('#quest').onkeyup = function() {console.log('test')};--}}

        {{--        </script>--}}

    </div>

    <script src="{{ asset('js/vicopo-vanilla.min.js') }}"></script>

    <style>
        .custom_input {
            font-weight: normal;
            -webkit-text-size-adjust: 100%;
            --uk-breakpoint-s: 768px;
            --uk-breakpoint-m: 1020px;
            --uk-breakpoint-l: 1366px;
            --uk-breakpoint-xl: 1600px;
            --uk-leader-fill-content: .;
            --swiper-theme-color: #007aff;
            --swiper-navigation-size: 44px;
            color: #17171c;
            font-family: inherit;
            font-size: inherit;
            line-height: 1.5;
            background: #fff;
            box-shadow: none;
            box-sizing: border-box;
            flex-wrap: wrap;
            overflow: hidden;
            padding: .375rem .75rem;
            position: relative;
            z-index: 1;
            align-items: center;
            display: flex;
            min-height: calc(1.5em + .75rem + 2px);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            height: 55px;
            width: 85%;
            border-radius: 50px;
            border: 1px solid #00376a;
            cursor: pointer;
            background-color: #fff;
            background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E");
            background-position: right .75rem center;
            background-repeat: no-repeat;
            background-size: 16px 12px;
            padding-right: 2rem;
        }

        .custom_select {
            -webkit-text-size-adjust: 100%;
            --uk-breakpoint-s: 768px;
            --uk-breakpoint-m: 1020px;
            --uk-breakpoint-l: 1366px;
            --uk-breakpoint-xl: 1600px;
            --uk-leader-fill-content: .;
            --swiper-theme-color: #007aff;
            --swiper-navigation-size: 44px;
            box-sizing: border-box;
            clip: rect(0 0 0 0) !important;
            border: 0 !important;
            clip-path: inset(50%) !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            white-space: nowrap !important;
            width: 1px !important;
            height: 55px !important;
            background-color: rgba(0, 0, 0, 0);
            text-transform: none;
            font-size: .9rem;
            background-image: none;
        }

        .custom_drop_1 {
            font-weight: normal;
            -webkit-text-size-adjust: 100%;
            --uk-breakpoint-s: 768px;
            --uk-breakpoint-m: 1020px;
            --uk-breakpoint-l: 1366px;
            --uk-breakpoint-xl: 1600px;
            --uk-leader-fill-content: .;
            --swiper-theme-color: #007aff;
            --swiper-navigation-size: 44px;
            color: #212326;
            font-family: inherit;
            line-height: 1.5;
            box-sizing: border-box;
            left: 0;
            position: absolute;
            top: 100%;
            background: #fff;
            /*border: 1px solid rgba(0, 0, 0, .15);*/
            border-radius: .25rem;
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            height: auto;
            padding: 0;
            z-index: 1000;
            font-size: .75rem;
            width: 75%;
            margin-left: 6%;
            display: block;
            visibility: visible;
        }

        .custom_drop_2 {
            font-weight: normal;
            -webkit-text-size-adjust: 100%;
            --uk-breakpoint-s: 768px;
            --uk-breakpoint-m: 1020px;
            --uk-breakpoint-l: 1366px;
            --uk-breakpoint-xl: 1600px;
            --uk-leader-fill-content: .;
            --swiper-theme-color: #007aff;
            --swiper-navigation-size: 44px;
            color: #181a1c;
            font-family: inherit;
            line-height: 1.5;
            font-size: .75rem;
            visibility: visible;
            box-sizing: border-box;
            max-height: 200px;
            overflow-x: hidden;
            overflow-y: auto;
            scroll-behavior: smooth;
            /*padding: 5px 0;*/
        }

        .custom_drop_little {
            font-weight: normal;
            -webkit-text-size-adjust: 100%;
            --uk-breakpoint-s: 768px;
            --uk-breakpoint-m: 1020px;
            --uk-breakpoint-l: 1366px;
            --uk-breakpoint-xl: 1600px;
            --uk-leader-fill-content: .;
            --swiper-theme-color: #007aff;
            --swiper-navigation-size: 44px;
            color: #343a40;
            font-family: inherit;
            line-height: 1.5;
            font-size: .75rem;
            visibility: visible;
            box-sizing: border-box;
            overflow: hidden;
            padding: 3px .75rem;
            cursor: pointer;
            opacity: 1;
        }

        .custom_city_container {
            font-size: 18px;
            font-weight: normal;
            -webkit-text-size-adjust: 100%;
            color: #001121;
            font-family: "Be Vietnam Pro", sans-serif;
            --uk-breakpoint-s: 768px;
            --uk-breakpoint-m: 1020px;
            --uk-breakpoint-l: 1366px;
            --uk-breakpoint-xl: 1600px;
            --uk-leader-fill-content: .;
            --swiper-theme-color: #007aff;
            --swiper-navigation-size: 44px;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0);
            max-height: 55px;
            line-height: 1;
            padding: 0;
            position: relative;
        }
    </style>
@stop