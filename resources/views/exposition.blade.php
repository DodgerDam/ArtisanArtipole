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

            <section class="section section-contact">
                <div class="uk-container">
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-1-2@m" data-aos="fade-left">
                            <span class="pre-title">Nous contacter</span>
                            <h2>Salle d'expo artisans Artipôle Dole Choisey</h2>
                            <div class="container-social">
                                <ul>
                                    <li>
                                        <a href="#" title="Notre page Facebook" aria-label="Lien sur la page Facebook" target="_blank" uk-tooltip="Notre page Facebook">
                                            <svg class="icon">
                                                <use xlink:href="./assets/images/sprite.svg#facebook"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Notre page Instagram" aria-label="Lien sur la page Instagram" target="_blank" uk-tooltip="Notre page Instagram">
                                            <svg class="icon">
                                                <use xlink:href="./assets/images/sprite.svg#instagram"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Notre page Pinterest" aria-label="Lien sur la page Pinterest" target="_blank" uk-tooltip="Notre page Pinterest">
                                            <svg class="icon">
                                                <use xlink:href="./assets/images/sprite.svg#pinterest"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Notre page YouTube" aria-label="Lien sur la page YouTube" target="_blank" uk-tooltip="Notre page YouTube">
                                            <svg class="icon">
                                                <use xlink:href="./assets/images/sprite.svg#youtube"></use>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="liste-info-contact">
                                <li data-aos="fade-left">
                                    <span>
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#adresse"></use>
                                        </svg>
                                    </span>
                                    <p>5 Avenue Innovia 39100 Choisey</p>
                                </li>
                                <li data-aos="fade-left">
                                    <span>
                                        <img src="./assets/images/phone.svg" alt="" />
                                    </span>
                                    <a href="tel:+33384352350" uk-tooltip="Numéro de téléphone +33 3 84 35 23 50" target="_blank">+33 3 84 35 23 50</a>
                                </li>
                                <li data-aos="fade-left">
                                    <span>
                                        <svg class="icon">
                                            <use xlink:href="./assets/images/sprite.svg#mail"></use>
                                        </svg>
                                    </span>
                                    <a href="mailto:contact@artipole-choisey.com" uk-tooltip="Email de contact contact@artipole-choisey.com" target="_blank">contact@artipole-choisey.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@m" data-aos="fade-up">
                            <form action="" method="GET" class="uk-grid-small" id="contact-form" uk-grid>
                                <div class="uk-margin-bottom uk-width-1-2@s">
                                    <div class="input-data">
                                        <input class="uk-input" placeholder=" " id="nom-contact-form" type="text" name="nom" value="" required>
                                        <label class="uk-form-label" for="nom-contact-form">Nom <sup>*</sup></label>
                                    </div>
                                </div>
                                <div class="uk-margin-bottom uk-width-1-2@s">
                                    <div class="input-data">
                                        <input class="uk-input" placeholder=" " id="prenom-contact-form" type="text" name="prenom" value="" required>
                                        <label class="uk-form-label" for="prenom-contact-form">Prénom <sup>*</sup></label>
                                    </div>
                                </div>
                                <div class="uk-margin-bottom uk-width-1-2@s">
                                    <div class="input-data">
                                        <input class="uk-input" placeholder=" " id="email-contact-form" type="text" name="email" value="" required>
                                        <label class="uk-form-label" for="email-contact-form">Email <sup>*</sup></label>
                                    </div>
                                </div>
                                <div class="uk-margin-bottom uk-width-1-2@s">
                                    <div class="input-data">
                                        <input class="uk-input" placeholder=" " id="phone-contact-form" type="text" name="phone" value="" required>
                                        <label class="uk-form-label" for="phone-contact-form">Téléphone <sup>*</sup></label>
                                    </div>
                                </div>
                                <div class="uk-margin-bottom uk-width-1-1@s">
                                    <div class="input-data textarea-data">
                                        <textarea class="uk-textarea" row="5" placeholder=" " id="message-contact-form" name="message" required></textarea>
                                        <label class="uk-form-label" for="message-contact-form">Message <sup>*</sup></label>
                                    </div>
                                </div>
                                <button type="submit" class="content-button" uk-tooltip="Envoyer votre formulaire">
                                    <span>Envoyer</span>
                                    <svg class="icon">
                                        <use xlink:href="./assets/images/sprite.svg#arrow"></use>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Include Footer -->
            </main>


            <footer>
                <div class="uk-container">
                    <div class="container-flex">
                        <div class="uk-width-1-1 uk-width-1-2@m">
                            <div class="uk-flex">
                                <figure>
                                    <img data-src="./assets/images/logo-footer.png" width="210" height="103" alt="Logo Artisans Artipôle" uk-img />
                                </figure>
                                <a href="https://www.scabois.fr/" target="_blank">
                                    <figure>
                                        <img data-src="./assets/images/logo-scabois.png" width="225" height="103" alt="Logo Scabois" uk-img />
                                    </figure>
                                </a>
                            </div>
                            <div class="uk-flex uk-flex-between container-cat">
                                <ul class="liste-footer-links">
                                    <li>
                                        <a href="listing-artisan.html" class="footer-link">Mon artisan Artipôle</a>
                                    </li>
                                    <li>
                                        <a href="inspirations.html" class="footer-link">Inspirations</a>
                                    </li>
                                    <li>
                                        <button type="button" class="footer-link metier-button">Nos métiers</button>
                                    </li>
                                    <li>
                                        <a href="salle-exposition.html" class="footer-link">Salle d'exposition</a>
                                    </li>
                                    <li>
                                        <a href="nos-partenaires.html" class="footer-link">Nos partenaires</a>
                                    </li>
                                    <li>
                                        <a href="actualites.html" class="footer-link">Actualités</a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="footer-link">Contact</a>
                                    </li>
                                </ul>
                                <div class="container-catalogue">
                                    <a href="#" title="Découvrez nos catalogues" class="item-catalogue">
                                        <img src="./assets/images/brochure.png" width="258" height="205" alt="" />
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
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem doloremque odit pariatur minima totam vero tenetur fugit, quaerat officia velit sed nobis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-1-2@m">
                            <div class="map-footer">
                                <svg version="1.1" id="Calque_1" xmlns:v="https://vecta.io/nano" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 648 458" style="enable-background:new 0 0 648 458;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #001121;
                                        }

                                        .st1 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #FFFFFF;
                                        }

                                        .st2 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #A29181;
                                        }

                                        .st3 {
                                            enable-background: new;
                                        }

                                        .st4 {
                                            fill: #FFFFFF;
                                        }

                                        .st5 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #00376A;
                                        }

                                        .st6 {
                                            fill: none;
                                            stroke: #FFFFFF;
                                        }
                                    </style>
                                    <circle class="st0" cx="375" cy="263" r="170" />
                                    <path class="st1" d="M186.7,439.6c1.9,1.1,3.5-0.1,6.1-2.1c2.3-1.8,4.8-3.9,8-3c2.1-2.9,3.6-8.7,2.9-11.8c-0.1-0.2,0-0.5,0.1-0.7
                            l4.4-9.1c0.2-0.4,0.7-0.6,1.1-0.5c3,0.6,9.1,2.8,11.5,6.5c1-0.4,2.3-1.5,3.4-2.4c2-1.7,3.8-3.2,5.4-2.4c1.1,0.5,1.6,2,1.5,4.8
                            c2.2,0.7,3.7,0.9,4.4,0.6c0.5-0.3,0.7-0.9,1-1.9c1-3.2,2.5-5.9,10.4-5.1c0.4,0,0.7,0.3,0.8,0.6c1.7,3.9,0.5,5.7-0.3,6.9
                            c-0.5,0.8-0.5,0.9-0.3,1.2c0.4,0.8,1.8,2,4.3,3.7c0.3,0.2,0.5,0.6,0.4,1c-0.1,0.6-0.2,1.3-0.4,1.8c-1.3,6.3-1.5,7.7,5.2,9.2
                            l9.1-23.5l1.7-4.2c-0.9-4.5,1.2-11.3,4.4-14.5v-0.9c-0.1-3.3-0.3-8.6,3.1-10.3l2-11.2c0.1-0.4,0.3-0.7,0.7-0.8
                            c6.7-2.2,13.2-0.2,18.9,5.7c1.9-1.7,5.1-3.8,8.7-5.1c4.7-1.7,8.4-1.3,10.8,1.1c0.2,0.2,0.3,0.4,0.3,0.7c-0.2,4.5,4.1,7.7,8,10
                            c2.4-0.6,3.9-0.6,4.9,0.1c1.2,0.9,1.3,2.5,1.4,4.6c0,0.7,0,1.4,0.1,2.2c1.7,1,7.7,4.3,8,4.4l0.1,0.1c0.3,0.2,0.5,0.7,0.4,1.1
                            c-0.6,2.4,2,7.5,3.8,10.9c0.1,0.2,0.2,0.3,0.3,0.5c0.1-0.5,0.2-0.9,0.2-1.3c0.2-1.4,0.3-2.4,1.3-2.6c1.1-0.2,1.7,0.7,3.6,4.3l3-0.9
                            c0.4-0.1,0.7,0,1,0.3s0.4,0.7,0.2,1l-2.5,7.7c1.7,2.1,4.1,2.8,7.1,2.2c6.6-1.3,13.5-8.3,14.6-13.1c0.1-0.3,0.3-0.5,0.5-0.7
                            c0.3-0.1,0.6-0.2,0.8,0c8.5,3.5,12.4,6,13.6,15.5c4.7-3.7,12.1-2.2,17.7-1.1l0.5,0.1c2.9-1.8,7.3-5.7,6.6-9.3
                            c-0.1-0.4,0.1-0.8,0.4-1s0.7-0.3,1.1-0.1c0.6,0.3,1.2,0.4,1.7,0.3c1.3-0.5,2.3-2.8,3.1-4.7c0.8-1.8,1.4-3.3,2.4-4l5-3.5
                            c0.3-0.2,0.5-0.4,0.7-0.5c0.3-0.5,0.7-1.1,1.1-1.7c2.5-4.1,7.3-11.8,5.6-15.7c-0.1-0.3-0.1-0.6,0.1-0.9c1-1.6,2.2-3.2,3.4-4.7
                            c4.1-5.4,7.7-10,1.8-15.4c-0.2-0.2-0.4-0.5-0.3-0.8c0-0.3,0.2-0.6,0.5-0.8c4.6-2.8,8.5-7.2,12.8-11.9c5.5-6,11.1-12.2,18.2-15v-2.8
                            c0-0.2,0-0.4,0.1-0.6c0.3-0.5,0.9-0.6,1.4-0.3c1.7,1,5.1-2.6,7.6-5.1c1.5-1.6,2.9-3,4.1-3.8c-2.4-5.3-1-14.7,1.1-19.5
                            c-1.5-2.9-2.8-8.2-2.2-11.1c0-0.2,0.1-0.3,0.2-0.5l5.9-7l0.3-0.3c0.5-0.3,1-0.1,1.3,0.3c1,1.7,7-1,10.5-2.5c2.9-1.3,4.8-2.1,6.2-2.3
                            c3.3-6.2,6.7-9.6,10.3-10.4c-1.2-1.9-2-3.8-1.4-5.6c0.5-1.7,2.1-3,5-4.1c1-3.3,4.3-5.2,7.4-6.9c4.1-2.3,7.6-4.2,6.5-8.8
                            c-0.1-0.3,0-0.6,0.2-0.9c2-2.3,4.2-4.1,6.2-5.7c5.9-4.8,9.4-7.7,3.4-16.6c-0.2-0.3-0.2-0.8,0-1.1s0.6-0.5,1-0.5
                            c8.6,1.1,9-0.7,9.4-2.5c0.4-2.1,1.2-3.9,5.8-3.5c0.5-1.4-0.5-3.5-1.2-5.2c-0.2-0.5-0.4-1-0.6-1.4l-19.4,3.1h-0.4
                            c-0.4-0.1-0.7-0.5-0.7-1c0-0.3,0-0.6,0.3-0.7c0.4-0.6,0.9-1.4,1.4-2.2c2.3-3.5,6.6-9.9,5.7-12.9c-0.1-0.5,0.1-1,0.5-1.2
                            c6.4-2.9,7-3.1,4.5-9.3c-0.1-0.3-0.1-0.5,0-0.8c0.1-0.2,0.3-0.4,0.6-0.5c3.4-1.2,10.3-2.2,14.7-0.2c3.3-2,5.6-3.8,5-7.3
                            c-5.1-2.6-5.3-5.7-4.7-7.7c-0.4-0.3-0.7-0.6-1-1c-1.9-1.8-3.8-3.5-5.5-3.3c-1,0.1-1.9,0.8-3,2.2c-0.2,0.3-0.6,0.4-0.9,0.4
                            c-0.4,0-0.7-0.3-0.8-0.6c-1.8-4.7-1-10.3,1.9-13.9c-0.2-1.6,0-4,0.1-6.5s0.3-5.4,0.1-6.9c-0.7-0.3-1.5-0.7-2.4-1.1
                            c-7.4-3.6-20.8-10-23.5-16.3c-1.3,0.5-2.4,0.6-3.5,0.2c-2.1-0.7-3.2-3.1-4.3-5.5v-0.1l-17.9-10.1c0,0-0.1,0-0.1-0.1
                            c-0.3-0.2-0.5-0.6-0.4-1c0.4-2.4-3-4.5-5.8-6.2c-0.9-0.5-1.7-1-2.4-1.5l-5,8.5c-0.2,0.4-0.4,0.7-0.8,0.9c-3.6,1.9-6,2.5-7.7,1.9
                            c-1.9-0.7-2.6-2.5-3.3-4.4c-0.9-2.3-1.8-4.7-4.9-5.7c-0.1,0-0.2-0.1-0.3-0.1c-5-3.5-7.7-3.7-10.1-0.8c-0.3,0.4-0.8,0.5-1.2,0.3
                            c-3.8-1.8-10.2,0.9-13,3.6c-0.3,0.3-0.7,0.4-1.1,0.2c-8.1-3.8-8.8-6.4-9-10.3c-0.1-2.1-0.2-4.2-2.6-7.2c-7.7-1.1-13,7.4-16.2,12.5
                            c-0.1,0.2-0.2,0.3-0.4,0.4l-1.4,0.7c-4.1,2-5.7,2.7-6.8,1.8s-0.6-2.6,0.7-7.2l0.1-0.3c-3.5,1.3-6.5,10.3-7.5,13.4
                            c-0.2,0.5-0.3,0.9-0.4,1.3c-0.1,0.3-0.3,0.5-0.6,0.6c-4.9,1.9-7.3,3.8-6.1,8.8c0.1,0.4-0.1,0.8-0.3,1c-0.3,0.2-0.7,0.3-1,0.1
                            c-3.2-1.4-7.9-1.2-10.2,1.3c0.9,2,1,3.4,0.4,4.4c-1,1.5-3.3,1.4-5.5,1.2c-0.4,0-0.9-0.1-1.4-0.1c-2.4,3.8-0.9,6.4,2.5,9.7
                            c0.3,0.3,0.4,0.8,0.2,1.2c-2.8,5.5-2.6,8.3-2.4,10.1c0.3,3.9-0.5,4.4-12.9,8.3c-0.5,0.2-1-0.1-1.2-0.6c-1.5-3.7-2.2-5-2.6-5.5
                            c-0.2,0.2-0.4,0.6-0.6,0.9c-1.5,2.3-4.3,6.6-12.4,3.4c-0.3,0.5-0.8,0.9-1.3,1.1c-2.1,1.1-5.3,0.6-6.8,0.2c-0.3,0.9-0.7,2.3-1,3.7
                            c-1.6,6.4-3.1,11.4-6.1,11.8c-1.4,0.2-2.9-0.7-4.3-2.9c-0.3,0.3-0.6,0.5-1,0.8c-4.8,4-8,6.4-9.9,5.1c-1.3-0.9-1.2-3.1,0.3-7.3
                            c-3.4-2.3-9-6.2-10.2-10.9c-4.6,5.3-8,3.9-14.3,1.5l-0.8-0.3c-0.5-0.2-0.8-0.7-0.6-1.2c0.8-2.4-1.3-4.7-3.3-6.6
                            c-2,2.8-4.5,4.8-8.9,2.2c-0.3-0.2-0.4-0.4-0.5-0.7c0-0.3,0-0.6,0.2-0.8c2.5-2.7,1.5-7.5,0.5-10.3c-4.7-1.9-6.6-3.3-6.6-4.9
                            c0-1.8,2-2.7,4.6-3.9c2-0.9,4.1-1.9,5.5-3.3l-3.5-3.5c-0.8-0.8-1.3-1.3-1-1.9c0.4-3.6-0.3-3.9-1.3-4.4c-1.8-0.8-3.5-2-4-7.1
                            c-1.6-1.2-3-2.2-3.7-2s-1.6,1.9-2.1,3.1c-0.2,0.4-0.6,0.6-1,0.6c-1.7-0.1-2.8-0.7-3.4-1.7c-0.9-1.6,0.2-3.8,1.2-5.8
                            c0.5-1.1,1.1-2.2,1.3-3c-0.1-2.3-2.2-2.6-5.5-2.9c-1.2-0.1-2.4-0.2-3.3-0.5c-0.3-0.1-0.6-0.4-0.7-0.7c-0.1-0.3,0-0.7,0.3-0.9
                            c1.5-1.5,2.2-2.5,2.1-3.2c0-0.8-0.9-1.7-2.2-3c-0.5,0-1.1,0.1-1.7,0.2c-3,0.5-7.5,1.1-8.9-2.1l-16-2.5c-1.8,2.6-3.1,7.7-2.5,10.6
                            c0.1,0.3,0,0.6-0.2,0.8s-0.4,0.4-0.7,0.4c-0.6,0.1-1.5,0.2-2.6,0.3c-7.1,1-14.2,1.8-16.8-0.7l-13.1,1.6v5.7v0.3
                            c-0.1,0.5-0.6,0.8-1.1,0.7c-4.6-0.5-8.4-3.1-10.7-7.4c-1.1,3.7-1.5,4.3-2.4,4.5c-0.8,0.2-1.3-0.4-1.7-0.9s-0.8-1-1.6-1
                            c-1,0-3,0.6-6.7,4.1c-0.2,0.2-0.6,0.3-0.9,0.3c-0.3-0.1-0.6-0.3-0.7-0.6c-0.8-2-1.6-3.1-2.4-3.4c-0.9-0.3-2.3,0.5-3.8,1.5
                            c-1,0.7-2.2,1.4-3.5,2c-0.2,0.1-0.3,0.1-0.5,0.1c-2-0.3-5.1-0.4-8.1-0.5c-2.8-0.1-5.4-0.2-7.3-0.4c-0.3,0-0.5-0.2-0.7-0.4
                            s-0.2-0.5-0.2-0.8c0.6-3.7-0.6-10.6-1.9-11c-0.2-0.1-1.1,0.3-2.4,2.8c-0.2,0.3-0.5,0.5-0.8,0.5s-0.7-0.1-0.9-0.4l-0.3-0.3
                            c-1.5-1.9-2.6-3.2-2.4-4.8c0.1-1,0.8-2,2.1-3.1c-2.6-4-7-11.3-9.2-15.5c-0.4-0.4-0.8-0.8-1.3-1.2c-3.1-2.8-7.6-6.9-6.5-11
                            c-0.7-0.6-1.5-1-2.1-0.9c-1.3,0.1-2.7,1.7-4,3.2c-0.9,1.1-1.8,2.2-2.8,2.9c-0.4,0.3-1,0.2-1.4-0.2c-0.6-0.7-1.2-1.7-1.8-2.8
                            c-2.6-4.4-4.8-7.6-8-6c-0.4,0.2-1,0.1-1.2-0.3c-0.3-0.4-0.3-0.9,0-1.3c6.2-7.2,6.1-16.8-0.4-22.8l-0.1-0.1c-0.9-1.1-1.8-2.3-2.7-3.4
                            C91.7,10,87.6,4.7,78.6,7.1c-0.3,0.1-0.7,0-0.9-0.2c-0.3-0.2-0.4-0.5-0.3-0.9c0.1-0.8,0.4-3.1-0.1-3.6C76.9,2,75.6,2.1,74,2.2h-0.3
                            V7c0,0.3-0.1,0.6-0.3,0.8c-0.3,0.3-0.7,0.3-1.1,0.2c-5.8-2.2-14.4-3-19.1-0.3c-0.3,0.2-0.7,0.2-1.1,0C47.3,4.4,39,6.5,33,8
                            c-0.6,0.1-1.1,0.3-1.7,0.4c0.1,2.7-1,6.8-3.1,9c4.5,8.3,0.6,17-11.4,25.4c8.3,4.5,10.8,9.9,13.4,15.6c2.1,4.6,4.2,9.3,9.6,14.2
                            c0.3,0.3,0.4,0.7,0.3,1.1s-0.5,0.6-0.9,0.6h-0.7c3.3,8.3-1.9,13-7,17.5c-3.4,3.1-7,6.2-8.3,10.6c2.1,0.6,4,2.5,4.4,4.5
                            c0.3,1.6-0.4,2.9-1.9,3.7c0.6,4.1-0.1,7.4-2.3,9.8c-4.2,4.6-12.6,4.6-19.8,3.9c-1,4.6-1.5,7.5-0.8,9.3c0.7,1.7,2.7,2.8,8,4.5
                            c0.3,0.1,0.5,0.3,0.6,0.5c0.1,0.3,0.1,0.6,0,0.8c-1.1,2.4,2.6,5.5,4.5,7.2c0.3,0.3,0.6,0.5,0.8,0.7c0.3,0.3,0.4,0.7,0.3,1
                            c-0.1,0.4-0.4,0.6-0.8,0.7c-1.3,0.2-1.5,1.6-1.7,4c-0.1,1.1-0.2,2.1-0.5,2.9c0.1,0.1,0.1,0.2,0.2,0.2c1.7,2.5,4.5,6.7,3.1,9.4
                            c-0.2,0.3-0.5,0.5-0.8,0.5c-0.4,0-1,0.1-1.7,0.1c-3.2,0.3-9.3,0.8-12.2,1.7c1.5,2.4,2.9,4.4,4.1,6.2c8.2,12.2,9.4,14.8-1.3,31.8
                            c14.8,12,15.7,18.5,17.4,30.1c0.6,4.3,1.3,9.2,2.8,15.4c0.1,0.2,0,0.4-0.1,0.7c-2.3,5,1.4,9.9,5.7,14.5c0.3,0.3,0.4,0.8,0.1,1.2
                            c-1.8,3.1-1.7,8.3,0.3,11.6c0.2,0.4,0.2,0.9-0.1,1.2c-5.6,6.3-3.9,13.7-1.9,19.5c0,0.1,0.1,0.3,0.1,0.4c-0.3,3.5-1.9,10-5.1,13.2
                            c1.6,5.3,4.7,11.4,10.1,11.6c0.3,0,0.6,0.2,0.7,0.4c5.1,6.5,7.9,9.3,9.6,9.5c0.8,0.1,1.6-0.5,2.9-1.5c2-1.6,5-4.1,11.1-4.5
                            c0.5,0,0.9,0.3,1,0.7c0.9,2.9,2.6,4.6,4.5,4.7c2.2,0.1,4.4-1.8,5.7-4.8c0.1-0.4,0.5-0.6,0.9-0.6c3.4-0.2,6.5,1.3,8.3,3.8
                            c1.5,2.2,1.9,5,0.9,7.8l1.8,1.8l6.9-6.9c0.3-0.4,0.9-0.4,1.3-0.1c0.6,0.4,1.6,1.1,2.1,0.6c0.8-0.9,0.7-4.2-0.5-5.6
                            c-0.3-0.3-0.3-0.8-0.1-1.1c0.2-0.4,0.6-0.5,1-0.5c2.1,0.4,3.6,0.2,4.2-0.4c0.8-0.7,0.5-2.4,0.4-3.7c-0.2-1.5-0.4-2.9,0.7-3.5
                            c1.1-0.7,2.9,0,6.9,2.8c0.4,0.3,0.5,0.8,0.4,1.2c-1.8,4.4,2.6,8.9,6.1,12.5c0.8,0.8,1.6,1.6,2.2,2.4c0.1,0.2,0.2,0.4,0.2,0.6
                            c0.4,6,1.7,8,2.9,9.8c1.6,2.5,2.9,4.6,1.9,13.8l6.1,3.6c0.3,0.2,0.5,0.3,0.7,0.4c2.3-1.3,4.9-1.4,6.9-0.1s3,3.6,2.7,6.3l2.4,1.4
                            l3.3-2.3c0.3-0.2,0.7-0.2,1.1,0l11.5,6.8c0.1,0.1,0.3,0.2,0.3,0.3c0.2,0.3,0.2,0.7,0.1,1c-3.4,7.1-2.6,11.9-1.6,17.8
                            c0.5,2.8,1,5.8,1.1,9.3c0,0.3-0.1,0.7-0.4,0.8c-0.3,0.2-0.6,0.2-0.9,0.1c-3.3-1.3-4.7,0.4-7.1,3.8c-0.2,0.2-0.4,0.4-0.6,0.4
                            c-2,0.4-4,0.9-4.4,1.6s0.3,2.4,1.2,4.8l0.2,0.5c0.1,0.2,0.1,0.5,0,0.7c-1.2,3.2-2.4,6.5-1.8,7.5c0.5,0.7,2.5,0.9,5.4,1.2l2.6,0.3
                            c0.4,0,0.7,0.3,0.9,0.7c1.4,4.7,3,6.9,5.3,6.9c2.6-2.8,10.1-5,13.5-4.7c0.4,0,0.7,0.3,0.8,0.6c1.5,3.5,2.8,4.3,6.1,3.6
                            c0.2-0.2,0.3-0.5,0.5-0.7c1.3-1.8,2.8-3.9,4.8-4c1.1,0,2.2,0.5,3.2,1.5c2.6-0.5,3.8-0.6,4.6,0.2
                            C187.8,435.6,187.5,436.8,186.7,439.6 M188.2,442c-1,0-2.1-0.4-3.2-1.2c-0.3-0.2-0.5-0.7-0.3-1.1l0.1-0.5c0.4-1.3,0.7-2.6,0.7-3.1
                            c-0.5,0-1.8,0.2-3,0.4h-0.2c-0.3,0.1-0.7-0.1-0.9-0.3c-0.7-0.9-1.4-1.3-2-1.3c-1.1,0-2.3,1.7-3.3,3.1l-0.8,1.1
                            c-0.1,0.2-0.3,0.3-0.6,0.4c-4.4,1-6.7-0.1-8.5-4.1c-3.2,0-9.8,2.1-11.5,4.3c-0.2,0.2-0.4,0.4-0.7,0.4c-4.8,0.4-6.8-5-7.6-7.7
                            c-0.7-0.1-1.3-0.1-1.9-0.2c-3.7-0.3-5.9-0.5-6.9-2.1s-0.4-4,1.5-8.9L139,421c-1.2-3.2-1.9-4.9-1-6.4c0.7-1.3,2.5-1.9,5.4-2.5
                            c1.9-2.7,4-5.3,7.7-4.6c-0.2-2.8-0.6-5.3-1-7.6c-1-5.9-1.8-11,1.4-18.2c-1.3-0.7-4.1-2.4-10.1-5.9L138,378c-0.3,0.2-0.7,0.2-1.1,0
                            l-3.5-2.1c-0.4-0.2-0.6-0.6-0.5-1c0.4-2.2-0.3-4.1-1.7-5c-1.5-0.9-3.4-0.8-5.2,0.4c-0.3,0.2-0.7,0.2-1,0.1h-0.1
                            c-0.3-0.2-7.9-4.7-7.9-4.7c-0.3-0.2-0.5-0.6-0.5-1c1.1-9-0.1-10.8-1.5-13.1c-1.2-2-2.7-4.2-3.1-10.4c-0.6-0.6-1.2-1.3-1.9-2
                            c-3.6-3.6-8.4-8.6-6.8-13.9c-2.5-1.7-3.5-2.1-4-2.2c0,0.4,0.1,1,0.1,1.4c0.2,1.7,0.6,4-0.9,5.5c-0.9,0.8-2.2,1.2-4,1.1
                            c0.8,2.2,0.8,5.1-0.6,6.4c-0.6,0.6-1.9,1.4-4,0.1l-7.1,7c-0.4,0.4-1,0.4-1.4,0l-2.9-2.9c-0.3-0.3-0.4-0.7-0.2-1.1
                            c1-2.3,0.9-4.6-0.4-6.5s-3.5-2.9-5.9-3c-1.6,3.4-4.4,5.5-7.3,5.4c-2.6-0.1-4.8-2-6.1-5.3c-4.9,0.5-7.4,2.5-9.2,4
                            c-1.4,1.1-2.6,2.1-4.3,1.9c-2.4-0.3-5.1-2.8-10.7-9.9c-6.5-0.6-9.9-7.7-11.6-13.6c-0.1-0.4,0-0.8,0.3-1.1c2.9-2.3,4.6-8.4,4.9-12
                            c-2.2-6.1-3.8-14,1.9-20.8c-1.9-3.6-2-8.8-0.3-12.3c-3.1-3.3-8.4-9.3-5.7-15.8c-1.5-6.1-2.2-11-2.8-15.2
                            c-1.7-11.7-2.5-17.5-17.3-29.4c-0.4-0.3-0.5-0.9-0.2-1.3c10.8-17.1,9.6-18.9,1.8-30.4L0.5,168C0,167.8,0,167.6,0,167.3
                            c0.1-0.3,0.2-0.5,0.5-0.6c2.4-1.3,8.5-1.9,14-2.3c0.4,0,0.7-0.1,1-0.1c0.2-1.8-2.1-5.3-3.1-6.9c-0.2-0.3-0.3-0.5-0.5-0.7
                            c-0.2-0.3-0.2-0.7,0-1.1c0.3-0.5,0.4-1.5,0.5-2.6c0.1-1.7,0.3-3.9,1.8-5.1c-2.2-1.9-5.5-5-5-8.2c-4.6-1.6-7.2-2.9-8.3-5.3
                            c-1-2.5-0.3-5.8,0.9-11.4c0.1-0.5,0.6-0.8,1.1-0.8c6.3,0.6,15.2,1,19-3.2c1.8-2,2.4-5,1.6-8.8c-0.1-0.5,0.2-1,0.7-1.1
                            c1.4-0.5,1.4-1.2,1.3-1.8c-0.2-1.4-2-3-3.6-3h-0.1c-0.3,0-0.6-0.1-0.8-0.4c-0.2-0.2-0.3-0.5-0.2-0.8c1.1-5.6,5.2-9.2,9.2-12.7
                            c5.3-4.7,9.8-8.7,5.9-16.6c-0.2-0.4-0.1-0.8,0.2-1.2c0.1-0.1,0.2-0.2,0.5-0.2c-4.5-4.6-6.5-9.1-8.3-13.1c-2.7-5.9-5-11.1-13.9-15.4
                            c-0.3-0.2-0.5-0.5-0.6-0.8c0-0.4,0.1-0.7,0.4-0.9C22.9,36.5,32,27.6,26,17.8c-0.3-0.4-0.2-1,0.3-1.3c1.9-1.4,3.3-6.1,2.9-8.5
                            c-0.1-0.5,0.2-1,0.8-1.1l2.5-0.6c6.2-1.6,14.6-3.8,20.3-0.4c4.9-2.5,12.7-2,18.4,0.1V1.8c0-0.5,0.4-1,1-1c0.4,0,0.8,0,1.2-0.1
                            c2.4-0.1,3.9-0.2,4.9,0.8C79,2.1,79.1,3.3,79,5.1C88.4,3.2,92.9,9,97.6,15.2c0.8,1.1,1.7,2.2,2.6,3.3c6.6,6.2,7.3,15.6,2.2,23.3
                            c3.5,0.3,6,4.4,7.7,7.4c0.4,0.6,0.7,1.2,1,1.7c0.5-0.5,1.1-1.2,1.7-1.9c1.6-1.9,3.2-3.8,5.4-3.9c1.3-0.1,2.7,0.6,4,2
                            c0.3,0.3,0.4,0.7,0.2,1.1c-1.3,3,3.1,7,5.8,9.4c0.6,0.5,1.1,1,1.5,1.4c0.1,0.1,0.1,0.2,0.2,0.2c2.3,4.3,7.1,12.4,9.6,16.2
                            c0.3,0.4,0.2,1-0.2,1.3c-1.3,1-2,1.8-2,2.4c-0.1,0.6,0.5,1.5,1.3,2.5c0.9-1.4,2.3-3.1,4.1-2.5c3,1,3.6,8.6,3.4,12.2l6.1,0.3
                            c2.9,0.1,6,0.2,8.1,0.5c1-0.5,2-1.1,3-1.7c1.9-1.2,3.7-2.4,5.5-1.8c1.2,0.4,2.2,1.4,3,3.2c2.9-2.6,5.2-3.8,7.1-3.7
                            c1.4,0.1,2.2,0.8,2.7,1.4c0.5-1.2,1.2-3.8,1.6-5.2c0.1-0.4,0.5-0.7,0.9-0.7s0.9,0.3,1,0.7c1.7,4.6,4.9,7.6,9.1,8.4v-2.1v-3.3
                            c0-0.5,0.4-0.9,0.9-1l14.5-1.8c0.4,0,0.7,0.1,0.9,0.4c1.6,2.3,11.2,1,15.3,0.4c0.6-0.1,1.2-0.2,1.7-0.2c-0.3-3.6,1.2-8.9,3.4-11.6
                            c0.3-0.5,0.5-0.5,3.7,0l14.5,2.2c0.4,0.1,0.7,0.3,0.8,0.7c0.6,2.1,3.4,1.8,6.8,1.3c0.9-0.1,1.7-0.3,2.3-0.3c0.3,0,0.5,0.1,0.7,0.3
                            c2.1,1.9,3.2,3.2,3.2,4.7c0,1.1-0.5,2.1-1.5,3.2c0.4,0,0.8,0.1,1.2,0.1c3.1,0.2,7.3,0.6,7.4,4.9v0.2c-0.2,1.1-0.8,2.4-1.5,3.7
                            c-0.7,1.4-1.6,3.2-1.2,3.9c0.1,0.3,0.5,0.4,1.1,0.6c0.9-1.9,1.9-3.2,3.1-3.5c1.6-0.4,3.3,0.8,5.7,2.6c0.2,0.2,0.4,0.4,0.4,0.7
                            c0.4,4.8,1.6,5.3,2.8,5.9c1.7,0.8,2.9,1.7,2.5,6.2l4.7,4.7c0.4,0.3,0.4,0.9,0.1,1.3c-1.6,2.1-4.5,3.5-6.9,4.6
                            c-1.3,0.6-3.4,1.6-3.5,2.1c0,0.1,0.2,1.1,5.8,3.3c0.3,0.1,0.5,0.3,0.6,0.6c1,2.9,2.3,8.1,0,11.7c2.4,1,3.8,0.1,5.9-3.1
                            c0.2-0.3,0.4-0.4,0.7-0.5c0.3,0,0.6,0.1,0.8,0.3l0.4,0.3c2.1,2,5.1,4.8,4.5,8.3l0,0c6.9,2.7,9,3.6,13.6-2.9c0.3-0.4,0.8-0.5,1.2-0.3
                            s0.7,0.6,0.6,1.1c-0.9,4.7,5.9,9.3,9.6,11.8l0.6,0.4c0.4,0.3,0.5,0.7,0.4,1.2c-1.8,4.9-1.3,5.7-1.2,5.7c1.1,0.3,5.7-3.6,7.5-5
                            c0.7-0.6,1.3-1.1,1.9-1.5c0.2-0.2,0.5-0.3,0.8-0.2s0.5,0.2,0.7,0.5c1.1,1.9,2.2,3,2.9,2.9c1.9-0.3,3.5-6.8,4.4-10.3
                            c0.6-2.2,1-3.9,1.5-4.8c0.2-0.4,0.7-0.7,1.2-0.5c1.7,0.5,4.7,1,6.2,0.2c0.4-0.2,0.7-0.5,0.8-1c0.1-0.3,0.3-0.5,0.5-0.6
                            c0.3-0.1,0.6-0.1,0.8,0c7.2,3.2,9.3,0,10.8-2.3c0.7-1,1.3-2,2.4-1.9c1.2,0.1,2.1,1.4,4,6c5.3-1.7,8.4-2.7,9.7-3.6
                            c1-0.6,1-0.9,0.8-2.3c-0.2-1.9-0.4-5,2.3-10.6c-3.1-3.1-5.7-6.8-2-12.2c0.2-0.3,0.5-0.4,0.8-0.4l0,0c0.7,0,1.3,0,2,0.1
                            c1.4,0.1,3.4,0.2,3.7-0.3c0.1-0.1,0.4-0.8-0.8-3c-0.2-0.3-0.1-0.7,0.1-1c2.4-3.3,7.4-4,11.3-3c-0.5-5.6,3.3-7.7,7.2-9.3
                            c0.1-0.2,0.2-0.5,0.3-0.8c1.7-5.1,5.3-15.8,11-14.9c0.3,0,0.5,0.2,0.7,0.5c0.2,0.2,0.2,0.5,0.1,0.8l-0.5,1.7c-0.6,2.1-1.2,4.1-1.2,5
                            c0.8-0.2,2.6-1,4.5-1.9l1.2-0.6c3.3-5.3,9.4-14.7,18.5-13.1c0.2,0,0.5,0.2,0.6,0.4c3,3.7,3.1,6.5,3.2,8.7c0.2,2.9,0.3,5,7.3,8.4
                            c3.2-2.8,9.5-5.4,14-3.8c4.3-4.6,9.7-0.8,12.2,0.9c3.8,1.4,5,4.4,6,6.8c0.7,1.8,1.2,2.9,2.1,3.2c1.1,0.4,3.1-0.2,6-1.7l5.7-9.7
                            c0.2-0.3,0.4-0.5,0.7-0.5s0.6,0.1,0.8,0.3c0.5,0.6,1.7,1.3,2.9,2c3.1,1.9,6.9,4.1,6.8,7.6c0.5,0.3,1.2,0.7,2.3,1.3l15.4,8.7
                            c0.2,0.1,0.3,0.3,0.4,0.5l0.2,0.4c0.9,2.1,1.8,4,3.1,4.5c0.8,0.3,1.7,0.1,3-0.6c0.3-0.1,0.6-0.2,0.9,0c0.3,0.1,0.5,0.4,0.6,0.7
                            c1.2,5.7,15.8,12.7,22.8,16.1c1.1,0.5,2.1,1,2.8,1.4c0.3,0.1,0.5,0.4,0.5,0.7c0.4,1.7,0.2,4.7,0.1,7.9c-0.1,2.6-0.3,5.2-0.1,6.5
                            c0,0.3,0,0.6-0.2,0.8c-2.7,3-3.1,7.2-2.4,10.5c1-1,2-1.5,3.2-1.6c2.6-0.2,4.8,1.8,7,3.8c0.5,0.5,1,0.9,1.5,1.4
                            c0.3,0.3,0.4,0.8,0.3,1.2c-0.4,0.9-1.5,3.5,3.9,6c0.3,0.1,0.5,0.4,0.5,0.7c1.3,5.7-3.1,8.3-6.4,10.2c-0.3,0.2-0.7,0.2-1,0
                            c-3-1.6-8.6-1.4-12.6-0.2c2.4,6.5,0.8,7.8-5.2,10.5c0.4,3.9-3.5,9.8-6.1,13.8c-0.1,0.2-0.2,0.3-0.3,0.5c0.3,0,0.6-0.1,1-0.2
                            l17.1-2.7c0.5-0.1,1,0.2,1.1,0.7s0.5,1.2,0.8,2c1.1,2.4,2.4,5.3,0.8,7.7c-0.2,0.3-0.6,0.5-1,0.4c-3.8-0.4-4,0.4-4.3,1.8
                            c-0.6,2.7-1.7,4.9-9.5,4.3c5.3,9.1,0.5,13-4.9,17.4c-1.9,1.6-3.8,3.2-5.6,5.1c1,5.7-3.6,8.3-7.6,10.5c-3.1,1.7-6,3.3-6.6,6.1
                            c-0.1,0.3-0.3,0.6-0.6,0.7c-2.5,0.9-3.9,1.9-4.2,3s0.3,2.7,2.1,5.2c0.2,0.3,0.2,0.7,0.1,1c-0.2,0.3-0.5,0.5-0.9,0.5
                            c-3.5,0-7.1,3.4-10.6,10c-0.2,0.3-0.5,0.6-0.9,0.5c-1,0-3.5,1.1-6,2.2c-4.7,2.1-9.6,4.3-12.1,2.7c-0.1,0.1-0.1,0.2-0.2,0.3l-4.8,5.7
                            c-0.3,2.6,0.9,7.7,2.3,9.9c0.2,0.3,0.2,0.6,0,1c-2.3,4.5-3.6,14.5-0.9,19c0.2,0.3,0.2,0.6,0.1,0.9s-0.4,0.5-0.7,0.6
                            c-0.9,0.3-2.7,2.1-4.3,3.8c-2.7,2.8-5.6,6-8.3,6h-0.2v2.2c0,0.4-0.3,0.8-0.7,0.9c-7,2.4-12.6,8.7-18,14.7
                            c-3.8,4.2-7.8,8.6-12.1,11.5c5.9,6.3,1.5,12.1-2.5,17.2l-3,4.1c1.6,4.9-3,12.5-5.9,17.1c-0.4,0.7-0.8,1.3-1.1,1.8l-0.3,0.3
                            c-0.1,0.1-5.9,4.1-5.9,4.1c-0.5,0.4-1.2,1.9-1.7,3.2c-1,2.4-2.2,5-4.3,5.8c-0.5,0.2-1.1,0.2-1.7,0.2c-0.2,4-4.2,7.8-7.9,10
                            c-0.2,0.1-0.5,0.2-0.7,0.1l-0.8-0.2c-5.7-1.2-13.5-2.7-17.3,1.9c-0.3,0.3-0.7,0.4-1.1,0.3s-0.7-0.5-0.7-0.9
                            c-0.8-9.8-3.7-12.2-11.6-15.5c-2,5.7-9.4,12.2-15.8,13.5c-4,0.8-7.3-0.4-9.5-3.4c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.1,0-0.2,2.1-6.7
                            l-2,0.6c-0.5,0.1-1-0.1-1.2-0.5c-0.5-1-1-2-1.6-2.9c-0.2,1.1-0.4,2.6-1,4c-0.2,0.4-0.5,0.6-0.9,0.6s-0.8-0.2-0.9-0.6
                            c-0.4-0.9-0.9-1.8-1.4-2.7c-2-3.8-4.4-8.4-4.1-11.5c-0.2-0.1-0.4-0.2-0.7-0.4l-7.2-4c-0.3-0.2-0.5-0.4-0.5-0.8c-0.1-1-0.1-2-0.2-2.8
                            c-0.1-1.5-0.1-2.7-0.6-3.1c-0.3-0.2-1.2-0.4-3.6,0.3c-0.3,0.1-0.5,0-0.8-0.1c-4.3-2.6-9.3-6.2-9.3-11.6c-2.3-2-5.8-1.3-8.4-0.4
                            c-3.5,1.3-6.9,3.6-8.7,5.4c-0.2,0.2-0.4,0.3-0.7,0.3c-0.3,0-0.5-0.1-0.7-0.3c-3.6-4-9.4-8.2-16.9-6.1l-2,11.1
                            c-0.1,0.4-0.3,0.7-0.7,0.8c-2.5,0.8-2.4,5.7-2.3,8.6v1.4c0,0.3-0.1,0.6-0.3,0.8c-2.9,2.6-5,9.1-4.1,13.1v0.6
                            c-0.2,0.4-11.1,28.5-11.2,28.8c-0.2,0.5-0.7,0.7-1.1,0.6c-4.7-1-6.9-2.1-7.8-3.9c-1-1.9-0.5-4.2,0.2-7.8c0.1-0.4,0.2-0.8,0.2-1.2
                            c-5.1-3.6-5.5-5-4-7.3c0.6-1,1.3-2,0.3-4.5c-6.4-0.5-7,1.6-7.7,3.8c-0.4,1.2-0.8,2.5-2.1,3.1c-1.4,0.7-3.4,0.5-6.7-0.7
                            c-0.4-0.2-0.7-0.6-0.7-1c0.2-3.2-0.4-3.6-0.4-3.6c-0.5-0.1-2.2,1.3-3.2,2.2c-1.7,1.4-3.4,2.8-5,3.1c-0.4,0.1-0.9-0.2-1.1-0.6
                            c-1.4-3-6.4-5.2-9.7-6c-0.1,0.2-0.2,0.4-0.3,0.7l-3.6,7.4c0.7,4-1.1,10.7-3.8,13.7c-0.3,0.3-0.7,0.4-1.1,0.3
                            c-2.4-0.9-4.5,0.7-6.7,2.5C192.3,440.4,190.4,442,188.2,442" />
                                    <g>
                                        <g>
                                            <g>
                                                <path id="B" class="st1" d="M428.2,229.7c0,2.8-2.3,5.1-5.1,5.1s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S428.2,226.9,428.2,229.7" />
                                            </g>
                                            <g>
                                                <path id="B_00000141451125209409008100000000122723181324902030_" class="st1" d="M390.2,249.1c0,2.8-2.3,5.1-5.1,5.1
                                        s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S390.2,246.3,390.2,249.1" />
                                            </g>
                                        </g>
                                        <g>
                                            <path id="B_00000010988968686749393480000001503395194133655433_" class="st2" d="M465.2,174.1c0,2.8-2.3,5.1-5.1,5.1
                                    s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S465.2,171.3,465.2,174.1" />
                                        </g>
                                        <g>
                                            <g>
                                                <path id="B_00000182504483886026119480000006445859358682545838_" class="st1" d="M396.9,196.7c0,2.8-2.3,5.1-5.1,5.1
                                        s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S396.9,193.9,396.9,196.7" />
                                            </g>
                                            <g>
                                                <path id="C" class="st1" d="M366.5,339c0,2.8-2.3,5.1-5.1,5.1s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S366.5,336.1,366.5,339" />
                                            </g>
                                            <g>
                                                <path id="C_00000081626282747972502870000012803736098718349247_" class="st1" d="M299.5,216.4c0,2.8-2.3,5.1-5.1,5.1
                                        s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S299.5,213.5,299.5,216.4" />
                                            </g>
                                            <g>
                                                <path id="B_00000163068180470326016320000002155407493008541085_" class="st1" d="M109.9,119c0,2.8-2.3,5.1-5.1,5.1
                                        s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S109.9,116.2,109.9,119" />
                                            </g>
                                            <g>
                                                <path id="C_00000002355962336768774010000016694732447698114231_" class="st1" d="M273.4,316.8c0,2.8-2.3,5.1-5.1,5.1
                                        s-5.1-2.3-5.1-5.1s2.3-5.1,5.1-5.1S273.4,313.9,273.4,316.8" />
                                            </g>
                                            <g>
                                                <path id="B_00000156557026148610210360000011407852218168370336_" class="st1" d="M53,279.3c0,2.8-2.3,5.1-5.1,5.1
                                        s-5.1-2.3-5.1-5.1c0-2.8,2.3-5.1,5.1-5.1S53,276.5,53,279.3" />
                                            </g>
                                        </g>
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M78.6,142l3.4-9.6h1.6L87,142h-1.4l-0.8-2.3h-4.1l-0.8,2.3H78.6z M81.1,138.6h3.3l-1.7-4.7L81.1,138.6z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M90.3,142.1c-0.7,0-1.2-0.2-1.6-0.6s-0.6-1-0.6-1.8v-4.6h1.2v4.5c0,0.5,0.1,0.8,0.4,1c0.2,0.2,0.6,0.4,1,0.4
                                c0.4,0,0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.5-0.8s0.2-0.7,0.2-1v-3.8h1.2v6.9h-1.2v-1h-0.1c-0.1,0.1-0.2,0.2-0.3,0.4s-0.4,0.3-0.6,0.5
                                C91.1,142.1,90.7,142.1,90.3,142.1z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M95,142l2.2-3.4l-2.3-3.5h1.3l1.8,2.7l1.8-2.7h1.3l-2.3,3.5l2.3,3.4h-1.3l-1.8-2.7l-1.8,2.7H95z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M105.2,142.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8s-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                s0.8,0.7,1.1,1.2c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                c0.4,0,0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                c-0.2,0.2-0.5,0.4-0.8,0.6C106.2,142.1,105.7,142.1,105.2,142.1z M103.2,138h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                c-0.3-0.1-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5S103.3,137.4,103.2,138z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M109.9,142v-6.9h1.2v0.9h0.1c0.1-0.3,0.4-0.5,0.7-0.7c0.3-0.2,0.7-0.3,1.2-0.3c0.1,0,0.3,0,0.6,0v1.2
                                c-0.3,0-0.5,0-0.6,0c-0.6,0-1.1,0.2-1.4,0.5c-0.3,0.3-0.5,0.9-0.5,1.7v3.7H109.9z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M115,142v-6.9h1.2v0.9h0.1c0.1-0.3,0.4-0.5,0.7-0.7c0.3-0.2,0.7-0.3,1.2-0.3c0.1,0,0.3,0,0.6,0v1.2
                                c-0.3,0-0.5,0-0.6,0c-0.6,0-1.1,0.2-1.4,0.5c-0.3,0.3-0.5,0.9-0.5,1.7v3.7H115z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M122.6,142.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8c-0.3-0.3-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                c0.5,0.3,0.8,0.7,1.1,1.2c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                c0.4,0,0.6-0.1,0.9-0.2s0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                c-0.2,0.2-0.5,0.4-0.8,0.6S123.1,142.1,122.6,142.1z M120.6,138h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                s-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5S120.7,137.4,120.6,138z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M43,301v-9.6h1.1l5,7.3v-7.3h1.3v9.6h-1.1l-5-7.3v7.3H43z" />
                                        <path class="st4" d="M55.6,301.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8s-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                s0.8,0.7,1.1,1.2c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                c0.4,0,0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                c-0.2,0.2-0.5,0.4-0.8,0.6C56.5,301.1,56.1,301.1,55.6,301.1z M53.6,297h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                c-0.3-0.1-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5S53.6,296.4,53.6,297z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M62.1,301l-2.6-6.9h1.3l2,5.4l2-5.4h1.3l-2.6,6.9H62.1z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M70.2,301.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8s-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                s0.8,0.7,1.1,1.2c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                c0.4,0,0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                c-0.2,0.2-0.5,0.4-0.8,0.6C71.1,301.1,70.7,301.1,70.2,301.1z M68.2,297h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                c-0.3-0.1-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5S68.2,296.4,68.2,297z" />
                                        <path class="st4" d="M74.8,301v-6.9h1.2v0.9h0.1c0.1-0.3,0.4-0.5,0.7-0.7c0.3-0.2,0.7-0.3,1.2-0.3c0.1,0,0.3,0,0.6,0v1.2
                                c-0.3,0-0.5,0-0.6,0c-0.6,0-1.1,0.2-1.4,0.5c-0.3,0.3-0.5,0.9-0.5,1.7v3.7H74.8z" />
                                        <path class="st4" d="M82.5,301.1c-0.5,0-1-0.1-1.3-0.2s-0.6-0.3-0.8-0.6s-0.3-0.4-0.4-0.7c-0.1-0.2-0.2-0.5-0.2-0.8h1.2
                                c0.1,0.2,0.1,0.4,0.2,0.6c0.1,0.2,0.3,0.3,0.5,0.4s0.5,0.2,0.9,0.2c0.4,0,0.7-0.1,0.9-0.3c0.2-0.2,0.3-0.4,0.3-0.7
                                c0-0.3-0.1-0.5-0.3-0.6s-0.4-0.3-0.8-0.3l-0.9-0.2c-0.3-0.1-0.7-0.2-1-0.4c-0.3-0.1-0.5-0.3-0.7-0.6c-0.2-0.3-0.3-0.6-0.3-1
                                c0-0.6,0.2-1.1,0.7-1.4s1-0.6,1.7-0.6c0.5,0,0.9,0.1,1.2,0.2s0.6,0.3,0.7,0.5c0.2,0.2,0.3,0.4,0.4,0.6c0.1,0.2,0.2,0.4,0.2,0.7
                                h-1.2c-0.1-0.2-0.1-0.4-0.2-0.5c-0.1-0.1-0.2-0.2-0.4-0.3c-0.2-0.1-0.4-0.1-0.7-0.1c-0.4,0-0.7,0.1-0.9,0.3
                                c-0.2,0.2-0.3,0.4-0.3,0.6c0,0.2,0.1,0.4,0.3,0.5c0.2,0.1,0.4,0.2,0.7,0.3l0.9,0.2c0.6,0.1,1.1,0.4,1.5,0.7s0.6,0.8,0.6,1.4
                                c0,0.4-0.1,0.7-0.3,1.1c-0.2,0.3-0.5,0.6-0.9,0.8S83,301.1,82.5,301.1z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M289,202v-9.6h3.1c0.8,0,1.4,0.1,2,0.4c0.6,0.3,1,0.6,1.4,1.1s0.7,1,0.9,1.5c0.2,0.6,0.3,1.2,0.3,1.8
                                s-0.1,1.2-0.3,1.8c-0.2,0.6-0.5,1.1-0.9,1.5s-0.9,0.8-1.4,1.1c-0.6,0.3-1.2,0.4-2,0.4H289z M292.1,193.5h-1.8v7.4h1.8
                                c0.6,0,1.1-0.1,1.5-0.3s0.8-0.5,1.1-0.8c0.3-0.4,0.5-0.7,0.6-1.2s0.2-0.9,0.2-1.4s-0.1-0.9-0.2-1.4c-0.1-0.4-0.3-0.8-0.6-1.2
                                c-0.3-0.4-0.6-0.6-1.1-0.8S292.7,193.5,292.1,193.5z" />
                                        <path class="st4" d="M299.2,193.8c-0.2,0-0.4-0.1-0.6-0.2c-0.2-0.2-0.2-0.3-0.2-0.6c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.3-0.2,0.6-0.2
                                c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.3,0.2,0.6c0,0.2-0.1,0.4-0.2,0.6C299.6,193.7,299.4,193.8,299.2,193.8z M298.6,202v-6.9h1.2
                                v6.9H298.6z" />
                                        <path class="st4" d="M301.2,204.5c-0.2,0-0.5,0-0.8-0.1v-1.1c0.2,0,0.4,0.1,0.6,0.1c0.5,0,0.8-0.1,1-0.3s0.3-0.5,0.3-1v-7h1.2v7
                                c0,0.3,0,0.6-0.1,0.8s-0.2,0.5-0.3,0.8c-0.2,0.2-0.4,0.4-0.7,0.6C302,204.4,301.6,204.5,301.2,204.5z M302.7,193.8
                                c-0.2,0-0.4-0.1-0.6-0.2c-0.2-0.2-0.2-0.3-0.2-0.6c0-0.2,0.1-0.4,0.2-0.6c0.2-0.2,0.3-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2
                                c0.2,0.2,0.2,0.3,0.2,0.6c0,0.2-0.1,0.4-0.2,0.6C303.2,193.7,303,193.8,302.7,193.8z" />
                                        <path class="st4" d="M308.4,202.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3c-0.3-0.5-0.4-1.1-0.4-1.7c0-0.6,0.1-1.2,0.4-1.7
                                s0.6-1,1.1-1.3s1.1-0.5,1.9-0.5s1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7c0,0.6-0.1,1.2-0.4,1.7s-0.6,1-1.1,1.3
                                C309.7,202,309.1,202.1,308.4,202.1z M308.4,201.1c0.5,0,0.9-0.1,1.2-0.4c0.3-0.2,0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                s-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9
                                c-0.2,0.4-0.2,0.8-0.2,1.2s0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9S307.9,201.1,308.4,201.1z" />
                                        <path class="st4" d="M313.5,202v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                c0.5,0,0.9,0.1,1.3,0.3s0.6,0.5,0.8,0.9c0.2,0.4,0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1s-0.6-0.5-1.1-0.5
                                c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9L313.5,202L313.5,202z" />
                                    </g>
                                    <g>
                                        <g class="st3">
                                            <path class="st4" d="M212.3,337.1c-0.8,0-1.4-0.1-2-0.4s-1-0.7-1.4-1.1c-0.4-0.5-0.7-1-0.9-1.6s-0.3-1.2-0.3-1.8s0.1-1.2,0.3-1.8
                                    c0.2-0.6,0.5-1.1,0.9-1.6s0.9-0.8,1.4-1.1c0.6-0.3,1.2-0.4,2-0.4c0.6,0,1.2,0.1,1.6,0.2c0.4,0.2,0.8,0.4,1.1,0.6
                                    c0.3,0.3,0.5,0.5,0.7,0.8s0.3,0.6,0.4,0.8c0.1,0.3,0.2,0.5,0.2,0.9H215c-0.1-0.3-0.2-0.5-0.3-0.7s-0.3-0.4-0.5-0.6
                                    s-0.5-0.4-0.8-0.5s-0.8-0.2-1.3-0.2s-1,0.1-1.4,0.3c-0.4,0.2-0.7,0.5-1,0.9s-0.5,0.8-0.6,1.2s-0.2,0.9-0.2,1.4s0.1,0.9,0.2,1.4
                                    s0.3,0.8,0.6,1.2s0.6,0.6,1,0.9c0.4,0.2,0.9,0.3,1.4,0.3s0.9-0.1,1.3-0.2c0.3-0.1,0.6-0.3,0.8-0.5s0.4-0.4,0.5-0.6
                                    s0.2-0.5,0.3-0.8h1.3c-0.1,0.3-0.1,0.6-0.2,0.9c-0.1,0.3-0.2,0.5-0.4,0.8s-0.4,0.5-0.7,0.8s-0.7,0.5-1.1,0.6
                                    C213.4,337,212.9,337.1,212.3,337.1z" />
                                            <path class="st4" d="M218.1,337v-9.9h1.2v4h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                    c0.5,0,0.9,0.1,1.3,0.3c0.4,0.2,0.6,0.5,0.8,0.9s0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1c-0.3-0.3-0.6-0.5-1.1-0.5
                                    c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9h-1.3V337z" />
                                            <path class="st4" d="M228.6,330c0.4,0,0.8,0.1,1.1,0.2s0.5,0.3,0.7,0.5s0.3,0.4,0.4,0.5h0.1v-1.1h1.2v6.9h-1.2v-1.1h-0.1
                                    c-0.1,0.2-0.2,0.3-0.4,0.5s-0.4,0.4-0.7,0.5s-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.3c-0.4-0.2-0.7-0.5-1-0.8s-0.5-0.7-0.6-1.2
                                    c-0.1-0.4-0.2-0.9-0.2-1.3s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8C227.6,330.1,228,330,228.6,330z M228.8,331
                                    c-0.5,0-0.8,0.1-1.2,0.4s-0.5,0.6-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2c0,0.4,0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9
                                    c0.3,0.2,0.7,0.4,1.2,0.4s0.8-0.1,1.2-0.4c0.3-0.2,0.5-0.6,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2c0-0.4-0.1-0.8-0.2-1.2
                                    c-0.2-0.4-0.4-0.7-0.7-0.9S229.2,331,228.8,331z" />
                                            <path class="st4" d="M234,337v-9.9h1.2v9.9H234z" />
                                            <path class="st4" d="M240.5,337.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3s-0.4-1.1-0.4-1.7s0.1-1.2,0.4-1.7
                                    c0.3-0.5,0.6-1,1.1-1.3s1.1-0.5,1.9-0.5s1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7s-0.1,1.2-0.4,1.7
                                    s-0.6,1-1.1,1.3C241.8,337,241.2,337.1,240.5,337.1z M240.5,336.1c0.5,0,0.9-0.1,1.2-0.4s0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                    c0-0.4-0.1-0.8-0.2-1.2s-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9s-0.2,0.8-0.2,1.2
                                    c0,0.4,0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9S240,336.1,240.5,336.1z" />
                                            <path class="st4" d="M245.6,337v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                    c0.5,0,0.9,0.1,1.3,0.3c0.4,0.2,0.6,0.5,0.8,0.9s0.3,0.8,0.3,1.3v4.4H250v-4.4c0-0.5-0.1-0.8-0.4-1.1c-0.3-0.3-0.6-0.5-1.1-0.5
                                    c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9h-1.3V337z" />
                                            <path class="st4" d="M253.6,333.5v-1h4.8v1H253.6z" />
                                            <path class="st4" d="M263.4,337.1c-0.5,0-1-0.1-1.3-0.2s-0.6-0.3-0.8-0.6c-0.2-0.2-0.3-0.4-0.4-0.7c-0.1-0.2-0.2-0.5-0.2-0.8h1.2
                                    c0.1,0.2,0.1,0.4,0.2,0.6s0.3,0.3,0.5,0.4s0.5,0.2,0.9,0.2s0.7-0.1,0.9-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.3-0.1-0.5-0.3-0.6
                                    s-0.4-0.3-0.8-0.3l-0.9-0.2c-0.3-0.1-0.7-0.2-1-0.4c-0.3-0.1-0.5-0.3-0.7-0.6c-0.2-0.3-0.3-0.6-0.3-1c0-0.6,0.2-1.1,0.7-1.4
                                    s1-0.6,1.7-0.6c0.5,0,0.9,0.1,1.2,0.2c0.3,0.1,0.6,0.3,0.7,0.5c0.2,0.2,0.3,0.4,0.4,0.6s0.2,0.4,0.2,0.7h-1.2
                                    c-0.1-0.2-0.1-0.4-0.2-0.5s-0.2-0.2-0.4-0.3c-0.2-0.1-0.4-0.1-0.7-0.1c-0.4,0-0.7,0.1-0.9,0.3s-0.3,0.4-0.3,0.6s0.1,0.4,0.3,0.5
                                    c0.2,0.1,0.4,0.2,0.7,0.3l0.9,0.2c0.6,0.1,1.1,0.4,1.5,0.7c0.4,0.3,0.6,0.8,0.6,1.4c0,0.4-0.1,0.7-0.3,1.1
                                    c-0.2,0.3-0.5,0.6-0.9,0.8S264,337.1,263.4,337.1z" />
                                            <path class="st4" d="M269.8,337.1c-0.7,0-1.2-0.2-1.6-0.6s-0.6-1-0.6-1.8v-4.6h1.2v4.5c0,0.5,0.1,0.8,0.4,1c0.2,0.2,0.6,0.4,1,0.4
                                    s0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.5-0.8s0.2-0.7,0.2-1v-3.8h1.2v6.9h-1.2v-1h-0.1c-0.1,0.1-0.2,0.2-0.3,0.4s-0.4,0.3-0.6,0.5
                                    C270.6,337.1,270.2,337.1,269.8,337.1z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M275,337v-6.9h1.2v0.9h0.1c0.1-0.3,0.4-0.5,0.7-0.7c0.3-0.2,0.7-0.3,1.2-0.3c0.1,0,0.3,0,0.6,0v1.2
                                    c-0.3,0-0.5,0-0.6,0c-0.6,0-1.1,0.2-1.4,0.5s-0.5,0.9-0.5,1.7v3.7H275V337z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M280.7,333.5v-1h4.8v1H280.7z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M291.3,337.1c-0.6,0-1-0.1-1.4-0.2s-0.7-0.3-1-0.6c-0.3-0.2-0.5-0.5-0.6-0.7c-0.2-0.3-0.3-0.5-0.4-0.7
                                    s-0.1-0.5-0.2-0.8h1.3c0.1,0.2,0.1,0.5,0.2,0.6c0.1,0.2,0.2,0.4,0.4,0.6c0.2,0.2,0.4,0.3,0.7,0.5s0.6,0.2,1.1,0.2
                                    c0.6,0,1.1-0.2,1.5-0.5s0.6-0.7,0.6-1.2c0-0.4-0.1-0.8-0.4-1s-0.7-0.4-1.2-0.5l-1.3-0.3c-0.5-0.1-0.9-0.3-1.3-0.5
                                    s-0.7-0.5-0.9-0.8s-0.3-0.8-0.3-1.3c0-0.6,0.1-1,0.4-1.4s0.7-0.7,1.1-0.9c0.5-0.2,1-0.3,1.6-0.3s1.1,0.1,1.5,0.3
                                    c0.4,0.2,0.7,0.4,0.9,0.7c0.2,0.3,0.4,0.5,0.5,0.8s0.2,0.6,0.3,0.9h-1.2c-0.1-0.3-0.2-0.6-0.3-0.8c-0.1-0.2-0.3-0.4-0.6-0.5
                                    s-0.6-0.2-1.1-0.2c-0.6,0-1.1,0.1-1.4,0.4s-0.5,0.6-0.5,1c0,0.3,0.1,0.6,0.4,0.8c0.3,0.2,0.6,0.4,1,0.5l1.4,0.3
                                    c0.5,0.1,0.9,0.3,1.3,0.5s0.7,0.5,0.9,0.9c0.2,0.4,0.4,0.8,0.4,1.3s-0.1,1-0.4,1.4s-0.6,0.8-1.1,1.1
                                    C292.7,337,292.1,337.1,291.3,337.1z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M299.2,330c0.4,0,0.8,0.1,1.1,0.2c0.3,0.1,0.5,0.3,0.7,0.5s0.3,0.4,0.4,0.5h0.1v-1.1h1.2v6.9h-1.2v-1.1h-0.1
                                    c-0.1,0.2-0.2,0.3-0.4,0.5c-0.2,0.2-0.4,0.4-0.7,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.3c-0.4-0.2-0.7-0.5-1-0.8
                                    s-0.5-0.7-0.6-1.2c-0.1-0.4-0.2-0.9-0.2-1.3s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8
                                    C298.3,330.1,298.7,330,299.2,330z M299.5,331c-0.5,0-0.8,0.1-1.2,0.4s-0.5,0.6-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2
                                    c0,0.4,0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9c0.3,0.2,0.7,0.4,1.2,0.4s0.8-0.1,1.2-0.4c0.3-0.2,0.5-0.6,0.7-0.9
                                    c0.2-0.4,0.2-0.8,0.2-1.2c0-0.4-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9S299.9,331,299.5,331z" />
                                            <path class="st4" d="M307.9,337.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3c-0.3-0.5-0.4-1.1-0.4-1.7s0.1-1.2,0.4-1.7
                                    s0.6-1,1.1-1.3s1.1-0.5,1.9-0.5c0.7,0,1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7s-0.1,1.2-0.4,1.7s-0.6,1-1.1,1.3
                                    C309.3,337,308.7,337.1,307.9,337.1z M307.9,336.1c0.5,0,0.9-0.1,1.2-0.4s0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                    c0-0.4-0.1-0.8-0.2-1.2s-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9
                                    c-0.2,0.4-0.2,0.8-0.2,1.2c0,0.4,0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9S307.5,336.1,307.9,336.1z M305.8,329.1l1.6-2.2h1.1
                                    l1.6,2.2H309l-1-1.4l-1,1.4H305.8z" />
                                            <path class="st4" d="M313.1,337v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                    c0.5,0,0.9,0.1,1.3,0.3c0.4,0.2,0.6,0.5,0.8,0.9c0.2,0.4,0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1s-0.6-0.5-1.1-0.5
                                    c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9h-1.3V337z" />
                                            <path class="st4" d="M323.7,337.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8c-0.3-0.3-0.5-0.7-0.6-1.2
                                    c-0.1-0.4-0.2-0.9-0.2-1.3s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2s0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                    s0.8,0.7,1.1,1.2s0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                    c0.4,0,0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                    c-0.2,0.2-0.5,0.4-0.8,0.6S324.2,337.1,323.7,337.1z M321.7,333h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                    c-0.3-0.1-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5C321.9,331.9,321.7,332.4,321.7,333z" />
                                        </g>
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M343.1,294.2c-0.9,0-1.7-0.2-2.3-0.5c-0.7-0.3-1.2-0.8-1.7-1.3c-0.4-0.5-0.8-1.2-1-1.8
                                c-0.2-0.7-0.3-1.4-0.3-2.1s0.1-1.4,0.3-2.1c0.2-0.7,0.6-1.3,1-1.8s1-1,1.7-1.3s1.4-0.5,2.3-0.5c0.7,0,1.4,0.1,1.9,0.3
                                c0.5,0.2,1,0.4,1.3,0.7c0.4,0.3,0.6,0.6,0.9,0.9c0.2,0.3,0.4,0.6,0.5,0.9s0.2,0.6,0.3,1h-1.8c-0.1-0.3-0.2-0.6-0.3-0.8
                                c-0.1-0.2-0.3-0.5-0.5-0.7s-0.5-0.4-0.9-0.6s-0.8-0.2-1.4-0.2s-1.1,0.1-1.6,0.3c-0.4,0.2-0.8,0.5-1.1,0.9c-0.3,0.4-0.5,0.8-0.7,1.3
                                s-0.2,1-0.2,1.5s0.1,1,0.2,1.5s0.4,0.9,0.7,1.3c0.3,0.4,0.7,0.7,1.1,0.9c0.4,0.2,1,0.3,1.6,0.3c0.5,0,1-0.1,1.4-0.2
                                c0.4-0.2,0.7-0.3,0.9-0.6c0.2-0.2,0.4-0.5,0.5-0.7s0.2-0.5,0.3-0.8h1.8c-0.1,0.4-0.2,0.7-0.3,1c-0.1,0.3-0.3,0.6-0.5,0.9
                                s-0.5,0.7-0.9,0.9c-0.4,0.3-0.8,0.5-1.3,0.7C344.4,294.1,343.8,294.2,343.1,294.2z" />
                                        <path class="st4" d="M349.8,294v-11.1h1.8v4.7h5v-4.7h1.8V294h-1.8v-4.9h-5v4.9H349.8z" />
                                        <path class="st4" d="M365.6,294.2c-0.9,0-1.7-0.2-2.4-0.5c-0.7-0.3-1.2-0.8-1.7-1.3s-0.8-1.2-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.1
                                s0.1-1.4,0.3-2.1c0.2-0.7,0.6-1.3,1-1.8c0.5-0.5,1-1,1.7-1.3s1.5-0.5,2.4-0.5s1.7,0.2,2.4,0.5c0.7,0.3,1.2,0.8,1.7,1.3
                                s0.8,1.1,1,1.8c0.2,0.7,0.3,1.4,0.3,2.1s-0.1,1.4-0.3,2.1c-0.2,0.7-0.6,1.3-1,1.8c-0.5,0.5-1,1-1.7,1.3S366.5,294.2,365.6,294.2z
                                M365.6,292.5c0.8,0,1.5-0.2,2-0.6s0.9-0.9,1.2-1.5c0.3-0.6,0.4-1.3,0.4-2c0-0.5-0.1-1-0.2-1.5c-0.2-0.5-0.4-0.9-0.7-1.3
                                c-0.3-0.4-0.7-0.7-1.1-0.9c-0.5-0.2-1-0.3-1.6-0.3s-1.1,0.1-1.6,0.3c-0.5,0.2-0.8,0.5-1.1,0.9c-0.3,0.4-0.5,0.8-0.7,1.3
                                s-0.2,1-0.2,1.5c0,0.7,0.1,1.4,0.4,2s0.7,1.1,1.2,1.5C364.2,292.3,364.8,292.5,365.6,292.5z" />
                                        <path class="st4" d="M373,294v-11.1h1.8V294H373z" />
                                        <path class="st4" d="M380.8,294.2c-0.7,0-1.2-0.1-1.7-0.3c-0.5-0.2-0.9-0.4-1.2-0.7c-0.3-0.3-0.6-0.5-0.7-0.8
                                c-0.2-0.3-0.3-0.6-0.4-0.8c-0.1-0.3-0.2-0.6-0.2-0.9h1.8c0.1,0.3,0.1,0.5,0.2,0.7s0.2,0.4,0.4,0.6c0.2,0.2,0.4,0.4,0.7,0.5
                                c0.3,0.1,0.7,0.2,1.2,0.2c0.7,0,1.2-0.2,1.6-0.5s0.6-0.8,0.6-1.3c0-0.4-0.1-0.8-0.4-1s-0.7-0.4-1.3-0.6l-1.5-0.3
                                c-0.5-0.1-1.1-0.3-1.5-0.5c-0.5-0.2-0.8-0.6-1.1-1c-0.3-0.4-0.4-0.9-0.4-1.5c0-0.7,0.2-1.2,0.5-1.7s0.8-0.8,1.4-1.1
                                c0.6-0.3,1.2-0.4,2-0.4c0.7,0,1.3,0.1,1.8,0.3c0.5,0.2,0.8,0.5,1.1,0.8c0.3,0.3,0.5,0.6,0.6,0.9s0.2,0.7,0.3,1.1h-1.7
                                c-0.1-0.3-0.2-0.6-0.3-0.8c-0.1-0.2-0.4-0.4-0.7-0.6c-0.3-0.2-0.7-0.2-1.2-0.2c-0.7,0-1.2,0.2-1.5,0.5s-0.5,0.7-0.5,1.1
                                s0.1,0.7,0.4,0.9c0.3,0.2,0.7,0.4,1.2,0.5l1.6,0.4c0.6,0.1,1.1,0.3,1.6,0.6c0.5,0.3,0.9,0.6,1.1,1c0.3,0.4,0.4,0.9,0.4,1.6
                                c0,0.6-0.2,1.2-0.5,1.7s-0.8,0.9-1.4,1.2C382.5,294,381.7,294.2,380.8,294.2z" />
                                        <path class="st4" d="M386.7,294v-11.1h7.2v1.5h-5.5v3.2h4.8v1.5h-4.8v3.4h5.6v1.5H386.7z" />
                                        <path class="st4" d="M399.2,294v-3.9l-3.9-7.2h1.9l2.8,5.4l2.8-5.4h1.9l-3.9,7.2v3.9H399.2z" />
                                    </g>
                                    <g>
                                        <g class="st3">
                                            <path class="st4" d="M315,359v-9.6h1.3v8.5h5v1.1H315z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M325.6,359.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3s-0.4-1.1-0.4-1.7s0.1-1.2,0.4-1.7s0.6-1,1.1-1.3
                                    s1.1-0.5,1.9-0.5c0.7,0,1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7s-0.1,1.2-0.4,1.7s-0.6,1-1.1,1.3
                                    C326.9,359,326.3,359.1,325.6,359.1z M325.6,358.1c0.5,0,0.9-0.1,1.2-0.4c0.3-0.2,0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                    c0-0.4-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9
                                    s-0.2,0.8-0.2,1.2c0,0.4,0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9S325.1,358.1,325.6,358.1z" />
                                            <path class="st4" d="M330.7,359v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                    c0.5,0,0.9,0.1,1.3,0.3c0.4,0.2,0.6,0.5,0.8,0.9s0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1s-0.6-0.5-1.1-0.5
                                    c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9h-1.3V359z" />
                                            <path class="st4" d="M340.6,359.1c-0.5,0-1-0.1-1.3-0.2s-0.6-0.3-0.8-0.6s-0.3-0.4-0.4-0.7c-0.1-0.2-0.2-0.5-0.2-0.8h1.2
                                    c0.1,0.2,0.1,0.4,0.2,0.6s0.3,0.3,0.5,0.4s0.5,0.2,0.9,0.2s0.7-0.1,0.9-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.3-0.1-0.5-0.3-0.6
                                    s-0.4-0.3-0.8-0.3l-0.9-0.2c-0.3-0.1-0.7-0.2-1-0.4c-0.3-0.1-0.5-0.3-0.7-0.6c-0.2-0.3-0.3-0.6-0.3-1c0-0.6,0.2-1.1,0.7-1.4
                                    c0.4-0.4,1-0.6,1.7-0.6c0.5,0,0.9,0.1,1.2,0.2c0.3,0.1,0.6,0.3,0.7,0.5c0.2,0.2,0.3,0.4,0.4,0.6s0.2,0.4,0.2,0.7h-1.2
                                    c-0.1-0.2-0.1-0.4-0.2-0.5s-0.2-0.2-0.4-0.3s-0.4-0.1-0.7-0.1c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.3,0.4-0.3,0.6s0.1,0.4,0.3,0.5
                                    c0.2,0.1,0.4,0.2,0.7,0.3l0.9,0.2c0.6,0.1,1.1,0.4,1.5,0.7s0.6,0.8,0.6,1.4c0,0.4-0.1,0.7-0.3,1.1c-0.2,0.3-0.5,0.6-0.9,0.8
                                    C341.6,359,341.2,359.1,340.6,359.1z" />
                                            <path class="st4" d="M345.3,355.5v-1h4.8v1H345.3z" />
                                            <path class="st4" d="M352.8,359v-9.9h1.2v9.9H352.8z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M359.1,359.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8c-0.3-0.3-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                    s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4s0.8,0.7,1.1,1.2
                                    c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3c0.4,0,0.6-0.1,0.9-0.2
                                    s0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.6
                                    S359.6,359.1,359.1,359.1z M357.1,355h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6s-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5
                                    S357.1,354.4,357.1,355z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M364.7,355.5v-1h4.8v1H364.7z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M375.3,359.1c-0.6,0-1-0.1-1.4-0.2s-0.7-0.3-1-0.6c-0.3-0.2-0.5-0.5-0.6-0.7c-0.2-0.3-0.3-0.5-0.4-0.7
                                    s-0.1-0.5-0.2-0.8h1.3c0.1,0.2,0.1,0.5,0.2,0.6c0.1,0.2,0.2,0.4,0.4,0.6c0.2,0.2,0.4,0.3,0.7,0.5s0.6,0.2,1.1,0.2
                                    c0.6,0,1.1-0.2,1.5-0.5s0.6-0.7,0.6-1.2c0-0.4-0.1-0.8-0.4-1s-0.7-0.4-1.2-0.5l-1.3-0.3c-0.5-0.1-0.9-0.3-1.3-0.5
                                    s-0.7-0.5-0.9-0.8c-0.2-0.3-0.3-0.8-0.3-1.3c0-0.6,0.1-1,0.4-1.4s0.7-0.7,1.1-0.9c0.5-0.2,1-0.3,1.6-0.3s1.1,0.1,1.5,0.3
                                    c0.4,0.2,0.7,0.4,0.9,0.7c0.2,0.3,0.4,0.5,0.5,0.8s0.2,0.6,0.3,0.9h-1.2c-0.1-0.3-0.2-0.6-0.3-0.8c-0.1-0.2-0.3-0.4-0.6-0.5
                                    s-0.6-0.2-1.1-0.2c-0.6,0-1.1,0.1-1.4,0.4s-0.5,0.6-0.5,1c0,0.3,0.1,0.6,0.4,0.8c0.3,0.2,0.6,0.4,1,0.5l1.4,0.3
                                    c0.5,0.1,0.9,0.3,1.3,0.5s0.7,0.5,0.9,0.9c0.2,0.4,0.4,0.8,0.4,1.3s-0.1,1-0.4,1.4s-0.6,0.8-1.1,1.1S376.1,359.1,375.3,359.1z" />
                                        </g>
                                        <g class="st3">
                                            <path class="st4" d="M383.3,352c0.4,0,0.8,0.1,1.1,0.2s0.5,0.3,0.7,0.5s0.3,0.4,0.4,0.5h0.1v-1.1h1.2v6.9h-1.2v-1.1h-0.1
                                    c-0.1,0.2-0.2,0.3-0.4,0.5c-0.2,0.2-0.4,0.4-0.7,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.3c-0.4-0.2-0.7-0.5-1-0.8
                                    s-0.5-0.7-0.6-1.2c-0.1-0.4-0.2-0.9-0.2-1.3s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8
                                    C382.3,352.1,382.8,352,383.3,352z M383.5,353c-0.5,0-0.8,0.1-1.2,0.4c-0.3,0.2-0.5,0.6-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2
                                    c0,0.4,0.1,0.8,0.2,1.2s0.4,0.7,0.7,0.9c0.3,0.2,0.7,0.4,1.2,0.4s0.8-0.1,1.2-0.4c0.3-0.2,0.5-0.6,0.7-0.9
                                    c0.2-0.4,0.2-0.8,0.2-1.2c0-0.4-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9S383.9,353,383.5,353z" />
                                            <path class="st4" d="M390.9,359.1c-0.7,0-1.2-0.2-1.6-0.6s-0.6-1-0.6-1.8v-4.6h1.2v4.5c0,0.5,0.1,0.8,0.4,1c0.2,0.2,0.6,0.4,1,0.4
                                    s0.7-0.1,1-0.3c0.3-0.2,0.4-0.5,0.5-0.8s0.2-0.7,0.2-1v-3.8h1.2v6.9H393v-1h-0.1c-0.1,0.1-0.2,0.2-0.3,0.4s-0.4,0.3-0.6,0.5
                                    C391.7,359.1,391.3,359.1,390.9,359.1z" />
                                            <path class="st4" d="M396,359v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                    c0.5,0,0.9,0.1,1.3,0.3c0.4,0.2,0.6,0.5,0.8,0.9s0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1s-0.6-0.5-1.1-0.5
                                    c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9H396V359z" />
                                            <path class="st4" d="M404.2,350.8c-0.2,0-0.4-0.1-0.6-0.2c-0.2-0.2-0.2-0.3-0.2-0.6c0-0.2,0.1-0.4,0.2-0.6
                                    c0.2-0.2,0.3-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.2c0.2,0.2,0.2,0.3,0.2,0.6c0,0.2-0.1,0.4-0.2,0.6
                                    C404.7,350.7,404.5,350.8,404.2,350.8z M403.6,359v-6.9h1.2v6.9H403.6z" />
                                            <path class="st4" d="M410,359.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.7-0.5-1-0.8s-0.5-0.7-0.6-1.2c-0.1-0.4-0.2-0.9-0.2-1.3
                                    s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4s0.8,0.7,1.1,1.2
                                    s0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3c0.4,0,0.6-0.1,0.9-0.2
                                    c0.2-0.1,0.4-0.3,0.5-0.4c0.1-0.2,0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                    c-0.2,0.2-0.5,0.4-0.8,0.6S410.5,359.1,410,359.1z M408,355h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6s-0.6-0.2-0.9-0.2
                                    c-0.5,0-1,0.2-1.3,0.5C408.3,353.9,408.1,354.4,408,355z" />
                                            <path class="st4" d="M414.7,359v-6.9h1.2v0.9h0.1c0.1-0.3,0.4-0.5,0.6-0.7s0.7-0.3,1.2-0.3c0.1,0,0.3,0,0.6,0v1.2
                                    c-0.3,0-0.5,0-0.6,0c-0.6,0-1.1,0.2-1.4,0.5s-0.5,0.9-0.5,1.7v3.7h-1.2V359z" />
                                        </g>
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M421,218v-9.6h3.7c0.6,0,1.1,0.1,1.6,0.3c0.4,0.2,0.8,0.5,1,0.9s0.4,0.8,0.4,1.2c0,0.5-0.1,0.9-0.3,1.2
                                s-0.4,0.5-0.6,0.7s-0.4,0.3-0.5,0.3v0.1c0.2,0.1,0.4,0.2,0.7,0.3c0.3,0.2,0.5,0.4,0.7,0.7s0.3,0.7,0.3,1.2c0,0.4-0.1,0.9-0.3,1.3
                                c-0.2,0.4-0.6,0.8-1,1c-0.5,0.3-1.1,0.4-1.9,0.4L421,218L421,218z M424.7,209.5h-2.4v3.1h2.4c0.4,0,0.8-0.1,1-0.2
                                c0.3-0.1,0.4-0.3,0.6-0.6s0.2-0.5,0.2-0.7c0-0.3-0.1-0.5-0.2-0.7s-0.3-0.4-0.6-0.6C425.4,209.6,425.1,209.5,424.7,209.5z
                                M424.8,213.6h-2.5v3.3h2.5c0.5,0,0.9-0.1,1.1-0.2c0.3-0.2,0.5-0.4,0.6-0.6c0.1-0.3,0.2-0.5,0.2-0.8s-0.1-0.5-0.2-0.8
                                s-0.3-0.5-0.6-0.6C425.7,213.7,425.3,213.6,424.8,213.6z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M432.9,218.1c-0.6,0-1.1-0.1-1.5-0.3s-0.8-0.5-1-0.8c-0.3-0.3-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8s0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                c0.5,0.3,0.8,0.7,1.1,1.2c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                c0.4,0,0.6-0.1,0.9-0.2s0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                c-0.2,0.2-0.5,0.4-0.8,0.6S433.4,218.1,432.9,218.1z M430.9,214h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                s-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5S430.9,213.4,430.9,214z" />
                                        <path class="st4" d="M440,218.1c-0.5,0-1-0.1-1.3-0.2c-0.3-0.1-0.6-0.3-0.8-0.6s-0.3-0.4-0.4-0.7c-0.1-0.2-0.2-0.5-0.2-0.8h1.2
                                c0.1,0.2,0.1,0.4,0.2,0.6c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.9,0.2s0.7-0.1,0.9-0.3c0.2-0.2,0.3-0.4,0.3-0.7
                                s-0.1-0.5-0.3-0.6s-0.4-0.3-0.8-0.3l-0.9-0.2c-0.3-0.1-0.7-0.2-1-0.4c-0.3-0.1-0.5-0.3-0.7-0.6s-0.3-0.6-0.3-1
                                c0-0.6,0.2-1.1,0.7-1.4c0.4-0.4,1-0.6,1.7-0.6c0.5,0,0.9,0.1,1.2,0.2c0.3,0.1,0.6,0.3,0.7,0.5c0.2,0.2,0.3,0.4,0.4,0.6
                                s0.2,0.4,0.2,0.7H441c-0.1-0.2-0.1-0.4-0.2-0.5s-0.2-0.2-0.4-0.3s-0.4-0.1-0.7-0.1c-0.4,0-0.7,0.1-0.9,0.3
                                c-0.2,0.2-0.3,0.4-0.3,0.6c0,0.2,0.1,0.4,0.3,0.5c0.2,0.1,0.4,0.2,0.7,0.3l0.9,0.2c0.6,0.1,1.1,0.4,1.5,0.7s0.6,0.8,0.6,1.4
                                c0,0.4-0.1,0.7-0.3,1.1c-0.2,0.3-0.5,0.6-0.9,0.8C441,218,440.6,218.1,440,218.1z" />
                                        <path class="st4" d="M447,211c0.4,0,0.8,0.1,1.1,0.2s0.5,0.3,0.7,0.5s0.3,0.4,0.4,0.5h0.1v-1.1h1.2v6.9h-1.2v-1.1h-0.1
                                c-0.1,0.2-0.2,0.3-0.4,0.5c-0.2,0.2-0.4,0.4-0.7,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.3s-0.7-0.5-1-0.8
                                s-0.5-0.7-0.6-1.2c-0.1-0.4-0.2-0.9-0.2-1.3c0-0.4,0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8
                                C446,211.1,446.5,211,447,211z M447.2,212c-0.5,0-0.8,0.1-1.2,0.4c-0.3,0.2-0.5,0.6-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2
                                s0.1,0.8,0.2,1.2s0.4,0.7,0.7,0.9c0.3,0.2,0.7,0.4,1.2,0.4s0.8-0.1,1.2-0.4c0.3-0.2,0.5-0.6,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                s-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9S447.6,212,447.2,212z" />
                                        <path class="st4" d="M452.3,218v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                c0.5,0,0.9,0.1,1.3,0.3s0.6,0.5,0.8,0.9c0.2,0.4,0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1s-0.6-0.5-1.1-0.5
                                c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9L452.3,218L452.3,218z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M462.9,221.4c-0.2,0-0.5,0-0.9-0.1v-0.8c0.4,0.1,0.7,0.1,0.9,0.1c0.4,0,0.6-0.1,0.8-0.2
                                c0.1-0.1,0.2-0.3,0.2-0.4s-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.2-0.5-0.2s-0.5,0.1-0.7,0.2l-0.5-0.5l0.7-1.1c-0.7-0.1-1.2-0.3-1.6-0.7
                                s-0.7-0.8-1-1.3c-0.2-0.5-0.3-1-0.3-1.6c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1.1-0.8
                                c0.4-0.2,0.9-0.3,1.5-0.3s1,0.1,1.4,0.2c0.4,0.2,0.7,0.4,0.9,0.6s0.4,0.5,0.5,0.7s0.2,0.5,0.3,0.9h-1.2c-0.1-0.3-0.2-0.5-0.3-0.7
                                c-0.1-0.2-0.3-0.3-0.5-0.5c-0.2-0.1-0.6-0.2-1-0.2c-0.5,0-0.9,0.1-1.2,0.4s-0.6,0.5-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2
                                s0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9c0.3,0.2,0.7,0.4,1.2,0.4c0.4,0,0.7-0.1,1-0.2c0.2-0.1,0.4-0.3,0.5-0.5s0.2-0.4,0.3-0.7
                                h1.2c-0.1,0.3-0.1,0.6-0.2,0.8s-0.2,0.5-0.4,0.7c-0.2,0.2-0.4,0.4-0.8,0.6c-0.3,0.2-0.7,0.3-1.2,0.3l-0.4,0.7
                                c0.1,0,0.2-0.1,0.4-0.1c0.4,0,0.7,0.1,0.9,0.4c0.2,0.3,0.3,0.5,0.3,0.9c0,0.2-0.1,0.4-0.2,0.7c-0.1,0.2-0.3,0.4-0.6,0.5
                                C463.7,221.3,463.4,221.4,462.9,221.4z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M471.1,218.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3c-0.3-0.5-0.4-1.1-0.4-1.7c0-0.6,0.1-1.2,0.4-1.7
                                s0.6-1,1.1-1.3s1.1-0.5,1.9-0.5c0.7,0,1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7c0,0.6-0.1,1.2-0.4,1.7
                                s-0.6,1-1.1,1.3C472.4,218,471.8,218.1,471.1,218.1z M471.1,217.1c0.5,0,0.9-0.1,1.2-0.4s0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                s-0.1-0.8-0.2-1.2s-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2
                                s0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9C470.2,216.9,470.6,217.1,471.1,217.1z" />
                                        <path class="st4" d="M476.1,218v-6.9h1.2v1h0.1c0.1-0.1,0.2-0.2,0.3-0.4c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.6-0.2,1-0.2
                                c0.5,0,0.9,0.1,1.3,0.3s0.6,0.5,0.8,0.9c0.2,0.4,0.3,0.8,0.3,1.3v4.4h-1.2v-4.4c0-0.5-0.1-0.8-0.4-1.1s-0.6-0.5-1.1-0.5
                                c-0.4,0-0.7,0.1-0.9,0.3c-0.2,0.2-0.4,0.5-0.5,0.8s-0.2,0.7-0.2,1v3.9L476.1,218L476.1,218z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M386,269v-9.6h3.1c0.8,0,1.4,0.1,2,0.4s1,0.6,1.4,1.1s0.7,1,0.9,1.5c0.2,0.6,0.3,1.2,0.3,1.8
                                c0,0.6-0.1,1.2-0.3,1.8c-0.2,0.6-0.5,1.1-0.9,1.5c-0.4,0.5-0.9,0.8-1.4,1.1c-0.6,0.3-1.2,0.4-2,0.4L386,269L386,269z M389.1,260.5
                                h-1.8v7.4h1.8c0.6,0,1.1-0.1,1.5-0.3c0.4-0.2,0.8-0.5,1.1-0.8s0.5-0.7,0.6-1.2s0.2-0.9,0.2-1.4s-0.1-0.9-0.2-1.4
                                c-0.1-0.4-0.3-0.8-0.6-1.2s-0.6-0.6-1.1-0.8C390.2,260.6,389.7,260.5,389.1,260.5z" />
                                        <path class="st4" d="M398.6,269.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3c-0.3-0.5-0.4-1.1-0.4-1.7s0.1-1.2,0.4-1.7
                                s0.6-1,1.1-1.3s1.1-0.5,1.9-0.5s1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7s-0.1,1.2-0.4,1.7s-0.6,1-1.1,1.3
                                C400,269,399.4,269.1,398.6,269.1z M398.6,268.1c0.5,0,0.9-0.1,1.2-0.4c0.3-0.2,0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                c0-0.4-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9
                                c-0.2,0.4-0.2,0.8-0.2,1.2c0,0.4,0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9S398.2,268.1,398.6,268.1z" />
                                        <path class="st4" d="M403.8,269v-9.9h1.2v9.9H403.8z" />
                                        <path class="st4" d="M410.2,269.1c-0.6,0-1.1-0.1-1.5-0.3c-0.4-0.2-0.8-0.5-1-0.8s-0.5-0.7-0.6-1.2c-0.1-0.4-0.2-0.9-0.2-1.3
                                s0.1-0.9,0.2-1.3s0.3-0.8,0.6-1.2s0.6-0.6,1-0.8c0.4-0.2,0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4s0.8,0.7,1.1,1.2s0.4,1.2,0.4,2v0.4
                                h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3c0.4,0,0.6-0.1,0.9-0.2c0.2-0.1,0.4-0.3,0.5-0.4
                                c0.1-0.2,0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7c-0.2,0.2-0.5,0.4-0.8,0.6
                                S410.7,269.1,410.2,269.1z M408.2,265h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6s-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5
                                C408.4,263.9,408.2,264.4,408.2,265z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M451,164v-9.6h3.7c0.6,0,1.1,0.1,1.6,0.3c0.4,0.2,0.8,0.5,1,0.9s0.4,0.8,0.4,1.2c0,0.5-0.1,0.9-0.3,1.2
                                s-0.4,0.5-0.6,0.7s-0.4,0.3-0.5,0.3v0.1c0.2,0.1,0.4,0.2,0.7,0.3c0.3,0.2,0.5,0.4,0.7,0.7s0.3,0.7,0.3,1.2c0,0.4-0.1,0.9-0.3,1.3
                                c-0.2,0.4-0.6,0.8-1,1c-0.5,0.3-1.1,0.4-1.9,0.4L451,164L451,164z M454.7,155.5h-2.4v3.1h2.4c0.4,0,0.8-0.1,1-0.2
                                c0.3-0.1,0.4-0.3,0.6-0.6s0.2-0.5,0.2-0.7c0-0.3-0.1-0.5-0.2-0.7s-0.3-0.4-0.6-0.6C455.4,155.6,455.1,155.5,454.7,155.5z
                                M454.8,159.6h-2.5v3.3h2.5c0.5,0,0.9-0.1,1.1-0.2c0.3-0.2,0.5-0.4,0.6-0.6c0.1-0.3,0.2-0.5,0.2-0.8s-0.1-0.5-0.2-0.8
                                s-0.3-0.5-0.6-0.6C455.7,159.7,455.3,159.6,454.8,159.6z" />
                                        <path class="st4" d="M462.7,157c0.4,0,0.8,0.1,1.1,0.2s0.5,0.3,0.7,0.5s0.3,0.4,0.4,0.5h0.1v-1.1h1.2v6.9H465v-1.1h-0.1
                                c-0.1,0.2-0.2,0.3-0.4,0.5c-0.2,0.2-0.4,0.4-0.7,0.5c-0.3,0.1-0.7,0.2-1.1,0.2c-0.5,0-1-0.1-1.4-0.3s-0.7-0.5-1-0.8
                                s-0.5-0.7-0.6-1.2c-0.1-0.4-0.2-0.9-0.2-1.3c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8
                                C461.7,157.1,462.1,157,462.7,157z M462.9,158c-0.5,0-0.8,0.1-1.2,0.4s-0.5,0.6-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2s0.1,0.8,0.2,1.2
                                c0.2,0.4,0.4,0.7,0.7,0.9c0.3,0.2,0.7,0.4,1.2,0.4s0.8-0.1,1.2-0.4c0.3-0.2,0.5-0.6,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                s-0.1-0.8-0.2-1.2c-0.2-0.4-0.4-0.7-0.7-0.9C463.7,158.2,463.3,158,462.9,158z" />
                                        <path class="st4" d="M468,164v-6.9h1.2v0.9h0.1c0.1-0.3,0.4-0.5,0.7-0.7c0.3-0.2,0.7-0.3,1.2-0.3c0.1,0,0.3,0,0.6,0v1.2
                                c-0.3,0-0.5,0-0.6,0c-0.6,0-1.1,0.2-1.4,0.5s-0.5,0.9-0.5,1.7v3.7L468,164L468,164z" />
                                        <path class="st4" d="M476,164.1c-0.7,0-1.2-0.2-1.6-0.5s-0.5-0.9-0.5-1.5v-3.9h-1.2v-1h1.2v-1.7h1.2v1.7h1.7v1h-1.7v3.9
                                c0,0.3,0.1,0.6,0.3,0.8s0.5,0.2,0.8,0.2c0.2,0,0.5,0,0.8-0.1v1.1C476.7,164.1,476.3,164.1,476,164.1z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M388.8,184l-3.4-9.6h1.4l2.8,8.2l2.8-8.2h1.4l-3.4,9.6H388.8z" />
                                    </g>
                                    <g class="st3">
                                        <path class="st4" d="M397.2,184.1c-0.6,0-1.1-0.1-1.5-0.3s-0.8-0.5-1-0.8c-0.3-0.3-0.5-0.7-0.6-1.2s-0.2-0.9-0.2-1.3
                                c0-0.4,0.1-0.9,0.2-1.3c0.1-0.4,0.3-0.8,0.6-1.2c0.3-0.3,0.6-0.6,1-0.8s0.9-0.3,1.4-0.3c0.6,0,1.1,0.1,1.6,0.4
                                c0.5,0.3,0.8,0.7,1.1,1.2c0.3,0.5,0.4,1.2,0.4,2v0.4h-5c0,0.4,0.1,0.7,0.3,1.1c0.2,0.3,0.4,0.6,0.7,0.8c0.3,0.2,0.6,0.3,1.1,0.3
                                c0.4,0,0.6-0.1,0.9-0.2s0.4-0.3,0.5-0.4s0.2-0.4,0.3-0.6h1.2c-0.1,0.3-0.2,0.6-0.3,0.8c-0.1,0.2-0.3,0.4-0.5,0.7
                                c-0.2,0.2-0.5,0.4-0.8,0.6S397.7,184.1,397.2,184.1z M395.2,180h3.8c0-0.5-0.1-0.8-0.3-1.1c-0.2-0.3-0.4-0.5-0.7-0.6
                                s-0.6-0.2-0.9-0.2c-0.5,0-1,0.2-1.3,0.5S395.3,179.4,395.2,180z" />
                                        <path class="st4" d="M404.4,184.1c-0.5,0-1-0.1-1.3-0.2c-0.3-0.1-0.6-0.3-0.8-0.6s-0.3-0.4-0.4-0.7c-0.1-0.2-0.2-0.5-0.2-0.8h1.2
                                c0.1,0.2,0.1,0.4,0.2,0.6c0.1,0.2,0.3,0.3,0.5,0.4c0.2,0.1,0.5,0.2,0.9,0.2s0.7-0.1,0.9-0.3c0.2-0.2,0.3-0.4,0.3-0.7
                                s-0.1-0.5-0.3-0.6s-0.4-0.3-0.8-0.3l-0.9-0.2c-0.3-0.1-0.7-0.2-1-0.4c-0.3-0.1-0.5-0.3-0.7-0.6s-0.3-0.6-0.3-1
                                c0-0.6,0.2-1.1,0.7-1.4c0.4-0.4,1-0.6,1.7-0.6c0.5,0,0.9,0.1,1.2,0.2c0.3,0.1,0.6,0.3,0.7,0.5c0.2,0.2,0.3,0.4,0.4,0.6
                                s0.2,0.4,0.2,0.7h-1.2c-0.1-0.2-0.1-0.4-0.2-0.5s-0.2-0.2-0.4-0.3s-0.4-0.1-0.7-0.1c-0.4,0-0.7,0.1-0.9,0.3
                                c-0.2,0.2-0.3,0.4-0.3,0.6c0,0.2,0.1,0.4,0.3,0.5c0.2,0.1,0.4,0.2,0.7,0.3l0.9,0.2c0.6,0.1,1.1,0.4,1.5,0.7s0.6,0.8,0.6,1.4
                                c0,0.4-0.1,0.7-0.3,1.1c-0.2,0.3-0.5,0.6-0.9,0.8C405.4,184,404.9,184.1,404.4,184.1z" />
                                        <path class="st4" d="M411.6,184.1c-0.7,0-1.4-0.2-1.9-0.5s-0.9-0.8-1.1-1.3c-0.3-0.5-0.4-1.1-0.4-1.7c0-0.6,0.1-1.2,0.4-1.7
                                s0.6-1,1.1-1.3s1.1-0.5,1.9-0.5c0.7,0,1.4,0.2,1.9,0.5s0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.1,0.4,1.7c0,0.6-0.1,1.2-0.4,1.7
                                s-0.6,1-1.1,1.3C413,184,412.3,184.1,411.6,184.1z M411.6,183.1c0.5,0,0.9-0.1,1.2-0.4s0.6-0.5,0.7-0.9c0.2-0.4,0.2-0.8,0.2-1.2
                                s-0.1-0.8-0.2-1.2s-0.4-0.7-0.7-0.9c-0.3-0.2-0.7-0.4-1.2-0.4s-0.8,0.1-1.2,0.4c-0.3,0.2-0.6,0.5-0.7,0.9c-0.2,0.4-0.2,0.8-0.2,1.2
                                s0.1,0.8,0.2,1.2c0.2,0.4,0.4,0.7,0.7,0.9C410.7,182.9,411.1,183.1,411.6,183.1z" />
                                        <path class="st4" d="M418.9,184.1c-0.7,0-1.2-0.2-1.6-0.6s-0.6-1-0.6-1.8v-4.6h1.2v4.5c0,0.5,0.1,0.8,0.4,1c0.2,0.2,0.6,0.4,1,0.4
                                s0.8-0.1,1-0.3s0.4-0.5,0.5-0.8s0.2-0.7,0.2-1v-3.8h1.2v6.9H421v-1h-0.1c-0.1,0.1-0.2,0.2-0.3,0.4c-0.1,0.2-0.4,0.3-0.6,0.5
                                C419.7,184.1,419.4,184.1,418.9,184.1z" />
                                        <path class="st4" d="M424.2,184v-9.9h1.2v9.9H424.2z" />
                                    </g>
                                    <a href="https://goo.gl/maps/PKj37bD4RBA2EQLL7" id="contact_link" target="_blank">
                                        <g id="location" transform="translate(351 243)">
                                            <g transform="translate(0 .909)">
                                                <path class="st2" d="M24.3,4.3C21.6,1.6,18,0.1,14.2,0.1S6.8,1.6,4.1,4.3C1.5,6.9,0,10.5,0,14.3s1.5,7.4,4.2,10.1l9.3,9.4
                                        c0.2,0.2,0.4,0.3,0.7,0.3s0.5-0.1,0.7-0.3l9.3-9.4c2.7-2.7,4.2-6.3,4.2-10.1S27,6.9,24.3,4.3" />
                                            </g>
                                            <path class="st1" d="M22.7,12.5l-1.3-1.1V7.9H19v1.5l-3.9-3.3c-0.2-0.2-0.4-0.3-0.7-0.3h-0.1h-0.1c-0.2,0-0.5,0.1-0.6,0.3L6,12.4
                                    c-0.5,0.4-0.6,1.1-0.1,1.6c0.4,0.5,1.1,0.5,1.6,0.1l6.9-5.7l6.9,5.8c0.5,0.4,1.2,0.3,1.6-0.1C23.3,13.6,23.2,12.9,22.7,12.5
                                    M14.3,13.4c3,0,5.4,2.5,5.4,5.5s-2.4,5.5-5.4,5.5s-5.4-2.5-5.4-5.5S11.3,13.4,14.3,13.4" />
                                        </g>
                                    </a>
                                    <g transform="translate(438 248)">
                                        <circle class="st1" cx="105" cy="105" r="105" />
                                        <g transform="translate(25 31)">
                                            <path class="st5" d="M2.6,49.3C2.3,49.9,2.5,49.9,2.6,49.3" />
                                            <path class="st5" d="M75.1,32.2c0-0.2,0-0.4,0.1-0.6C75.1,31.8,75.1,32,75.1,32.2 M56.5,66.5c0.2-0.2-0.5-1.8,0.2-2.8
                                    C56,64.7,56.7,66.3,56.5,66.5 M56.3,66.4c-0.1-0.1-0.2-0.3-0.4-0.4C56.3,66.3,56.6,66.6,56.3,66.4 M146.8,34.8
                                    c-1.8,0.6-2.1-0.6-3.6-0.7c-2.1-1.8-0.6-2.3-3.1-0.4c-0.7-0.3-2-0.5-2.8-0.2c-0.3-0.6-1.3-2.3-2.3-1.5c-0.5,4.2-3.3-3.3-4.1-4
                                    c-4.3-0.2-1.3-1.8-6.4-0.4c-1.1-0.5-1.3-1.6-2.4-0.9c-1.2-0.4-1-0.4-1.7,0.4c-0.6-0.7-1-0.4-1.8-0.4c-0.3-2.5-1.5-0.4-1.8-2.9
                                    c-2.4,0.3-2-0.8-3.4-1.7c-1.9,0.9-1.8-0.6-1.3-1.8c-0.7-0.5-1.1-1.2-0.6-2.2c1.9-2.3-1-3-1.7-1c-0.3,2.2-1.8,3.1-4,2.6
                                    c-1.9-0.3-2.3-1.4-1.4-2.7c-1.6-0.4-0.8-1.7-0.2-2.4c-0.9-2-4.7-2-6.2-1.4c0.3-2.9-2.1-3.3-4.3-3.3c-1.7-2.4-0.2-7.8-5-3
                                    c-0.8-0.5-1.3-2.1-3.2-1.9c-0.5-0.4,0.4-3.7-0.8-4.5c-0.6-0.3-1.5,0.2-2,0.5C79,3,76,1.5,74.5,3.8c-2.8,6.5,1,12.6-4.8,15.3
                                    c-2.7,1.6-10.2,0.8-12.3,4.7c0.6,1.2-1,2.4-1.2,2.9c0.7,1.3,5.3,0.6,5.1,0.7c-0.1,0.9-3.8,1.2-4.6,1.4c-1.9,0.5-2,1.6-3.4,1.7
                                    c-1.9-0.8-4.1-1.3-6.6-1c-1.9-0.3-3.3-1.2-3.7-0.7c-0.1,1.6-1.8,0.8-1-0.5c0-1-1.6-1.3-1.7-2.4c1.2-2.1,0.9-3.2-1.9-2.5
                                    c-2.4,3.5-7.3-3.4-4.2,1.8c-1.5,1.7,0.5,1.6,0.4,3.7c1.4,0.5,1.9,1.3,2.3,3.1c1.5,3.8-1.8,7.4,2.9,9.2c-0.2,1.1-5.6,1.6-6,0.4
                                    c0.3-1.3-0.8-1.7-1.6-0.6c-0.4,0.8,0.4,2,0.3,2s-0.6-1.5-1.3-1.6c-1.8,1.6-1.6,0.7-3.3-0.4c-5.9,4.6-2.7,2.4-7.9-2.5
                                    c-4.1-2.4-6.8-1.8-6.7,2.3c-2.4,0.3-4.3-1.6-8.7,0.5C0,42.2-0.2,42.7,0,46.4c1.1,0.8,0.9-0.8,2.1,0c0.2-0.2,2.5-1.3,2.6-0.9
                                    C4,46.1,3.5,47,5.4,46.7C9,47.2,2.9,48.4,3,46.6c-0.6,0-1.2,0.8-0.3,1.3C3,48.5,3,48.9,3,49.1c0.1-0.1,0.2-0.4,0.5-0.8
                                    c1.1-0.6,2.5,0.9,1.9,2c-0.4,1.5-6.9-0.1-4.1,1.6c6.9,0,0.5,4.6,5.9,3.4C8,53.8,7.7,54.4,8.8,55c1.1-1.9,0.3-1.7,2,0.3
                                    c1.9,1.5,3.7-0.6,4.4,1.7c2-0.8,4.1,1.9,5.2,2.5c0.7-0.4,3.1-2,3.8-0.6c0.3,1.4-2,0.7-2.2,0.6c0.1,0.9,0.8,1.1,2.1,0.9
                                    c3.1-0.7,4.6,1.2,1.9,2c-0.3,0.8,2.2,3.1,3.3,2.6c0.5-0.9,2.4-2.6,3.4-1.5c1.3,2.3-3.7-0.6-2.8,3c0.6,0.8,2.3,0.7,2.2,2.5
                                    c-3.6,4.3,1.9,4,2.5,8c0.5,1.3,2.7,1.6,3.7,2c0.5,1,0.5,1.2,1.6,1c1.6,1.5,0.8,1.4,2.4,0.2c1.3,0.8-0.3,2.1-0.5,2.8
                                    c0.4,1.3,2.3,1.9,1,4.2c-1.1,0.7,0,2.4,0.2,2.7c-0.1-0.1-0.9-0.7-1.3-0.4c-1.5,2.8,4.1,2.5,5.1,5.2c0.7,1.2,0.2,6.9,2.4,7.7
                                    c-0.1,0.1-0.7,0.1-1.2-0.2c-1.4-0.6-1.6-5.5-2-5.7c-5.9-6.3-3.7,2.7-4.6,6.2c-0.2,2.8-0.7,4.7-0.6,5.9c0.5-2.2,2.5-3,2.4,0
                                    c-2-0.4-2.1,0.6-2.1,3.2c-0.7,3.8-1.2,13.3-2.5,15.3c-0.9,3.5-5.2,1.8-2.9,4c1.9-0.5,0.1,1.4,1.8,1c-0.1-2.3,3.1-0.3,2.3,1.3
                                    c-1.2,1.3-1.8,2.4,0.4,2.3c0.5-0.3,0.3-1.4,0.5-1.4c0.3,1.1,1.2,1.2,2.6,1.7c2.7,3.3,3.5-1.7,3.9,1.9c2.9,6.1,2.5-2.5,8.5,3.9
                                    c1.9-0.3,2.1-1.9,3.3,0.2c0.6,0.3,1-0.3,2.1-0.5c1.6-0.3,3.2,1,2.6-0.4c-1.1-3.5,1.5-2.4,3.1-1c1.4,0.1,2-0.2,2.4,1.2
                                    c2.1,0.4,2.5-0.5,3.4,1.9c1.5-2.4,4.4-0.7,3.3,1.7c0.4-0.2,1.5,0.4,2,0.6c2.7-0.3-1.4,0.7,1.6,2.1c3.3-4.8,4.5,2,7.6,0.3
                                    c-0.7-1.7,1.6-2.7,3.4-2.3c1,0,2-0.1,2-0.1c-0.4-1.8-2.5-10.2,1.3-12.9c6.6-0.5,3.9-9.3,13.5-3.4c1.5-4.3,2.4-1,1.2,1.2
                                    c0.8,1.3,4.9,1.5,3.9-0.9c2.4,0.1,1.7,0.4,1.8-2c0.4-0.3,1.8,0.2,2,1.1c0.3,2.2-4.6,1.9-0.7,2.6c2.3-1.6,2.5,0,2.1,1.7
                                    c0.2,0.3,0.9-0.3,1.7,0c0.7,0.7,1.7,0.4,2.2,0.4c0.2,0.2,0,0.4,0.2,0.7c0.3,0.3,0.9,0.1,1,0.3c-0.3,1.3,1.3,2,1.6,0.3
                                    c1.7-1.2,3.1,2.7,2.8,0.1c0.4-1.2,2.1,0.1,2.4,0c-0.2-2.6,4.1,0.2,4.1-2.3c-2.5-1.8-0.4,0.1,0.4-3c3.6-0.4,0.3-1.8,4-2.5
                                    c0.1-2.9,3.9-2.3,5-3.9c-1.1-2.6,1.6-3.8,2.1-4.8c-3-1.3,2.3-2.4-4.5-0.8c-2.3,0-5.1-2.8-5-4.2c1-1.2-0.2-1.8-0.5-2.6
                                    c2.7-1.4,0-2.3,2.6-2.3c-0.4-1.1-0.4-3.5-2.2-3.2c-1.6-0.1-1.6-1.5-1.4-2.7c-2.2-0.2-2.3-2.6,0.1-2.5c2.5,1.7,0.9-0.4,3.2-0.7
                                    c1.7-0.5,0.3-2.1,1.2-3.8c-1.3-1.5-2.1-0.9-1.7-3.3c-1.2-0.4-3.4-2-2.4-3.5c0.5-0.6,1.6,0.1,2.3-0.6c1.2-1.5,0.1-2.9-1.3-3.3
                                    c0.3-1.3-0.3-1-1.2-1.5c0.1-1.3,1.1-2.1-0.3-3.5c0.9-0.1,0.8-0.7,0-1.4c-0.2-0.9-5.9,0.5-6.2,1.4c2.4,4.2-4,5.6-3,2.7
                                    c3.9-1,0.1-5,2.4-7c4.1-2.5,2.9-1.2,3.6-5.5c3.8-1.7,1.1-1.7,3.6-3.2c1.9-1.1,1.6-0.7,2-2.2c1.7-2.6,0.8-1.4-0.9-1.5
                                    c4.1-5.5,2.5,0.4,5.6-0.9c0.7-0.3,0.5-0.8,1.6-1.7c1.4-1,1.3-1.2,0.4-2.5c-1.1-2.1,2.4-5.1,0.2-6.6c0-2.2,2.7-6,3.3-9.3
                                    c2.1-4.2,2.2-0.3,4.2-5.9C149.4,36.2,148,35,146.8,34.8" />
                                        </g>
                                        <path class="st1" d="M150.1,96.5c0,3-2.5,5.5-5.5,5.5s-5.5-2.5-5.5-5.5s2.5-5.5,5.5-5.5S150.1,93.4,150.1,96.5" />
                                        <path class="st6" d="M153,96.5c0,4.7-3.8,8.5-8.5,8.5s-8.5-3.8-8.5-8.5s3.8-8.5,8.5-8.5S153,91.8,153,96.5" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="container-footer-bottom-links">
                        <ul>
                            <li>
                                <a href="politique-de-confidentialite.html">Politique de confidentialité</a>
                            </li>
                            <li>
                                <a href="mentions-legales.html">Mentions légales</a>
                            </li>
                            <li>
                                <a href="https://www.koredge.fr" target="_blank" class="koredge-link">
                                    <svg class="icon">
                                        <use xlink:href="./assets/images/sprite.svg#k"></use>
                                    </svg>
                                    <span>Réalisation Koredge</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>

        </div>
@stop