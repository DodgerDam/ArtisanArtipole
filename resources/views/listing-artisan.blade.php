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
                <img data-src="../assets/images/bandeaux/artisan/bandeau-artisan-w1920.jpg" width="1920" height="550"
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
                            <use xlink:href="../assets/images/sprite.svg#artisan"></use>
                        </svg>
                        <p class="title-search">Je recherche un artisan...</p>
                    </div>
                    <form id="search_form" autocomplete="off">


                        <div class="container-select-field">
                            <label class="uk-form-label sr-only" for="metiers-search-form">Métiers</label>
                            <select id="metiers-search-form" class="custom-select" name="metiers"
                                    v-model="selected_metier">
                                @if($requestMetier == "#")
                                    <option value="{{ $requestMetier }}">Tous</option>
                                @else
                                    <option value="{{ $requestMetier }}">{{ $requestMetier }}</option>
                                @endif
                                @foreach($metiers as $metier)
                                    <option value="{{ $metier->nom }}">{{ $metier->nom }}</option>
                                @endforeach
                                <option id="metierOption" hidden value="#">Tous</option>
                            </select>
                            {{--                            <a onclick="metierReset()">--}}
                            {{--                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
                            {{--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
                            {{--                                     stroke-linejoin="round">--}}
                            {{--                                    <line x1="18" y1="6" x2="6" y2="18"/>--}}
                            {{--                                    <line x1="6" y1="6" x2="18" y2="18"/>--}}
                            {{--                                </svg>--}}
                            {{--                            </a>--}}
                            {{--                            <script>--}}
                            {{--                                function metierReset() {--}}
                            {{--                                    console.log('test')--}}
                            {{--                                    document.getElementsByClassName('metiers').value = '#';--}}
                            {{--                                    document.getElementsByClassName('metiers').textContent = 'Tous';--}}
                            {{--                                }--}}
                            {{--                            </script>--}}
                        </div>

                        <script
                            src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
                        <script>
                            var communes = {!! json_encode($communes) !!};
                            iCommunes = [];
                            communes.forEach(element => iCommunes.push(element.libelle.toUpperCase()));
                            iCodes = [];
                            communes.forEach(element => iCodes.push(element.code_postal));
                        </script>

                        <div class="custom_city_container" style="display: flex; place-items: center; color: black;">
                            <a onclick="resetVilleAndCode()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"/>
                                    <line x1="6" y1="6" x2="18" y2="18"/>
                                </svg>
                            </a>
                            <div class="container-select-field">
                                <label class="uk-form-label sr-only"></label>
                                <input placeholder="Ville" name="ville" autocomplete="off" autocapitalize="off"
                                       value="{{ $requestVille }}"
                                       tabindex="1"
                                       dir="ltr" spellcheck=false autocorrect="off" id="autoComplete"
                                       class="custom_input">
                                <input hidden name="code" id="autoCompleteCP" placeholder="Code Postal"
                                       value="{{ $requestCode }}">
                                <script>
                                    function resetVilleAndCode() {
                                        document.getElementById(('autoComplete')).value = "";
                                        document.getElementById(('autoCompleteCP')).value = " ";
                                    }
                                </script>
                            </div>
                            <div class="custom_drop_1">
                                <div class="custom_drop_2" id="list">
                                    <div class="custom_drop_little" hidden data-vicopo="#ville, #code"
                                         data-vicopo-click='{"#code": "code", "#ville": "ville"}'>
                                        <strong id="ville-show"></strong>
                                        <span id="code-show"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: flex; place-items: center;">
                            <a onclick="resetRadius()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"/>
                                    <line x1="6" y1="6" x2="18" y2="18"/>
                                </svg>
                            </a>
                            <label>5 KM
                                <input type="radio" name="radius" id="check1" value="5"
                                       @if($requestRadius == 5) checked @endif>
                            </label>
                            <label>10 KM
                                <input type="radio" name="radius" id="check2" value="10"
                                       @if($requestRadius == 10) checked @endif>
                            </label>
                            <label>50 KM
                                <input type="radio" name="radius" id="check3" value="50"
                                       @if($requestRadius == 50) checked @endif>
                            </label>
                            <script>
                                function resetRadius() {
                                    document.getElementById('check1').checked = false;
                                    document.getElementById('check2').checked = false;
                                    document.getElementById('check3').checked = false;
                                }
                            </script>
                        </div>


                        {{--                        <div class="container-select-field uk-margin">--}}
                        {{--                            <label class="uk-form-label sr-only" for="ville-search-form">Villes</label>--}}
                        {{--                            <select id="ville-search-form" class="custom-select" name="ville"--}}
                        {{--                                    autocomplete="off">--}}
                        {{--                                <option value="0">Villes</option>--}}
                        {{--                                <option v-for="ville in moteurs.villes">ville.label (ville.code)</option>--}}
                        {{--                            </select>--}}
                        {{--                        </div>--}}

                        <button type="submit" class="submit-search-button"
                                aria-label="Valider votre recherche"><span
                                class="txt-search-button">Rechercher</span><span uk-search-icon></span></button>
                    </form>
                </div>
                <div class="pattern"></div>
            </div>
        </div>

        <section class="section-listing-items flex">

            <div style="text-align: center;">
                <div>


                    {{ $filterArtisans->count() }} résultats affichés sur {{ $filterArtisans->total() }}.
                </div>
                <div>
                    @if($filterArtisans->onFirstPage() == true)
                        <a>Page précédente - </a>
                    @else
                        <a href="{{ $filterArtisans->previousPageUrl() }}">Page précédente - </a>
                    @endif
                    <a href="{{ $filterArtisans->nextPageUrl() }}">Page suivante</a>
                </div>

            </div>
            <style>
                .w-5 {
                    width: 2em;
                !important;
                    height: 2em;
                !important;
                }
            </style>
            <div class="uk-container">
                <div class="kg-listing-list-map">
                    <div class="container-listing-map">
                        <div class="container-listing-items">
                            <ul class="listing-items">
                                @foreach($filterArtisans as $artisan)

                                    @if($artisan->nom != 'tooFar')

                                        <li>
                                            <div class="card-artisan">
                                                <form action="./{{ $artisan->id }}">
                                                    <button class="poptomap" data-id="marker_1">
                                                        <figure>
                                                            <img width="390" height="170" alt=""
                                                                {{--                                                                 src=""--}}/>
                                                        </figure>
                                                        <div class="content-card">
                                                            <h2>{{ $artisan->nom }}</h2>
                                                            <ul class="competences">
                                                                @foreach($domaines as $domaine)
                                                                    @if($domaine->metArIDAr == $artisan->id)
                                                                        <li>{{ $domaine->metNom }}</li>
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                            <div class="container-adresse">
                                                                <svg class="icon">
                                                                    <use
                                                                        xlink:href="../assets/images/sprite.svg#carte"></use>
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
                                                                                xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
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
                                                                                xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
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
            <div style="text-align: center;">
                {!! $filterArtisans ->links() !!}
            </div>
        </section>


        <section class="section section-background">
            <div class="uk-background-cover" uk-parallax="media: @m; bgy: -1000"
                 style="background-image: url({{asset('assets/images/content/home/background-visite-virtuelle.jpg')}});">
                <div class="uk-position-center container-title-section">
                    <h2>Salle d'exposition à Dole-Choisey</h2>
                    <a href="#" class="virtuel-button" title="Visite virtuelle">
                        <svg class="icon">
                            <use xlink:href="../assets/images/sprite.svg#360"></use>
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

    <style>

        #autoComplete_list_1 {
            display: flex;
            flex-direction: column;
            gap: 0.3em;
            width: 11em;
            place-items: start;
            padding-right: 0.4em;
            background-color: white;
            position: fixed;
            border-radius: 0.2em;
            max-height: 11em;
            overflow-y: auto;
            overflow-x: hidden;
            border: solid #c7c7c7 1px;
            margin-top: -0.1em;
            margin-left: 0.8em;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        #autoComplete_list_1:hover {
            cursor: pointer;
        }

        #autoComplete_list_1 > li:hover {
            background-color: #9ca3af;
        }

        #autoComplete_list_1 > li {
            padding: 0.3em;
        }

        mark {
            background-color: rgba(94, 154, 186, 0.32);
        }

        ul {
            list-style-type: none;
        }

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
            box-shadow: none;
            box-sizing: border-box;
            flex-wrap: wrap;
            overflow: hidden;
            position: relative;
            z-index: 1;
            align-items: start;
            display: flex;
            min-height: calc(1.5em + .75rem + 2px);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            height: 55px;
            width: 85%;
            border-radius: 50px;
            border: 1px solid #00376a;
            cursor: pointer;
            background: #fff url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3E%3C/svg%3E") no-repeat right .75rem center;
            background-size: 16px 12px;
            padding: .375rem 2rem .375rem .75rem;
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

        .autoComplete_list_1 > li {
            font-size: 0.1em;
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

    <script
        src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
    <script>
        const autoCompleteJS = new autoComplete({
            data: {
                src: iCommunes,
                cache: true,
            },
            resultItem: {
                highlight: true
            },
            resultsList: {
                maxResults: 12
            },
            events: {
                input: {
                    selection: (event) => {
                        const selection = event.detail.selection.value;
                        autoCompleteJS.input.value = selection;
                        console.log(iCommunes)
                        iCommunes.forEach(function callback(element, i) {
                            if (selection === element) {
                                document.getElementById(('autoCompleteCP')).value = iCodes[i];
                                console.log(iCommunes)
                                console.log(iCodes)
                            }
                        })
                    }
                }
            }
        });
    </script>

@stop
