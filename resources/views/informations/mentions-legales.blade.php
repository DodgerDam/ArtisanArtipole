@extends('base')
@section('content')

    <div class="project-navigation-container" id="fast-acces" data-aos="fade-right">
        <div class="project">
            <button type="button" title="J'ai un projet !" class="project-link">
                <span class="txt">J'ai un projet !</span>
                <div class="svg-item">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#projet"></use>
                    </svg>
                </div>
            </button>
        </div>
        <button type="button" aria-label="Bouton d'accès rapide" class="open-fast-acces"
                uk-tooltip="title: Ouvrir l'accès rapide; pos: right">
            <svg class="icon">
                <use xlink:href="./assets/images/sprite.svg#arrow"></use>
            </svg>
        </button>
        <ul class="liste-acces-rapide-items">
            <li>
                <a href="actualites.html" class="item-acces-rapide">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#actualites"></use>
                    </svg>
                    <span>Actualités</span>
                </a>
            </li>
            <li>
                <a href="listing-artisan.html" class="item-acces-rapide">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#carte-interactive"></use>
                    </svg>
                    <span>Carte interactive</span>
                </a>
            </li>
            <li>
                <a href="#" class="item-acces-rapide">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#catalogues"></use>
                    </svg>
                    <span>Catalogues</span>
                </a>
            </li>
        </ul>
    </div>

    <div id="container-projet-mobile">
        <button type="button" id="close-container-project" uk-close></button>
        <div class="uk-container">
            <div class="container-picto uk-margin-large">
                <svg class="icon">
                    <use xlink:href="./assets/images/sprite.svg#artisan"></use>
                </svg>
                <p class="title-projet">J'ai un projet</p>
            </div>
            <form action="" method="GET" id="search_form_artisan">
                <p class="title-search">Je recherche un artisan...</p>
                <div class="container-artisan-fields">
                    <div class="container-select-field">
                        <label class="uk-form-label sr-only" for="travaux-search-form">Type de travaux</label>
                        <select id="travaux-search-form" name="travaux" class="custom-select" autocomplete="off">
                            <option value="none" selected disabled hidden>Type de travaux</option>
                            <option value="1">Type de travaux 01</option>
                            <option value="2">Type de travaux 02</option>
                            <option value="3">Type de travaux 03</option>
                            <option value="4">Type de travaux 04</option>
                        </select>
                    </div>
                    <div class="container-select-field">
                        <label class="uk-form-label sr-only" for="specialite-search-form">Spécialité</label>
                        <select id="specialite-search-form" name="specialite" class="custom-select" autocomplete="off">
                            <option value="none" selected disabled hidden>Spécialité</option>
                            <option value="1">Spécialité 01</option>
                            <option value="2">Spécialité 02</option>
                            <option value="3">Spécialité 03</option>
                            <option value="4">Spécialité 04</option>
                        </select>
                    </div>
                    <div class="container-flex">
                        <div class="input-data">
                            <input class="uk-input" placeholder=" " id="zip-search-form" type="text" name="zip"
                                   value="">
                            <label class="uk-form-label" for="zip-search-form">Code postal</label>
                        </div>
                        <div class="input-data">
                            <input class="uk-input" placeholder=" " id="ville-search-form" type="text" name="ville"
                                   value="">
                            <label class="uk-form-label" for="ville-search-form">Ville</label>
                        </div>
                    </div>
                </div>
                <div class="container-artisan-fields uk-margin">
                    <div class="rayon-container">
                        <p class="title-search">Dans un rayon de :</p>
                        <label class="uk-form-label sr-only" for="ville-search-form">Dans un rayon de :</label>
                        <div class="uk-flex">
                            <div>
                                <label class="uk-form-label sr-only" for="km-search-form-01">5 km</label>
                                <button type="button" class="tag-rayon-button" name="rayon" id="km-search-form-01">5
                                    km
                                </button>
                            </div>
                            <div>
                                <label class="uk-form-label sr-only" for="km-search-form-02">10 km</label>
                                <button type="button" class="tag-rayon-button" name="rayon" id="km-search-form-02">10
                                    km
                                </button>
                            </div>
                            <div>
                                <label class="uk-form-label sr-only" for="km-search-form-03">50 km</label>
                                <button type="button" class="tag-rayon-button" name="rayon" id="km-search-form-03">50
                                    km
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="submit-search-button" aria-label="Valider votre recherche"
                            id="artisan-submit-button">
                        <span class="txt-search-button">Rechercher</span>
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </button>
                </div>
            </form>
            <form action="" method="GET" id="search_form_metier" class="uk-margin-large">
                <p class="title-search">Je recherche un métier...</p>
                <div class="container-artisan-fields">
                    <div class="container-select-field">
                        <label class="uk-form-label sr-only" for="metiers-search-form">Métier</label>
                        <select id="metiers-search-form" name="metiers" class="custom-select">
                            <option value="none" selected disabled hidden>Métier</option>
                            <option value="1">Métier 01</option>
                            <option value="2">Métier 02</option>
                            <option value="3">Métier 03</option>
                            <option value="4">Métier 04</option>
                        </select>
                    </div>
                    <button type="submit" class="submit-search-button" aria-label="Valider votre recherche"
                            id="metier-submit-button">
                        <span class="txt-search-button">Rechercher</span>
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </button>
                </div>
            </form>
            <div class="uk-container-catalogues-flex">
                <a href="actualites.html" title="Découvrez nos actualités" class="item-catalogue">
                    <img src="./assets/images/actualites.png" width="202" height="176" alt=""/>
                    <div class="container-svgs">
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#actualites"></use>
                        </svg>
                        <span>Découvrez<br>nos actualités</span>
                        <svg class="icon icon-arrow">
                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
                <a href="#" title="Découvrez nos catalogues" class="item-catalogue">
                    <img src="./assets/images/brochure.png" width="258" height="205" alt=""/>
                    <div class="container-svgs">
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#catalogues"></use>
                        </svg>
                        <span>Découvrez<br>nos catalogues</span>
                        <svg class="icon icon-arrow">
                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
                <a href="inspirations.html" title="Découvrez nos inspirations" class="item-catalogue">
                    <img src="./assets/images/inspirations.png" width="202" height="176" alt=""/>
                    <div class="container-svgs">
                        <svg class="icon">
                            <use xlink:href="./assets/images/sprite.svg#photo"></use>
                        </svg>
                        <span>Découvrez<br>nos inspirations</span>
                        <svg class="icon icon-arrow">
                            <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="container-nav-mobile">
        <ul>
            <li>
                <button type="button" class="item-acces-rapide project-mobile-button">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#projet"></use>
                    </svg>
                    <span>Projet</span>
                </button>
            </li>
            <li>
                <a href="actualites.html" class="item-acces-rapide">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#actualites"></use>
                    </svg>
                    <span>Actualités</span>
                </a>
            </li>
            <li>
                <a href="listing-artisan.html" class="item-acces-rapide">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#carte-interactive"></use>
                    </svg>
                    <span>Carte</span>
                </a>
            </li>
            <li>
                <a href="#" class="item-acces-rapide">
                    <svg class="icon">
                        <use xlink:href="./assets/images/sprite.svg#catalogues"></use>
                    </svg>
                    <span>Catalogues</span>
                </a>
            </li>
            <li>
                <button type="button" aria-label="Bouton Menu" id="burger-menu" class="item-acces-rapide">
                    <div class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span class="title-menu">Menu</span>
                </button>
            </li>
        </ul>
    </div>

    <div id="container-menu-metier">
        <div class="container-metiers" uk-grid>
            <div class="container-metiers__items uk-width-1-1 uk-width-3-4@m">
                <ul>
                    <li class="card-metiers card-metiers-1">
                        <a href="agencement.html">
                            <figure>
                                <p class="title">Agencement</p>
                                <img data-src="./assets/images/metiers/agencement.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-2">
                        <a href="charpente.html">
                            <figure>
                                <p class="title">Charpente</p>
                                <img data-src="./assets/images/metiers/charpente.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-3">
                        <a href="couverture.html">
                            <figure>
                                <p class="title">Couverture</p>
                                <img data-src="./assets/images/metiers/couverture.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-4">
                        <a href="cuisine.html">
                            <figure>
                                <p class="title">Cuisine</p>
                                <img data-src="./assets/images/metiers/cuisine.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-5">
                        <a href="isolation.html">
                            <figure>
                                <p class="title">Isolation</p>
                                <img data-src="./assets/images/metiers/isolation.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-6">
                        <a href="menuiserie.html">
                            <figure>
                                <p class="title">Menuiserie</p>
                                <img data-src="./assets/images/metiers/menuiserie-ext.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-7">
                        <a href="menuiserie-interieure.html">
                            <figure>
                                <p class="title">Menuiserie intérieure</p>
                                <img data-src="./assets/images/metiers/menuiserie-int.jpg" alt="" uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-8">
                        <a href="maison-ossature-bois.html">
                            <figure>
                                <p class="title ">Maison ossature bois</p>
                                <img data-src="./assets/images/metiers/maison-bois.jpg " alt=" " uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-9">
                        <a href="bardage.html">
                            <figure>
                                <p class="title ">Bardage</p>
                                <img data-src="./assets/images/metiers/bardage.jpg " alt=" " uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-10">
                        <a href="meuble.html">
                            <figure>
                                <p class="title ">Meuble</p>
                                <img data-src="./assets/images/metiers/meuble.jpg " alt=" " uk-img/>
                            </figure>
                        </a>
                    </li>
                    <li class="card-metiers card-metiers-11">
                        <a href="autre-metier.html">
                            <figure>
                                <p class="title ">Autre métier</p>
                                <img data-src="./assets/images/metiers/autre.jpg " alt=" " uk-img/>
                            </figure>
                        </a>
                    </li>
                </ul>
                <div class="pattern"></div>
            </div>
            <div class="container-metiers__content uk-width-1-1 uk-width-1-4@m">
                <button type="button" aria-label="Fermer le menu métiers" id="close-metier-container" uk-close></button>
                <span class="container-metiers__content__title">Sélectionnez le métier de votre choix pour plus d'informations</span>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec
                    quam felis, ultricies nec, pellentesque
                    eu, pretium quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer
                    adipiscing elit.</p>
                <figure class="img-tampon">
                    <img data-src="./assets/images/tampon.png" width="210" height="210" alt="" uk-img/>
                </figure>
            </div>
        </div>
    </div>

    <div class="site-content main" data-aos="fade">

        <section class="section-bandeau section-bandeau__actualites">
            <picture>
                <source media="(max-width: 768px)"
                        srcset="./assets/images/bandeaux/exposition/salle-exposition-w768.webp" type="image/webp">
                <source media="(max-width: 768px)"
                        srcset="./assets/images/bandeaux/exposition/salle-exposition-w768.jpg" type="image/jpg">
                <source media="(max-width: 1400px)"
                        srcset="./assets/images/bandeaux/exposition/salle-exposition-w1440.webp" type="image/webp">
                <source media="(max-width: 1400px)"
                        srcset="./assets/images/bandeaux/exposition/salle-exposition-w1440.jpg" type="image/jpg">
                <img data-src="./assets/images/bandeaux/exposition/salle-exposition-w1920.jpg" width="1920" height="550"
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
                <h1>Mentions légales</h1>
            </div>
            <div class="pattern"></div>
        </section>

        <section class="section-txt">
            <div class="uk-container">
                <h2>Création du site internet et hébergement</h2>
                <p>Koredge,<br>Rue du bois de la Courbe,<br>ZI du Pré Brenot,<br>25870 Châtillon-le-Duc</p>
                <h2>Loi informatique et libertés</h2>
                <p>Conformément à la loi Informatique et libertés du 6 janvier 1978, nous vous informons que vous
                    disposez d’un droit d’accès, de modification, de rectification et de suppression de votre
                    contribution. Pour cela, écrivez au siège de la société. Formulaire
                    de contact Les informations recueillies auprès des personnes par le biais du formulaire de contact
                    ne sauraient être divulguées à des personnes autres que celles composant notre collectivité.
                    Toutefois, tel que l’exige la loi Informatique
                    et Libertés nous vous informons que vos réponses sont facultatives et que le défaut de réponse
                    n’entraînera aucune conséquence particulière. Néanmoins, vos réponses doivent être suffisantes pour
                    nous permettre de traiter l’information. </p>
                <h2>Contrefaçon</h2>
                <p>Toute reproduction ou représentation, en tout ou partie, à d'autres fins sur un quelconque support
                    est interdite. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la
                    responsabilité civile et pénale du contrefacteur.
                    Les informations contenues dans ce service sont non contractuelles et sujettes à modification sans
                    préavis.</p>
            </div>
        </section>

@stop
