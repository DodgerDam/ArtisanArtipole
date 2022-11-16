@extends('base')
@section('content')
        <div class="site-content main" data-aos="fade">

            <section class="section-bandeau section-bandeau__actualites">
                <figure>
                    <img data-src="/assets/images/bandeaux/inspirations.jpg" width="1920" height="550" alt="" uk-img/>
                </figure>
                <div class="uk-position-center">
                    <div id="breadcrumb">
                        <div class="uk-container">
                            <ul class="uk-breadcrumb">
                                <li>
                                    <a href="/" class="home">Accueil</a>
                                </li>
                                <li class="uk-disabled">
                                    <a href="#">Inspirations</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <h1>Inspirations</h1>
                </div>
            </section>

            <section class="section-switcher-inspirations">
                <div class="uk-container">
                    <div class="uk-subnav uk-subnav-pill"
                         uk-switcher="connect:#switcher-inspiration-content; animation: uk-animation-fade">
                        <p class="title">Choisissez une catégorie</p>
                        @foreach($metiers as $metier)
                            @if($metier->id != 6)
                                <div>
                                    <button type="button" class="button-cat-inspiration">{{ $metier->nom }}</button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="uk-switcher uk-margin" id="switcher-inspiration-content">
                    <div class="container-photos-inspirations" uk-lightbox>
                        <div class="items-imgs">
                            @foreach($randInspirations as $inspiration)
                                @if( $loop->index == 1)
                                    <div class="items-imgs__photo items-imgs__photo__1" data-aos="fade-up">
                                        <a data-type="image" href="{{ $inspiration->images }}"
                                           data-caption="{{ $inspiration->legende }}">
                                            <figure>
                                                <img data-src="{{ $inspiration->images }}" width="735" height="490"
                                                     alt="balise alt de l'image" uk-img/>
                                            </figure>
                                        </a>
                                    </div>
                                @elseif( $loop->index <= 5)
                                    <div class="items-imgs__photo" data-aos="fade-down-right" data-aos-delay="200">
                                        <a data-type="image" href="{{ $inspiration->images }}"
                                           data-caption="{{ $inspiration->legende }}">
                                            <figure>
                                                <img data-src="{{ $inspiration->images }}" width="401" height="600"
                                                     alt="balise alt de l'image" uk-img/>
                                            </figure>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="items-imgs-txt">
                            @foreach($randInspirations as $inspiration)
                                @if($loop->index > 5 AND $loop->index <= 10)
                                    @if($loop->index == 6)
                                        <div class="uk-width-1-1 uk-width-1-2@m container-imgs">
                                            @foreach($randInspirations as $inspiration)
                                                @if($loop->index > 5 AND $loop->index <= 9)
                                                    <div class="items-imgs__photo" data-aos="fade-up">
                                                        <a data-type="image" href="{{ $inspiration->images }}"
                                                           data-caption="{{ $inspiration->legende }}">
                                                            <figure>
                                                                <img data-src="{{ $inspiration->images }}" width="735"
                                                                     height="490"
                                                                     alt="balise alt de l'image" uk-img/>
                                                            </figure>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    @endif
                                    @if($loop->index == 10)
                                        <div class="uk-width-1-1 uk-width-1-2@m container-txt">
                                            <div class="content">
                                                <figure class="quote">
                                                    <img data-src="/assets/images/quote-black.svg" width="86"
                                                         height="63" alt=""
                                                         uk-img/>
                                                </figure>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo ligula
                                                    eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
                                                    parturient
                                                    montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                        <div class="items-imgs">
                            @foreach($randInspirations as $inspiration)
                                @if($loop->index > 10 AND $loop->index <= 15)
                                    @if($loop->index == 11)
                                        <div class="items-imgs__photo items-imgs__photo__1" data-aos="fade-up">
                                            <a data-type="image" href="{{ $inspiration->images }}"
                                               data-caption="{{ $inspiration->legende }}">
                                                <figure>
                                                    <img data-src="{{ $inspiration->images }}" width="735" height="490"
                                                         alt="balise alt de l'image" uk-img/>
                                                </figure>
                                            </a>
                                        </div>
                                    @else
                                        <div class="items-imgs__photo" data-aos="fade-down-right" data-aos-delay="200">
                                            <a data-type="image" href="{{ $inspiration->images }}"
                                               data-caption="{{ $inspiration->legende }}">
                                                <figure>
                                                    <img data-src="{{ $inspiration->images }}" width="401" height="600"
                                                         alt="balise alt de l'image" uk-img/>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                    @foreach($randInspirations as $inspiration)
                        <div class="container-photos-inspirations" id="{{ $inspiration->nom }}" uk-lightbox>
                            <div class="items-imgs">

                                @if($loop->index <= 5)
                                    @if($loop->index == 1)
                                        <div class="items-imgs__photo items-imgs__photo__1" data-aos="fade-up">
                                            <a data-type="image" href="{{ $inspiration->images }}"
                                               data-caption="{{ $inspiration->legende }}">
                                                <figure>
                                                    <img data-src="{{ $inspiration->images }}" width="735"
                                                         height="490"
                                                         alt="balise alt de l'image" uk-img/>
                                                </figure>
                                            </a>
                                        </div>
                                    @else
                                        <div class="items-imgs__photo" data-aos="fade-down-right"
                                             data-aos-delay="200">
                                            <a data-type="image" href="{{ $inspiration->images }}"
                                               data-caption="{{ $inspiration->legende }}">
                                                <figure>
                                                    <img data-src="{{ $inspiration->images }}" width="401"
                                                         height="600"
                                                         alt="balise alt de l'image" uk-img/>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif
                                @endif

                            </div>
                            <div class="items-imgs-txt">

                                @if($loop->index > 5 AND $loop->index <= 10)
                                    @if($loop->index == 6)

                                        <div class="uk-width-1-1 uk-width-1-2@m container-imgs">

                                            @if($loop->index > 5 AND $loop->index <= 9)
                                                <div class="items-imgs__photo" data-aos="fade-up">
                                                    <a data-type="image" href="{{ $inspiration->images }}"
                                                       data-caption="{{ $inspiration->legende }}">
                                                        <figure>
                                                            <img data-src="{{ $inspiration->images }}"
                                                                 width="735" height="490"
                                                                 alt="balise alt de l'image" uk-img/>
                                                        </figure>
                                                    </a>
                                                </div>
                                            @endif

                                        </div>
                                    @endif
                                    @if($loop->index == 10)
                                        <div class="uk-width-1-1 uk-width-1-2@m container-txt">
                                            <div class="content">
                                                <figure class="quote">
                                                    <img data-src="/assets/images/quote-black.svg" width="86"
                                                         height="63" alt=""
                                                         uk-img/>
                                                </figure>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                                                    commodo
                                                    ligula
                                                    eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                                                    dis
                                                    parturient
                                                    montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    @endif
                                @endif

                            </div>
                            <div class="items-imgs">

                                @if($loop->index > 10 AND $loop->index <= 15)
                                    @if($loop->index == 11)
                                        <div class="items-imgs__photo items-imgs__photo__1" data-aos="fade-up">
                                            <a data-type="image" href="{{ $inspiration->images }}"
                                               data-caption="{{ $inspiration->legende }}">
                                                <figure>
                                                    <img data-src="{{ $inspiration->images}}"
                                                         width="735"
                                                         height="490"
                                                         alt="balise alt de l'image" uk-img/>
                                                </figure>
                                            </a>
                                        </div>
                                    @else
                                        <div class="items-imgs__photo" data-aos="fade-down-right"
                                             data-aos-delay="200">
                                            <a data-type="image" href="{{ $inspiration->images }}"
                                               data-caption="{{ $inspiration->legende }}">
                                                <figure>
                                                    <img data-src="{{ $inspiration->images}}"
                                                         width="401"
                                                         height="600"
                                                         alt="balise alt de l'image" uk-img/>
                                                </figure>
                                            </a>
                                        </div>
                                    @endif
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
@stop
