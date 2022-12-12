@extends('base')
@section('content')
    <div class="site-content main" data-aos="fade">

        @foreach($allArtisans as $artisan)
            @if($artisanID == $artisan->id)
                <section class="section-bandeau-header">
                    <div class="container-breadcrumb-blue">
                        <div id="breadcrumb">
                            <div class="uk-container">
                                <ul class="uk-breadcrumb">
                                    <li><a href="index.html" class="home">Accueil</a></li>
                                    <li class="uk-disabled"><a href="#">Je recherche un artisan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-container">
                        <div class="section-bandeau-header__flex">
                            <a href="../listing-artisan/0" class="content-button content-button__back">
                                <svg class="icon">
                                    <use xlink:href="../assets/images/sprite.svg#arrow"></use>
                                </svg>
                                <span>Retour</span>
                            </a>
                            <div class="share-print-buttons">
                                <a href="#" class="share">
                                    <svg class="icon">
                                        <use xlink:href="../assets/images/sprite.svg#share"></use>
                                    </svg>
                                    <span>Partager ma recherche</span>
                                </a>
                                <a href="#" class="print">
                                    <svg class="icon">
                                        <use xlink:href="../assets/images/sprite.svg#print"></use>
                                    </svg>
                                    <span>Imprimer ma recherche</span>
                                </a>
                            </div>
                        </div>
                        <div class="container-detail-artisan" uk-grid>
                            <div class="uk-width-1-1 uk-width-2-3@m">
                                <h1>{{ $artisan->nom }}</h1>
                                <p class="container-detail-artisan__competences">
                                    {{--                                    @foreach($domaines as $domaine)--}}
                                    {{--                                        @if($domaine->metArIDAr == $artisanID)--}}
                                    {{--                                            {{ $domaine->metNom }}--}}
                                    {{--                                        @endif--}}
                                    {{--                                    @endforeach--}}
                                </p>
                                <div class="container-detail-artisan__specialites">

                                                                        @foreach($specialites as $specialite)
                                                                            @if($specialite->speArID == $artisanID)
                                                                                <span>{{ $specialite->speNom }}</span>
                                                                            @endif
                                                                        @endforeach
                                </div>
                                <div class="container-fiche-artisan-mobile"></div>
                                <h2>L'activité</h2>
                                <p>{{ $artisan->description_activite }}</p>
                                <h2>L'entreprise</h2>
                                <p>{{ $artisan->description_entreprise }}</p>
                                <h2>L'actu de l'entreprise</h2>
                                <div class="accordion-liste">
                                    <ul class="uk-accordion" data-uk-accordion>
                                        <li>
                                            <button type="button" class="uk-accordion-title">
                                                <figure>
                                                    <img
                                                        data-src="../assets/images/artisans/artisan-01/img-actu-artisan-01.jpg"
                                                        width="130" height="100" alt="" uk-img/>
                                                </figure>
                                                <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                    elit.
                                                    Aenean commodo ligula eget dolor. Aenean massa.</p>
                                            </button>
                                            <div class="uk-accordion-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum,
                                                    velit
                                                    voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus
                                                    placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi
                                                    voluptatum.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <button type="button" class="uk-accordion-title">
                                                <figure>
                                                    <img
                                                        data-src="../assets/images/artisans/artisan-01/img-actu-artisan-02.jpg"
                                                        width="130" height="100" alt="" uk-img/>
                                                </figure>
                                                <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                    elit.
                                                    Aenean commodo ligula eget dolor. Aenean massa.</p>
                                            </button>
                                            <div class="uk-accordion-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum,
                                                    velit
                                                    voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus
                                                    placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi
                                                    voluptatum.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <button type="button" class="uk-accordion-title">
                                                <figure>
                                                    <img
                                                        data-src="../assets/images/artisans/artisan-01/img-actu-artisan-03.jpg"
                                                        width="130" height="100" alt="" uk-img/>
                                                </figure>
                                                <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                                    elit.
                                                    Aenean commodo ligula eget dolor. Aenean massa.</p>
                                            </button>
                                            <div class="uk-accordion-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum,
                                                    velit
                                                    voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus
                                                    placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi
                                                    voluptatum.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="uk-width-1-1 uk-width-1-3@m">
                                <div class="fiche-artisan">
                                    <div class="container-logo-entreprise">
                                        <figure>
                                            <img data-src="../assets/images/artisans/artisan-01/logo-artisan-01.jpg"
                                                 width="240" height="106" alt="" uk-img/>
                                        </figure>
                                    </div>
                                    <figure class="photo-artisan">
                                        <img data-src="../assets/images/artisans/artisan-01/photo-fiche-artisan-01.jpg"
                                             width="540" height="430" alt="" uk-img/>
                                    </figure>
                                    <div class="container-info-artisan">
                                        <p class="mention">Mise en relation gratuite et sans engagement</p>
                                        <div class="container-adresse">
                                            <svg class="icon">
                                                <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                            </svg>
{{--                                            <div class="adresse">--}}
{{--                                                <p>{{ $artisan->adresse }}<br>{{ $artisan->code_postal }}--}}
{{--                                                    <span>{{ $artisan->ville }}</span></p>--}}
{{--                                                <a href="#map-artisan" class="map-link" uk-scroll data-offset="150"--}}
{{--                                                   data-top="150">--}}
{{--                                                    <span>Voir sur le plan</span>--}}
{{--                                                    <svg class="icon">--}}
{{--                                                        <use xlink:href="../assets/images/sprite.svg#arrow"></use>--}}
{{--                                                    </svg>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
                                        </div>
                                        <div class="container-horaires">
                                            <figure>
                                                <img data-src="../assets/images/horaire.svg" width="40" height="40"
                                                     alt=""
                                                     uk-img/>
                                            </figure>
                                            <div class="adresse">
                                                <p>{{ $artisan->horaire_jours }}<br>{{ $artisan->horaires }}</p>
                                            </div>
                                        </div>
                                        <div class="container-item-contact">
                                            <a href="mailto:{{ $artisan->mail }}" class="content-button">
                                                <span>Envoyer un email</span>
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#arrow"></use>
                                                </svg>
                                            </a>
                                            <a href="tel:{{ $artisan->telephone }}" class="content-button">
                                                <span>Nous appeler</span>
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#arrow"></use>
                                                </svg>
                                            </a>
                                        </div>
                                        <a href=https://{{ $artisan->site }} target="_blank" class="content-button">
                                            <span>Visiter notre site web</span>
                                            <svg class="icon">
                                                <use xlink:href="../assets/images/sprite.svg#arrow"></use>
                                            </svg>
                                        </a>
                                        <div class="container-social">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Notre page Facebook"
                                                       aria-label="Lien sur la page Facebook" target="_blank"
                                                       uk-tooltip="Notre page Facebook">
                                                        <svg class="icon">
                                                            <use
                                                                xlink:href="../assets/images/sprite.svg#facebook"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Notre page Instagram"
                                                       aria-label="Lien sur la page Instagram" target="_blank"
                                                       uk-tooltip="Notre page Instagram">
                                                        <svg class="icon">
                                                            <use
                                                                xlink:href="../assets/images/sprite.svg#instagram"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Notre page Pinterest"
                                                       aria-label="Lien sur la page Pinterest" target="_blank"
                                                       uk-tooltip="Notre page Pinterest">
                                                        <svg class="icon">
                                                            <use
                                                                xlink:href="../assets/images/sprite.svg#pinterest"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="Notre page YouTube"
                                                       aria-label="Lien sur la page YouTube" target="_blank"
                                                       uk-tooltip="Notre page YouTube">
                                                        <svg class="icon">
                                                            <use xlink:href="../assets/images/sprite.svg#youtube"></use>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-certification">
                    <div class="uk-container">
                        <div class="uk-position-left img-tampon">
                            <img data-src="../assets/images/tampon.png" width="210" height="210" alt="" uk-img/>
                        </div>
                        <h2>Certifications</h2>
                        <ul class="liste-certifications">
                            @foreach($certifications as $certification)
                                @if($certification->certArID == $artisanID)
                                    <li>
                                        <figure>
                                            <img data-src="../assets/images/certifications/certification-01.png"
                                                 width="100"
                                                 height="75" alt="" uk-img/>
                                        </figure>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </section>

                <section class="section-quelques-realisations">
                    <h2>Quelques réalisations</h2>
                    <ul class="container-photos" uk-lightbox>
                        <li class="item-photo item-photo-1" data-aos="fade-up">
                            <a href="../assets/images/galeries/agencement/photo-agencement-01.jpg"
                               data-caption="Mermet Au Louis Emmanuel - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.">
                                <figure>
                                    <img data-src="../assets/images/galeries/agencement/photo-agencement-01.jpg"
                                         width="1265"
                                         height="910" alt="" uk-img/>
                                </figure>
                            </a>
                        </li>
                        <li class="item-photo item-photo-2" data-aos="fade-down-right" data-aos-delay="200">
                            <a href="../assets/images/galeries/agencement/photo-agencement-02.jpg"
                               data-caption="Mermet Au Louis Emmanuel - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.">
                                <figure>
                                    <img data-src="../assets/images/galeries/agencement/photo-agencement-02.jpg"
                                         width="1265"
                                         height="910" alt="" uk-img/>
                                </figure>
                            </a>
                        </li>
                        <li class="item-photo item-photo-3" data-aos="fade-down-left" data-aos-delay="400">
                            <a href="../assets/images/galeries/agencement/photo-agencement-02.jpg"
                               data-caption="Mermet Au Louis Emmanuel - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.">
                                <figure>
                                    <img data-src="../assets/images/galeries/agencement/photo-agencement-03.jpg"
                                         width="1265"
                                         height="910" alt="" uk-img/>
                                </figure>
                            </a>
                        </li>
                        <li class="item-photo item-photo-4" data-aos="fade-up-right" data-aos-delay="200">
                            <a href="../assets/images/galeries/agencement/photo-agencement-04.jpg"
                               data-caption="Mermet Au Louis Emmanuel - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.">
                                <figure>
                                    <img data-src="../assets/images/galeries/agencement/photo-agencement-04.jpg"
                                         width="1265"
                                         height="910" alt="" uk-img/>
                                </figure>
                            </a>
                        </li>
                        <li class="item-photo item-photo-5" data-aos="fade-up-left" data-aos-delay="400">
                            <div class="univers-link">
                                <a href="../assets/images/galeries/agencement/photo-agencement-05.jpg"
                                   data-caption="Mermet Au Louis Emmanuel - Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim."
                                   class="uk-position-center">
                                    <svg class="icon">
                                        <use xlink:href="../assets/images/sprite.svg#photo"></use>
                                    </svg>
                                    <span>Plus de realisations</span>
                                </a>
                            </div>
                            <figure>
                                <img data-src="../assets/images/galeries/agencement/photo-agencement-05.jpg"
                                     width="1265"
                                     height="910" alt="" uk-img/>
                            </figure>
                        </li>
                    </ul>
                </section>

                {{--            <section class="section-detail-map" id="map-artisan">--}}
                {{--                <div class="uk-container">--}}
                {{--                    <h2>Voir sur la carte</h2>--}}
                {{--                    <div class="event-map-detail" data-latitude="47.102873944155654" data-longitude="5.432276498236223"--}}
                {{--                         data-zoom="14"></div>--}}
                {{--                    <div class="pattern"></div>--}}
                {{--                </div>--}}
                {{--            </section>--}}
            @endif
        @endforeach
        <section class="section-engagements">
            <div class="uk-container">
                <h2>Engagements</h2>
                <ul class="liste-engagements">
                    <li>
                        <svg class="icon">
                            <use xlink:href="../assets/images/sprite.svg#contact"></use>
                        </svg>
                        <h3>Contact sous 4 jours</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    </li>
                    <li>
                        <svg class="icon">
                            <use xlink:href="../assets/images/sprite.svg#garantie"></use>
                        </svg>
                        <h3>Garantie biennale/décénnale</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    </li>
                    <li>
                        <svg class="icon">
                            <use xlink:href="../assets/images/sprite.svg#devis"></use>
                        </svg>
                        <h3>Devis pour 3 semaines</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    </li>
                    <li>
                        <svg class="icon">
                            <use xlink:href="../assets/images/sprite.svg#artisan-conseil"></use>
                        </svg>
                        <h3>Artisan conseil</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
                    </li>
                </ul>
            </div>
            <div class="pattern"></div>
        </section>


        <section class="section-autres-artisans">
            <div class="container-autres-artisans">
                <span class="tag">Ébéniste</span>
                <h2>Découvrez aussi ces artisans...</h2>
                <div class="swiper swiper-autres-artisans">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-01.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>MCF Menuiserie Charpente Faivre</h2>
                                    <div class="competences">
                                        <p>Chapentier, couvreur, menuiserie, ossature bois, plaquiste</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>5 Chemin de By<br>39110 <span>La chapelle sur Furieuse</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-02.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>Mermet au Louis Emmanuel</h2>
                                    <div class="competences">
                                        <p>Ébéniste, menuiserie</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>11 Rue du Miarle<br>39100 <span>Champvans</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-03.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>Lopez Pascal Menuiserie</h2>
                                    <div class="competences">
                                        <p>Agenceur, cuisiniste, ébéniste, menuiserie</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>4 Rue de l'Église<br>39700 <span>Falletans</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-04.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>Meugin Menuiserie</h2>
                                    <div class="competences">
                                        <p>Agenceur, cuisiniste, ébéniste, menuiserie</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>31 rue du Château<br>39100 <span>Champsdivers</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-01.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>MCF Menuiserie Charpente Faivre</h2>
                                    <div class="competences">
                                        <p>Chapentier, couvreur, menuiserie, ossature bois, plaquiste</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>5 Chemin de By<br>39110 <span>La chapelle sur Furieuse</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-02.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>Mermet au Louis Emmanuel</h2>
                                    <div class="competences">
                                        <p>Ébéniste, menuiserie</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>11 Rue du Miarle<br>39100 <span>Champvans</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-03.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>Lopez Pascal Menuiserie</h2>
                                    <div class="competences">
                                        <p>Agenceur, cuisiniste, ébéniste, menuiserie</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>4 Rue de l'Église<br>39700 <span>Falletans</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="swiper-slide">
                            <div class="card-artisan">
                                <figure>
                                    <img data-src="../assets/images/artisans/artisan-04.jpg" width="390" height="170"
                                         alt="" uk-img/>
                                </figure>
                                <div class="content-card">
                                    <h2>Meugin Menuiserie</h2>
                                    <div class="competences">
                                        <p>Agenceur, cuisiniste, ébéniste, menuiserie</p>
                                    </div>
                                    <div class="container-adresse">
                                        <svg class="icon">
                                            <use xlink:href="../assets/images/sprite.svg#carte"></use>
                                        </svg>
                                        <div class="adresse">
                                            <p>31 rue du Château<br>39100 <span>Champsdivers</span></p>
                                        </div>
                                    </div>
                                    <ul class="share-buttons">
                                        <li>
                                            <a href="mailto:contact@contact.fr" uk-tooltip="Contacter par email">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-mail"></use>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:+33" uk-tooltip="Contacter par Téléphone">
                                                <span class="icon-phone"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="fiche-artisan.html" uk-tooltip="En savoir plus">
                                                <svg class="icon">
                                                    <use xlink:href="../assets/images/sprite.svg#fiche-plus"></use>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="swiper-scrollbar"></div>
            </div>
        </section>
    </div>
@stop
