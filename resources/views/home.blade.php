@extends('base')
@section('content')

        <div class="site-content main" data-aos="fade">

            <section class="section-swiper">
                <div class="swiper swiper-home">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <picture>
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/webp/slider-768w-home-01.webp"
                                        type="image/webp">
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/slider-768w-home-01.jpg" type="image/jpg">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/webp/slider-1400w-home-01.webp"
                                        type="image/webp">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/slider-1400w-home-01.jpg" type="image/jpg">
                                <img data-src="./assets/images/sliders/home/slider-2500w-home-01.jpg" width="2500"
                                     height="1400" alt="" uk-img/>
                            </picture>
                        </li>
                        <li class="swiper-slide">
                            <picture>
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/webp/slider-768w-home-02.webp"
                                        type="image/webp">
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/slider-768w-home-02.jpg" type="image/jpg">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/webp/slider-1400w-home-02.webp"
                                        type="image/webp">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/slider-1400w-home-02.jpg" type="image/jpg">
                                <img data-src="./assets/images/sliders/home/slider-2500w-home-02.jpg" width="2500"
                                     height="1400" alt="" uk-img/>
                            </picture>
                        </li>
                        <li class="swiper-slide">
                            <picture>
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/webp/slider-768w-home-03.webp"
                                        type="image/webp">
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/slider-768w-home-03.jpg" type="image/jpg">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/webp/slider-1400w-home-03.webp"
                                        type="image/webp">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/slider-1400w-home-03.jpg" type="image/jpg">
                                <img data-src="./assets/images/sliders/home/slider-2500w-home-03.jpg" width="2500"
                                     height="1400" alt="" uk-img/>
                            </picture>
                        </li>
                        <li class="swiper-slide">
                            <picture>
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/webp/slider-768w-home-04.webp"
                                        type="image/webp">
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/sliders/home/slider-768w-home-04.jpg" type="image/jpg">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/webp/slider-1400w-home-04.webp"
                                        type="image/webp">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/sliders/home/slider-1400w-home-04.jpg" type="image/jpg">
                                <img data-src="./assets/images/sliders/home/slider-2500w-home-04.jpg" width="2500"
                                     height="1400" alt="" uk-img/>
                            </picture>
                        </li>
                    </ul>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="uk-position-center container-home-h1">
                    <h1>ARTISANS ARTIPÔLE<br>en Bourgogne Franche-Comté</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus
                        mus.</p>
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
                        <form onsubmit="onRecherche" id="search_form" autocomplete="off">
                            <div class="container-select-field">
                                <label class="uk-form-label sr-only" for="metiers-search-form">Métiers</label>
                                <select id="metiers-search-form" name="metiers" class="custom-select"
                                        autocomplete="off">
                                    <option value="0">Métiers</option>
                                    @foreach($metiers as $metier)
                                        <option value={{ $loop->index }}>{{ $metier->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="container-select-field uk-margin">
                                <div class="v-suggestions ui-widget">
                                    <input type="text" placeholder="Ville" id="Villes" class="input"
                                           action="ArtisantController.php" method="get">
                                    <div class="suggestions">
                                        <ul
                                            class="items" style="display: none;">
                                            {# {% for ville in villes %} #}
                                            <li class="item ui-widget-content">
                                                <div>
                                                    <strong></strong>
                                                </div>
                                            </li>
                                            {# {% endfor %} #}
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="rayon-container">
                                <label class="uk-form-label" for="ville-search-form">Dans un rayon de :</label>
                                <div class="uk-flex">
                                    <div>
                                        <label class="uk-form-label sr-only" for="km-search-form-01">5 km</label>
                                        <button onclick="counter5 += 1,valueRayon(5)" type="button"
                                                class="tag-rayon-button" name="rayon" id="km-search-form-01">5 km
                                        </button>
                                    </div>
                                    <div>
                                        <label class="uk-form-label sr-only" for="km-search-form-02">10 km</label>
                                        <button onclick="counter10 += 1,valueRayon(10)" type="button"
                                                class="tag-rayon-button" name="rayon" id="km-search-form-02">10 km
                                        </button>
                                    </div>
                                    <div>
                                        <label class="uk-form-label sr-only" for="km-search-form-03">50 km</label>
                                        <button onclick="counter50 += 1,valueRayon(50)" type="button"
                                                class="tag-rayon-button" name="rayon" id="km-search-form-03">50 km
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="submit-search-button" aria-label="Valider votre recherche">
                                <span class="txt-search-button">Rechercher</span>
                                <span uk-search-icon></span>
                            </button>
                        </form>
                    </div>
                    <div class="pattern"></div>
                </div>
            </div>


            <section class="section section-edito-home">
                <div class="uk-container">
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-1-2@m container-txt" data-aos="fade-right"
                             data-aos-delay="300">
                            <div class="content">
                                <span class="pre-title">Edito</span>
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorum quia repellendus
                                    libero neque eaque temporibus in illo cupiditate distinctio accusantium consequatur
                                    est ex, magni sapiente. Mollitia modi necessitatibus placeat.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dolorum quia repellendus
                                    libero neque eaque temporibus in illo cupiditate distinctio accusantium consequatur
                                    est ex, magni sapiente. Mollitia modi necessitatibus placeat.</p>

                            </div>
                            <a href="#" class="content-button" title="En savoir plus">
                                <span>En savoir plus</span>
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@m container-imgs">
                            <picture class="uk-width-1-2" data-aos="fade-down">
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/content/home/img-content-home-165w-01.jpg"
                                        type="image/jpg">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/content/home/img-content-home-350w-01.jpg"
                                        type="image/jpg">
                                <img data-src="./assets/images/content/home/img-content-home-350w-01.jpg" width="350"
                                     height="550" alt="" uk-img/>
                            </picture>
                            <picture class="uk-width-1-2" data-aos="fade-up">
                                <source media="(max-width: 768px)"
                                        srcset="./assets/images/content/home/img-content-home-165w-02.jpg"
                                        type="image/jpg">
                                <source media="(max-width: 1400px)"
                                        srcset="./assets/images/content/home/img-content-home-350w-02.jpg"
                                        type="image/jpg">
                                <img data-src="./assets/images/content/home/img-content-home-350w-02.jpg" width="350"
                                     height="550" alt="" uk-img/>
                            </picture>
                            <div class="pattern"></div>
                        </div>
                    </div>
                    <div class="uk-position-bottom-center img-tampon">
                        <img data-src="./assets/images/tampon.png" width="210" height="210" alt="" uk-img/>
                    </div>
                </div>
            </section>

            <section class="section section-metiers">
                <div class="uk-container" data-aos="fade-down">
                    <span class="pre-title">Nos métiers</span>
                    <h2>Lorem ipsum dolor sit amet</h2>
                </div>
                <div class="container-metiers">
                    <ul>
                        @foreach($randMetiers as $randMetier)
                            <li class="card-metiers card-metiers-{{ $loop->index + 1 }}"
                                @if($loop->index == (1 OR 3 OR 7))
                                    data-aos="fade-down"
                                @elseif($loop->index == (2 OR 5 OR 10))
                                    data-aos="fade-up"
                                @elseif($loop->index == 4)
                                    data-aos="fade-left"
                                @elseif($loop->index == 6)
                                    data-aos="fade-right"
                                @elseif($loop->index == 8)
                                    data-aos="fade-up-left"
                                @else
                                    data-aos="fade-up-right"
                                @endif

                                @if($loop->index == (1 OR 2 OR 8 OR 10))
                                    data-aos-delay="300"
                                @elseif($loop->index == 4)
                                    data-aos-delay="400"
                                @elseif($loop->index == 5)
                                    data-aos-delay="500"
                                @else
                                    data-aos-delay="250"
                                @endif>

                                <a href="#" title={{ $randMetier->nom }}>
                                    <figure>
                                        <p class="title">{{ $randMetier->nom }}</p>
                                        <img data-src={{ $randMetier->images }} alt="" uk-img/>
                                        <figcaption>
                                            <h3>{{ $randMetier->nom }}</h3>
                                            <p>{{ $randMetier->description_accueil }}</p>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                        @endforeach
                        <li class="card-metiers card-metiers-11" data-aos="fade-left" data-aos-delay="100">
                            <a href="#">
                                <figure>
                                    <p class="title ">Autre métier</p>
                                    <img data-src="/assets/images/metiers/autre.jpg" alt="" uk-img/>
                                    <figcaption>
                                        <h3>Autre métier</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur
                                            non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium
                                            ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section section-actus">
                <div class="uk-container">
                    <div class="container-clip" data-aos="fade-down">
                        <h2>actus</h2>
                    </div>
                    <div class="container-actus">
                        <ul>
                            <li class="card-actus" data-aos="fade-right" data-aos-delay="200">
                                <a href="# " title="Titre de l 'article">
                                    <figure>
                                        <img data-src="./assets/images/actus/img-actus-01.jpg" alt="" uk-img/>
                                    </figure>
                                </a>
                                <div class="content">
                                    <div class="content-tags">
                                        <span class="tag">Agencement</span>
                                        <span class="tag">Menuiserie</span>
                                    </div>
                                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                                    <a href="#" class="article-link">
                                        <span>Lire l'article</span>
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li class="card-actus" data-aos="fade-up" data-aos-delay="300">
                                <a href="#" title="Titre de l'article">
                                    <figure>
                                        <img data-src="./assets/images/actus/img-actus-02.jpg" alt="" uk-img/>
                                    </figure>
                                </a>
                                <div class="content">
                                    <div class="content-tags">
                                        <span class="tag">Menuiserie</span>
                                        <span class="tag">Meuble</span>
                                    </div>
                                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                                    <a href="#" class="article-link">
                                        <span>Lire l'article</span>
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                            <li class="card-actus" data-aos="fade-left" data-aos-delay="200">
                                <a href="#" title="Titre de l'article">
                                    <figure>
                                        <img data-src="./assets/images/actus/img-actus-03.jpg" alt="" uk-img/>
                                    </figure>
                                </a>
                                <div class="content">
                                    <div class="content-tags">
                                        <span class="tag">Cuisine</span>
                                        <span class="tag">Agencement</span>
                                    </div>
                                    <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h3>
                                    <a href="#" class="article-link">
                                        <span>Lire l'article</span>
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                        </svg>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="content-button" title="Toute l'actualité">
                        <span>Toute l'actualité</span>
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </a>
                </div>
            </section>

            <section class="section section-chiffres aos-init aos-animate" data-aos="fade-down" id="count_home">
                <div class="uk-background-cover">
                    <div class="uk-container">
                        <span class="pre-title">Artisans Artipôle Dole Choisey</span>
                        <h2>En chiffres...</h2>
                        <div class="container-chiffres">
                            <ul>
                                <li>
                                    <span class="count">{{ $nombreArtisans }}</span>
                                    <p>artisans artipôle</p>
                                </li>
                                <li>
                                    <span class="count">1</span>
                                    <p>coopérative en<br>Bourgogne-Franche-Comté</p>
                                </li>
                                <li>
                                    <span class="count">20</span>
                                    <p>ans d'expérience</p>
                                </li>
                                <li>
                                    <span class="count">{{ $nombreFournisseurs }}</span>
                                    <p>fournisseurs</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <figure class="elt-graphique">
                    <img data-src="./assets/images/totem-bois.png" width="1033" height="581" alt="" uk-img="">
                </figure>
            </section>

            <section class="section section-valeurs">
                <div class="container-flex">
                    <div class="uk-width-1-1 uk-width-1-2@m container-imgs" data-aos="fade-right" data-delay="400">
                        <picture class="uk-width-1-1">
                            <source media="(max-width: 768px)"
                                    srcset="./assets/images/content/home/photo-valeurs-768.jpg" type="image/jpg">
                            <source media="(max-width: 1400px)" srcset="./assets/images/content/home/photo-valeurs.jpg"
                                    type="image/jpg">
                            <img data-src="./assets/images/content/home/photo-valeurs.jpg" width="1299" height="866"
                                 alt="" uk-img/>
                        </picture>
                        <div class="pattern"></div>
                        <div class="img-tampon">
                            <img data-src="./assets/images/tampon.png" width="210" height="210" alt="" uk-img/>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@m container-txt">
                        <div class="content">
                            <span class="pre-title">Nos valeurs</span>
                            <h2>Pourquoi choisir un artisan artipôle ?</h2>
                            <ul class="liste-valeurs">
                                <li>
                                    <div class="icon-svg" data-aos="fade-right" data-delay="200">
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#savoir-faire"></use>
                                        </svg>
                                    </div>
                                    <div class="content-valeur" data-aos="fade-left" data-delay="200">
                                        <h3>Savoir-faire & garantie</h3>
                                        <p>Mon savoir-faire au service de votre projet pour la garantie d'un travail
                                            bien fait.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-svg" data-aos="fade-right" data-delay="350">
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#innovation"></use>
                                        </svg>
                                    </div>
                                    <div class="content-valeur" data-aos="fade-left" data-delay="350">
                                        <h3>Innovation & qualité</h3>
                                        <p>Un vaste choix de produits innovants, de gradnes marques et de qualité.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-svg" data-aos="fade-right" data-delay="500">
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#budget"></use>
                                        </svg>
                                    </div>
                                    <div class="content-valeur" data-aos="fade-left" data-delay="500">
                                        <h3>Budget maîtrisé</h3>
                                        <p>Des solutions personnalisées et adaptées à tous les budgets.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon-svg" data-aos="fade-right" data-delay="650">
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#valeurs"></use>
                                        </svg>
                                    </div>
                                    <div class="content-valeur" data-aos="fade-left" data-delay="650">
                                        <h3>Valeurs & engagements</h3>
                                        <p>Le partage de valeurs et d'engagement coopératifs.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section section-background">
                <div class="uk-background-cover" uk-parallax="media: @m; bgy: -1000"
                     style="background-image: url({{ asset('assets/images/content/home/background-visite-virtuelle.jpg') }});">
                    <div class="uk-position-center container-title-section">
                        <h2>Salle d'exposition à Dole-Choisey</h2>
                        <a href="https://my.matterport.com/show/?m=W6D6xjzavN9&lang=fr&play=1&help=1"
                           class="virtuel-button" title="Visite virtuelle">
                            <svg class="icon">
                                <use xlink:href="/assets/images/sprite.svg#360"></use>
                            </svg>
                            <span>Visite virtuelle</span>
                        </a>
                    </div>
                </div>
            </section>

            <section class="section section-swiper-galerie">
                <div class="uk-container" data-aos="fade-down">
                    <span class="pre-title">Inspiration</span>
                    <h2>Laissez-vous séduire par nos univers</h2>
                </div>
                <div class="swiper swiper-tabs" data-aos="fade-left">
                    <div class="swiper-wrapper tab-swipe-desktop">
                        @foreach($inspirations as $inspiration)
                            <div class="swiper-slide tab-swiper">{{ $inspiration->nom }}</div>
                        @endforeach
                    </div>
                    <select class="uk-select" id="select-swipe-mobile">
                        @foreach($inspirations as $inspiration)
                            <option class="swiper-slide tab-swiper"
                                    value="{{ $loop->index }}">{{ $inspiration->nom }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="container-swiper-galerie">
                    <div class="swiper swiper-slide-galerie">
                        <div class="swiper-wrapper">
                            @foreach($inspirations as $inspiration)
                                <div class="swiper-slide">
                                    <ul class="container-photos">
                                        @foreach($inspiration->img as $image)
                                            @if($loop->index < 4)
                                                <li class="item-photo item-photo-{{ $loop->index + 1 }}" data-aos="fade-up">
                                                    <figure>
                                                        <img height="910" width="1265"
                                                            data-src="{{ $inspiration->img[$loop->index + 1]->images}}" alt="" uk-img/>
                                                    </figure>
                                                </li>
                                            @elseif($loop->index == 4)
                                                <li class="item-photo item-photo-5" data-aos="fade-up-left"
                                                    data-aos-delay="400">
                                                    <div class="univers-link">
                                                        <a href="#" class="uk-position-center">
                                                            <svg class="icon">
                                                                <use xlink:href="/assets/images/sprite.svg#photo"></use>
                                                            </svg>
                                                            <span>Plus de photo : {{ $inspiration->nom }}</span>
                                                        </a>
                                                    </div>
                                                    <figure>
                                                        <img
                                                            data-src="{{ $inspiration->img[$loop->index]->images }}" width="500"
                                                            height="300"
                                                            alt="" uk-img/>
                                                    </figure>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                        <div class="container-swiper-buttons">
                            <div class="swiper-button-prev button-galerie">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-next button-galerie">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <section class="section section-swiper-marques">
            <div class="uk-container">
                <div class="swiper swiper-marques">
                    <ul class="swiper-wrapper">
                        @foreach($fournisseurs as $fournisseur)
                            <li class="swiper-slide">
                                <figure>
                                    <img data-src="{{ $fournisseur->logo }}" width="175" height="110" alt="" uk-img/>
                                </figure>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="swiper-button-prev swiper-button-prev-marques">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                    </svg>
                </div>
                <div class="swiper-button-next swiper-button-next-marques">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                    </svg>
                </div>

            </div>
        </section>

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
              integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
              crossorigin=""/>

        <script src="./assets/js/vuejs-listing.js"></script>

@stop
