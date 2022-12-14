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
                    <h1>Salle d'exposition</h1>
                </div>
                <div class="pattern"></div>
            </section>

            <section class="section section-edito">
                <div class="uk-container">
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-1-2@m container-txt" data-aos="fade-right" data-aos-delay="300">
                            <div class="content">
                                <h2>Une enseigne nationale, des coopératives locales</h2>
                                <p>ARTISANS ARTIPÔLE c’est l’enseigne des coopératives de l'ORCAB (l'Organisation des coopératives d'Achats pour les Artisans du Bâtiment). Cela fait plus de 20 ans que des entrepreneurs indépendants ont décidé d'unir leurs forces pour
                                    répondre encore mieux aux demandes de leurs clients.</p>
                                <p>Issues d’initiatives locales et fédérées dans une organisation nationale, nos 38 coopératives appartiennent à leurs artisans adhérents et fonctionnent sur le principe « d’un homme, une voix ». Elles représentent aujourd'hui le 5ème
                                    groupe français de distribution spécialisée.</p>
                                <p>Chez nous ce n’est pas le profit qui guide nos décisions mais bien l’intérêt collectif et durable.</p>
                            </div>
                            <a href="#" class="content-button" title="En savoir plus">
                                <span>En savoir plus</span>
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@m container-imgs">
                            <div class="container-video">
                                <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                                <div class="pattern"></div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-position-bottom-center img-tampon">
                        <img data-src="./assets/images/tampon.png" width="210" height="210" alt="" uk-img />
                    </div>
                </div>
            </section>

            <section class="section-duo">
                <div class="container-flex">
                    <div class="uk-width-1-1 uk-width-1-2@m img">
                        <figure>
                            <img data-src="./assets/images/content/exposition/img-contenu-exposition-01.jpg" width="960" height="750" alt="" uk-img />
                        </figure>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@m contenu">
                        <div class="content">
                            <h2>Lorem ipsum dolor sit amet</h2>
                            <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
                                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-avis">
                <div class="uk-position-center uk-container">
                    <div class="swiper swiper-avis">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <figure class="quote">
                                    <img data-src="./assets/images/quote.svg" width="86" height="63" alt="" uk-img />
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                            <div class="swiper-slide">
                                <figure class="quote">
                                    <img data-src="./assets/images/quote.svg" width="86" height="63" alt="" uk-img />
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                            <div class="swiper-slide">
                                <figure class="quote">
                                    <img data-src="./assets/images/quote.svg" width="86" height="63" alt="" uk-img />
                                </figure>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                            </div>
                        </div>
                        <div class="container-arrows">
                            <div class="swiper-button-prev swiper-button-prev-avis">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                            <div class="swiper-button-next swiper-button-next-avis">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pattern"></div>
            </section>

            <section class="section-duo section-duo__accordion">
                <div class="uk-container">
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-2-3@m contenu-accordion">
                            <div class="accordion-liste">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <ul class="uk-accordion" data-uk-accordion>
                                    <li>
                                        <button type="button" class="uk-accordion-title">
                                            <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                        </button>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, velit voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi voluptatum.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="uk-accordion-title">
                                            <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                        </button>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, velit voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi voluptatum.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <button type="button" class="uk-accordion-title">
                                            <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                        </button>
                                        <div class="uk-accordion-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, velit voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi voluptatum.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-3@m img">
                            <figure>
                                <img data-src="./assets/images/content/exposition/img-contenu-exposition-02.jpg" width="550" height="720" alt="" uk-img />
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-switcher-cooperateurs">
                <div class="uk-container">
                    <h2 class="center">Artisans Artipôle est l'enseigne des coopérateurs artisans de la maison</h2>
                    <ul class="switcher-artisans uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                        <li><button type="button">Vous offrir nos conseils</button></li>
                        <li><button type="button">Vous apportez le choix</button></li>
                        <li><button type="button">Vous garantir la pose</button></li>
                    </ul>
                    <div class="uk-switcher uk-margin">
                        <div>
                            <div class="swiper swiper_cooperateur_1">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Ici, pas de vendeurs mais de véritables conseillers</h3>
                                                <p>Sans objectifs de vente, nos conseillers sont libres et vous recommandent les produits et solutions les plus efficaces. Expérimentés, régulièrement formés, parfois eux-mêmes anciens artisans, ils vous font bénéficier
                                                    d’un véritable savoir-faire tant en terme de produits que de pose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-02.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Bénéficiez d’une véritable expertise professionnelle</h3>
                                                <p>Les produits et marques sont sélectionnés pour leur fiabilité et leur rapport qualité/prix. En contact régulier avec les artisans, les conseillers enrichissent régulièrement leurs recommandations chantier. Pour vous,
                                                    c’est la garantie d’un choix éclairé et d’un investissement serein.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-03.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Prenons le temps d’un véritable rendez-vous</h3>
                                                <p>Nos salles d'exposition se visitent librement et nos conseillers vous accueilleront avec encore plus de disponibilité sur rendez-vous. Un chantier peut parfois être complexe, tant en terme de matériaux que de savoir-faire
                                                    à mettre en œuvre. Bien préparé avec notre conseiller, il va devenir beaucoup plus simple.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Ici, pas de vendeurs mais de véritables conseillers</h3>
                                                <p>Sans objectifs de vente, nos conseillers sont libres et vous recommandent les produits et solutions les plus efficaces. Expérimentés, régulièrement formés, parfois eux-mêmes anciens artisans, ils vous font bénéficier
                                                    d’un véritable savoir-faire tant en terme de produits que de pose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-02.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Bénéficiez d’une véritable expertise professionnelle</h3>
                                                <p>Les produits et marques sont sélectionnés pour leur fiabilité et leur rapport qualité/prix. En contact régulier avec les artisans, les conseillers enrichissent régulièrement leurs recommandations chantier. Pour vous,
                                                    c’est la garantie d’un choix éclairé et d’un investissement serein.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-03.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Prenons le temps d’un véritable rendez-vous</h3>
                                                <p>Nos salles d'exposition se visitent librement et nos conseillers vous accueilleront avec encore plus de disponibilité sur rendez-vous. Un chantier peut parfois être complexe, tant en terme de matériaux que de savoir-faire
                                                    à mettre en œuvre. Bien préparé avec notre conseiller, il va devenir beaucoup plus simple.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-cooperateur_1"></div>
                        </div>
                        <div>
                            <div class="swiper swiper_cooperateur_2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-02.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Bénéficiez d’une véritable expertise professionnelle</h3>
                                                <p>Les produits et marques sont sélectionnés pour leur fiabilité et leur rapport qualité/prix. En contact régulier avec les artisans, les conseillers enrichissent régulièrement leurs recommandations chantier. Pour vous,
                                                    c’est la garantie d’un choix éclairé et d’un investissement serein.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Ici, pas de vendeurs mais de véritables conseillers</h3>
                                                <p>Sans objectifs de vente, nos conseillers sont libres et vous recommandent les produits et solutions les plus efficaces. Expérimentés, régulièrement formés, parfois eux-mêmes anciens artisans, ils vous font bénéficier
                                                    d’un véritable savoir-faire tant en terme de produits que de pose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-03.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Prenons le temps d’un véritable rendez-vous</h3>
                                                <p>Nos salles d'exposition se visitent librement et nos conseillers vous accueilleront avec encore plus de disponibilité sur rendez-vous. Un chantier peut parfois être complexe, tant en terme de matériaux que de savoir-faire
                                                    à mettre en œuvre. Bien préparé avec notre conseiller, il va devenir beaucoup plus simple.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Ici, pas de vendeurs mais de véritables conseillers</h3>
                                                <p>Sans objectifs de vente, nos conseillers sont libres et vous recommandent les produits et solutions les plus efficaces. Expérimentés, régulièrement formés, parfois eux-mêmes anciens artisans, ils vous font bénéficier
                                                    d’un véritable savoir-faire tant en terme de produits que de pose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-02.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Bénéficiez d’une véritable expertise professionnelle</h3>
                                                <p>Les produits et marques sont sélectionnés pour leur fiabilité et leur rapport qualité/prix. En contact régulier avec les artisans, les conseillers enrichissent régulièrement leurs recommandations chantier. Pour vous,
                                                    c’est la garantie d’un choix éclairé et d’un investissement serein.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-03.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Prenons le temps d’un véritable rendez-vous</h3>
                                                <p>Nos salles d'exposition se visitent librement et nos conseillers vous accueilleront avec encore plus de disponibilité sur rendez-vous. Un chantier peut parfois être complexe, tant en terme de matériaux que de savoir-faire
                                                    à mettre en œuvre. Bien préparé avec notre conseiller, il va devenir beaucoup plus simple.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-cooperateur_2"></div>
                        </div>
                        <div>
                            <div class="swiper swiper_cooperateur_3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-03.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Prenons le temps d’un véritable rendez-vous</h3>
                                                <p>Nos salles d'exposition se visitent librement et nos conseillers vous accueilleront avec encore plus de disponibilité sur rendez-vous. Un chantier peut parfois être complexe, tant en terme de matériaux que de savoir-faire
                                                    à mettre en œuvre. Bien préparé avec notre conseiller, il va devenir beaucoup plus simple.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Ici, pas de vendeurs mais de véritables conseillers</h3>
                                                <p>Sans objectifs de vente, nos conseillers sont libres et vous recommandent les produits et solutions les plus efficaces. Expérimentés, régulièrement formés, parfois eux-mêmes anciens artisans, ils vous font bénéficier
                                                    d’un véritable savoir-faire tant en terme de produits que de pose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-02.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Bénéficiez d’une véritable expertise professionnelle</h3>
                                                <p>Les produits et marques sont sélectionnés pour leur fiabilité et leur rapport qualité/prix. En contact régulier avec les artisans, les conseillers enrichissent régulièrement leurs recommandations chantier. Pour vous,
                                                    c’est la garantie d’un choix éclairé et d’un investissement serein.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Ici, pas de vendeurs mais de véritables conseillers</h3>
                                                <p>Sans objectifs de vente, nos conseillers sont libres et vous recommandent les produits et solutions les plus efficaces. Expérimentés, régulièrement formés, parfois eux-mêmes anciens artisans, ils vous font bénéficier
                                                    d’un véritable savoir-faire tant en terme de produits que de pose.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-02.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Bénéficiez d’une véritable expertise professionnelle</h3>
                                                <p>Les produits et marques sont sélectionnés pour leur fiabilité et leur rapport qualité/prix. En contact régulier avec les artisans, les conseillers enrichissent régulièrement leurs recommandations chantier. Pour vous,
                                                    c’est la garantie d’un choix éclairé et d’un investissement serein.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card-cooperateurs">
                                            <figure>
                                                <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-03.jpg" width="475" height="290" alt="" uk-img />
                                            </figure>
                                            <div class="container-cooperateur">
                                                <h3>Prenons le temps d’un véritable rendez-vous</h3>
                                                <p>Nos salles d'exposition se visitent librement et nos conseillers vous accueilleront avec encore plus de disponibilité sur rendez-vous. Un chantier peut parfois être complexe, tant en terme de matériaux que de savoir-faire
                                                    à mettre en œuvre. Bien préparé avec notre conseiller, il va devenir beaucoup plus simple.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination swiper-pagination-cooperateur_3"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-metiers-expo">
                <div class="uk-container" data-aos="fade-down">
                    <h2>500 artisans travaillent ensemble</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium
                        quis, sem. Nulla consequat massa quis enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                </div>
                <div class="container-metiers">
                    <ul>
                        <li class="card-metiers card-metiers-1" data-aos="fade-down" data-aos-delay="300">
                            <a href="agencement.html">
                                <figure>
                                    <p class="title">Agencement</p>
                                    <img data-src="./assets/images/metiers/agencement.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Agencement</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-2" data-aos="fade-up" data-aos-delay="300">
                            <a href="charpente.html">
                                <figure>
                                    <p class="title">Charpente</p>
                                    <img data-src="./assets/images/metiers/charpente.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Charpente</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-3" data-aos="fade-down">
                            <a href="couverture.html">
                                <figure>
                                    <p class="title">Couverture</p>
                                    <img data-src="./assets/images/metiers/couverture.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Couverture</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-4" data-aos="fade-left" data-aos-delay="400">
                            <a href="cuisine.html">
                                <figure>
                                    <p class="title">Cuisine</p>
                                    <img data-src="./assets/images/metiers/cuisine.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Cuisine</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-5" data-aos="fade-up" data-aos-delay="500">
                            <a href="isolation.html">
                                <figure>
                                    <p class="title">Isolation</p>
                                    <img data-src="./assets/images/metiers/isolation.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Isolation</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-6" data-aos="fade-right" data-aos-delay="250">
                            <a href="menuiserie.html">
                                <figure>
                                    <p class="title">Menuiserie</p>
                                    <img data-src="./assets/images/metiers/menuiserie-ext.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Menuiserie</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-7" data-aos="flip-down">
                            <a href="menuiserie-interieure.html">
                                <figure>
                                    <p class="title">Menuiserie intérieure</p>
                                    <img data-src="./assets/images/metiers/menuiserie-int.jpg" alt="" uk-img />
                                    <figcaption>
                                        <h3>Menuiserie intérieure</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-8" data-aos="fade-up-left" data-aos-delay="300">
                            <a href="maison-ossature-bois.html">
                                <figure>
                                    <p class="title">Maison ossature bois</p>
                                    <img data-src="./assets/images/metiers/maison-bois.jpg " alt=" " uk-img />
                                    <figcaption>
                                        <h3>Maison ossature bois</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-9" data-aos="fade-up-right">
                            <a href="bardage.html">
                                <figure>
                                    <p class="title">Bardage</p>
                                    <img data-src="./assets/images/metiers/bardage.jpg " alt=" " uk-img />
                                    <figcaption>
                                        <h3>Bardage</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-10" data-aos="fade-up" data-aos-delay="300">
                            <a href="meuble.html">
                                <figure>
                                    <p class="title">Meuble</p>
                                    <img data-src="./assets/images/metiers/meuble.jpg " alt=" " uk-img />
                                    <figcaption>
                                        <h3>Meuble</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <li class="card-metiers card-metiers-11" data-aos="fade-left" data-aos-delay="100">
                            <a href="autre-metier.html">
                                <figure>
                                    <p class="title ">Autre métier</p>
                                    <img data-src="./assets/images/metiers/autre.jpg " alt=" " uk-img />
                                    <figcaption>
                                        <h3>Autre métier</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo minus pariatur non assumenda reiciendis aliquid aperiam sint qui. Eius debitis praesentium ut fugit illum iusto atque tempore nobis deserunt harum.</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-choix-artisan">
                <div class="uk-container">
                    <h2>Pourquoi choisir un artisan artipôle ?</h2>
                    <ul class="liste-engagements">
                        <li>
                            <svg class="icon">
                                <use xlink:href="./assets/images/sprite.svg#savoir-faire"></use>
                            </svg>
                            <h3>Savoir-faire & garantie</h3>
                            <p>Mon savoir-faire au service de votre projet pour la garantie d’un travail bien fait.</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="./assets/images/sprite.svg#innovation"></use>
                            </svg>
                            <h3>Innovation & qualité</h3>
                            <p>Un vaste choix de produits innovants, de grandes marques et de qualité.</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="./assets/images/sprite.svg#budget"></use>
                            </svg>
                            <h3>Budget maîtrisé</h3>
                            <p>Des solutions personnalisées et adaptées à tous les budgets.</p>
                        </li>
                        <li>
                            <svg class="icon">
                                <use xlink:href="./assets/images/sprite.svg#valeurs"></use>
                            </svg>
                            <h3>Valeurs & engagements</h3>
                            <p>Le partage de valeurs et d’engagements coopératifs.</p>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-trio">
                <div class="uk-container">
                    <h2 class="center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h2>
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-1-3@m">
                            <div class="card-trio">
                                <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                                <div class="img">
                                    <figure>
                                        <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                    </figure>
                                    <div class="pattern"></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-3@m">
                            <div class="card-trio">
                                <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                                <div class="img">
                                    <figure>
                                        <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                    </figure>
                                    <div class="pattern"></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-3@m">
                            <div class="card-trio">
                                <h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                                <div class="img">
                                    <figure>
                                        <img data-src="./assets/images/content/exposition/slide-cooperateurs/cooperateur-01.jpg" width="475" height="290" alt="" uk-img />
                                    </figure>
                                    <div class="pattern"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-duo-width-background">
                <div class="uk-container">
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-1-2@m img">
                            <figure>
                                <img data-src="./assets/images/content/exposition/img-contenu-exposition-01.jpg" width="960" height="750" alt="" uk-img />
                            </figure>
                            <figure class="img-tampon">
                                <img data-src="./assets/images/tampon.png" width="210" height="210" alt="" uk-img />
                            </figure>
                            <div class="pattern"></div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@m txt">
                            <div class="content">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                    tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                                <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante,
                                    dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <section class="section-background">
                <div class="uk-background-cover" style="background-image: url({{ asset('/assets/images/content/background-salle-expo/background-salle-expo.jpg') }});"></div>
            </section>

            <section class="section-accordion">
                <div class="uk-container">
                    <h2 class="center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h2>
                    <div class="accordion-liste">
                        <ul class="uk-accordion" data-uk-accordion>
                            <li>
                                <button type="button" class="uk-accordion-title">
                                    <figure>
                                        <img data-src="./assets/images/artisans/artisan-01/img-actu-artisan-01.jpg" width="130" height="100" alt="" uk-img />
                                    </figure>
                                    <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                </button>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, velit voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi voluptatum.</p>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="uk-accordion-title">
                                    <figure>
                                        <img data-src="./assets/images/artisans/artisan-01/img-actu-artisan-02.jpg" width="130" height="100" alt="" uk-img />
                                    </figure>
                                    <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                </button>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, velit voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi voluptatum.</p>
                                </div>
                            </li>
                            <li>
                                <button type="button" class="uk-accordion-title">
                                    <figure>
                                        <img data-src="./assets/images/artisans/artisan-01/img-actu-artisan-03.jpg" width="130" height="100" alt="" uk-img />
                                    </figure>
                                    <p class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
                                </button>
                                <div class="uk-accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum, velit voluptatibus, dolorum sit ab dicta et eius voluptatum nam delectus placeat, sint reiciendis id tenetur. Eligendi ab doloremque nisi voluptatum.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="section-switcher-blue-items">
                <div class="uk-container">
                    <h2 class="center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h2>
                    <ul class="uk-subnav uk-subnav-pill" uk-switcher="animation: uk-animation-fade">
                        <li>
                            <button type="button">
                                <figure>
                                    <img data-src="./assets/images/switcher-contenu-blue-items/img-01.jpg" width="250" height="250" alt="" uk-img />
                                </figure>
                                <span class="uk-position-center">Lorem ipsum 1</span>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <figure>
                                    <img data-src="./assets/images/switcher-contenu-blue-items/img-02.jpg" width="250" height="250" alt="" uk-img />
                                </figure>
                                <span class="uk-position-center">Lorem ipsum 2</span>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <figure>
                                    <img data-src="./assets/images/switcher-contenu-blue-items/img-03.jpg" width="250" height="250" alt="" uk-img />
                                </figure>
                                <span class="uk-position-center">Lorem ipsum 3</span>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <figure>
                                    <img data-src="./assets/images/switcher-contenu-blue-items/img-04.jpg" width="250" height="250" alt="" uk-img />
                                </figure>
                                <span class="uk-position-center">Lorem ipsum 4</span>
                            </button>
                        </li>
                    </ul>
                    <div class="uk-switcher">
                        <div>
                            <h3>Lorem ipsum 1</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        </div>
                        <div>
                            <h3>Lorem ipsum 2</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        </div>
                        <div>
                            <h3>Lorem ipsum 3</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        </div>
                        <div>
                            <h3>Lorem ipsum 4</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nam eget dui. Etiam rhoncus. Maecenas tempus,
                                tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-facettes">
                <div class="container-flex">
                    <div class="uk-width-1-1 uk-width-1-3@m">
                        <a href="actualites.html">
                            <figure>
                                <img data-src="./assets/images/galeries/agencement/photo-agencement-02.jpg" width="1265" height="910" alt="" uk-img />
                            </figure>
                            <div class="uk-position-center">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#actualites"></use>
                                </svg>
                                <span class="title">Découvrez nos actualités</span>
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-3@m">
                        <a href="#">
                            <figure>
                                <img data-src="./assets/images/galeries/agencement/photo-agencement-03.jpg" width="1265" height="910" alt="" uk-img />
                            </figure>
                            <div class="uk-position-center">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#catalogues"></use>
                                </svg>
                                <span class="title">Découvrez nos catalogues</span>
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-3@m">
                        <a href="inspirations.html">
                            <figure>
                                <img data-src="./assets/images/galeries/agencement/photo-agencement-04.jpg" width="1265" height="910" alt="" uk-img />
                            </figure>
                            <div class="uk-position-center">
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#photo"></use>
                                </svg>
                                <span class="title">Découvrez nos inspirations</span>
                                <svg class="icon">
                                    <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
            </section>

            <section class="uk-section section-timeline">
                <div class="uk-container section-timeline-container">
                    <h2 class="center">En quelques dates</h2>
                    <div class="timeline">
                        <div class="timeline__item" uk-scrollspy="cls: uk-animation-slide-right-small uk-animation-fade; delay: 150;">
                            <span class="timeline__item__date">Juin 2021</span>
                            <h2 class="timeline__item__title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                            <div class="timeline__item__content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                            </div>
                        </div>
                        <div class="timeline__item" uk-scrollspy="cls: uk-animation-slide-left-small uk-animation-fade; delay: 150;">
                            <span class="timeline__item__date">Mars 2021</span>
                            <h2 class="timeline__item__title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                            <div class="timeline__item__content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                            </div>
                        </div>
                        <div class="timeline__item" uk-scrollspy="cls: uk-animation-slide-right-small uk-animation-fade; delay: 150;">
                            <span class="timeline__item__date">Novembre 2020</span>
                            <h2 class="timeline__item__title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                            <div class="timeline__item__content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                            </div>
                        </div>
                        <div class="timeline__item" uk-scrollspy="cls: uk-animation-slide-left-small uk-animation-fade; delay: 150;">
                            <span class="timeline__item__date">Janvier 2016</span>
                            <h2 class="timeline__item__title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                            <div class="timeline__item__content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                            </div>
                        </div>
                        <div class="timeline__item" uk-scrollspy="cls: uk-animation-slide-right-small uk-animation-fade; delay: 150;">
                            <span class="timeline__item__date">Janvier 2015</span>
                            <h2 class="timeline__item__title">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h2>
                            <div class="timeline__item__content">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque
                                    eu, pretium quis, sem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-background">
                <div class="uk-background-cover" uk-parallax="media: @m; bgy: -1000" style="background-image: url({{ asset('/assets/images/content/home/background-visite-virtuelle.jpg')}});">
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

        </div>
@stop
