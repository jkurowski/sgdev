<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>

    <!-- Styles -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}">
{!! settings()->get("scripts_afterbody") !!}

@include('layouts.partials.header')

<section id="slider">
    <ul class="mb-0 list-unstyled rslides">
        @foreach($sliders as $panel)
        <li>
            <img src="{{ asset("/uploads/slider/".$panel->file) }}" alt="{{ $panel->title }}">
            <div class="slider-apla">
                <h2>
                    @if($panel->link)<a href="{{ $panel->link }}">@endif
                        {{ $panel->title }}
                    @if($panel->link)</a>@endif
                </h2>
                <p>{{ $panel->text }}</p>
                @if($panel->link && $panel->link_button)
                <a href="{{ $panel->link }}" class="bttn bttn-border mt-4">{{ $panel->link_button }}</a>
                @endif
            </div>
        </li>
        @endforeach
    </ul>
</section>

<section id="mainInvest" class="p-0">
    <div class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center bg-blue mb-0">
                        <span>ZOBACZ NAJNOWSZE</span>
                        <h2>PROJEKTY MIESZKANIOWE</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-ms-6 col-lg-4">
                    <div class="icon-box icon-box-white d-flex">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/icons/przyjazne-otoczenie.png') }}" width="75" height="75" alt="Przyjazne otoczenie">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-xl-5">
                            <h3>Przyjazne otoczenie</h3>
                            <p>Park i istniejące ścieżki rowerowe i spacerowe</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-ms-6 col-lg-4">
                    <div class="icon-box icon-box-white d-flex">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/icons/bliskosc-komunikacji.png') }}" width="75" height="75" alt="Bliskość komunikacji">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-xl-5">
                            <h3>Bliskość komunikacji</h3>
                            <p>Przystanki autobusowe i tramwajowe</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-ms-6 col-lg-4">
                    <div class="icon-box icon-box-white d-flex">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/icons/dostepnosc-infrastruktury.png') }}" width="75" height="75" alt="Dostępność infrastruktury">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-xl-5">
                            <h3>Dostępność infrastruktury</h3>
                            <p>Sklepy, centra handlowe, obiekty sportowe itd.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-ms-6 col-lg-4">
                    <div class="icon-box icon-box-white d-flex">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/icons/dostepnosc-edukacji.png') }}" width="75" height="75" alt="Dostępność edukacji">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-xl-5">
                            <h3>Dostępność edukacji</h3>
                            <p>Szkoły, żłobki, przedszkolae</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-ms-6 col-lg-4">
                    <div class="icon-box icon-box-white d-flex">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/icons/nowoczesna-architektura.png') }}" width="75" height="75" alt="Nowoczesna architektura">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-xl-5">
                            <h3>Nowoczesna architektura</h3>
                            <p>Dopracowane elementy wykończenia</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-ms-6 col-lg-4">
                    <div class="icon-box icon-box-white d-flex">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/icons/wybor-metrazy.png') }}" width="75" height="75" alt="Wybór metraży">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-xl-5">
                            <h3>Wybór metraży</h3>
                            <p>Szeroka gama dostępnych powierzchni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{ route('front.investment.show', ['slug' => 'radarowa']) }}">
                        <div class="main-invest">
                            <div class="main-invest-title">
                                <h2>Radarowa</h2>
                            </div>
                            <div class="main-invest-logo">
                                <img src="/uploads/box/project-logo-radarowa.png" alt="">
                            </div>
                            <div class="main-invest-map">
                                <img src="/uploads/box/project-map-wlochy.png" alt="">
                            </div>
                            <div class="main-invest-thumb">
                                <img src="/uploads/box/project-radarowa.jpg" alt="">
                            </div>
                            <div class="main-invest-desc">
                                <ul class="mb-0 list-unstyled">
                                    <li>
                                        Oddanie inwestycji: <span class="float-end">-</span>
                                    </li>
                                    <li>
                                        DOSTĘPNYCH MIESZKAŃ: <span class="float-end">-</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-invest-footer">
                            WIĘCEJ O INWESTYCJI
                        </div>
                    </a>
                </div>
                <div class="mt-5 mt-md-0 col-12 col-md-6 col-lg-4">
                    <a href="{{ route('front.investment.show', ['slug' => 'abrahama-14']) }}">
                        <div class="main-invest">
                            <div class="main-invest-title">
                                <h2>Abrahama</h2>
                            </div>
                            <div class="main-invest-logo">
                                <img src="/uploads/box/project-logo-abrahama.png" alt="">
                            </div>
                            <div class="main-invest-map">
                                <img src="/uploads/box/project-map-goclaw.png" alt="">
                            </div>
                            <div class="main-invest-thumb">
                                <img src="/uploads/box/project-abrahama.jpg" alt="">
                            </div>
                            <div class="main-invest-desc">
                                <ul class="mb-0 list-unstyled">
                                    <li>
                                        Oddanie inwestycji: <span class="float-end">Q4 2024</span>
                                    </li>
                                    <li>
                                        DOSTĘPNYCH MIESZKAŃ: <span class="float-end">67</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="main-invest-footer">
                            WIĘCEJ O INWESTYCJI
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="p-0 p-lg-3 p-xl-5 rwd-sm">
                    <p><strong>Nadrzędnym celem SG Development jest profesjonalna realizacja inwestycji mieszkaniowych, usługowych i handlowych.</strong></p>
                    <p>Wszystkie oferowane przez nas mieszkania i lokale usługowe wykonywane są zgodnie z zasadami najwyższej staranności, fachowości oraz troską o każdy detal.</p>
                    <p>Zależy nam, aby klienci korzystający z naszych usług czuli się komfortowo.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                <div class="p-0 p-lg-3 p-xl-5 rwd-sm">
                    <p><strong>Gwarantujemy im bezpieczeństwo i spokój poprzez kreowanie wysokiej jakości życia. Zadowolenie naszych klientów i zaufanie, którym nas obdarzyli, są nagrodą za naszą pracę.</strong></p>
                    <p>Dbamy o wysoki poziom architektoniczny budynków, o estetykę wnętrz i stworzenie przyjaznego mieszkańcom otoczenia. Dążymy do utrzymania najwyższych standardów w relacjach z klientem.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="cta">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-xxl-9 d-flex align-items-center text-center text-lg-start">
                    <h4>ZOBACZ NASZE DOTYCHCZASOWE <span>REALIZACJE</span></h4>
                </div>
                <div class="col-12 col-lg-4 col-xxl-3 text-center text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('completed') }}" class="bttn">Zrealizowane inwestycje</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="mb-3 mb-sm-5">Współpracujemy z:</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center rwd-sm">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-4">
                        <div class="border-gradient">
                            <div class="partner-logo">
                                <img src="{{ asset('/uploads/unibep-logo.png') }}" width="332" height="221" alt="Unibep logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border-gradient">
                            <div class="partner-logo">
                                <img src="{{ asset('/uploads/orlik-jantar.png') }}" width="332" height="221" alt="Orlik Jantar logo">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border-gradient">
                            <div class="partner-logo">
                                <img src="{{ asset('/uploads/wsm-ochota-logo.png') }}" width="332" height="221" alt="WSM Ochota logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mainFeatures">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center bg-blue mb-0">
                    <span>INWESTOR</span>
                    <h2>DLACZEGO WARTO NAS WYBRAĆ?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-box icon-box-white d-flex">
                    <div class="icon-box-img">
                        <img src="{{ asset('/uploads/icons/atrakcyjne-lokalizacje.png') }}" width="75" height="75" alt="Atrakcyjne lokalizacje">
                    </div>
                    <div class="icon-box-text ps-4 pe-5 d-flex align-items-center">
                        <h3>2 ATRAKCYJNE LOKALIZACJE DO WYBORU</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-box icon-box-white d-flex">
                    <div class="icon-box-img">
                        <img src="{{ asset('/uploads/icons/szeroki-wybor-mieszkan.png') }}" width="75" height="75" alt="Szeroki wybór mieszkań">
                    </div>
                    <div class="icon-box-text ps-4 pe-5 d-flex align-items-center">
                        <h3>SZEROKI WYBÓR MIESZKAŃ</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-box icon-box-white d-flex">
                    <div class="icon-box-img">
                        <img src="{{ asset('/uploads/icons/zaufani-partnerzy.png') }}" width="75" height="75" alt="Zaufani partnerzy">
                    </div>
                    <div class="icon-box-text ps-4 pe-5 d-flex align-items-center">
                        <h3>ZAUFANI PARTNERZY</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-box icon-box-white d-flex">
                    <div class="icon-box-img">
                        <img src="{{ asset('/uploads/icons/duze-balkony.png') }}" width="75" height="75" alt="Duże balkony">
                    </div>
                    <div class="icon-box-text ps-4 pe-5 d-flex align-items-center">
                        <h3>DUŻE BALKONY</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-box icon-box-white d-flex">
                    <div class="icon-box-img">
                        <img src="{{ asset('/uploads/icons/panoramiczne-okna.png') }}" width="75" height="75" alt="Panoramiczne okna">
                    </div>
                    <div class="icon-box-text ps-4 pe-5 d-flex align-items-center">
                        <h3>PANORAMICZNE OKNA</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="icon-box icon-box-white d-flex">
                    <div class="icon-box-img">
                        <img src="{{ asset('/uploads/icons/dbalosc-o-ergonomie.png') }}" width="75" height="75" alt="Dbałość o ergonomię">
                    </div>
                    <div class="icon-box-text ps-4 pe-5 d-flex align-items-center">
                        <h3>DBAŁOŚĆ O ERGONOMIĘ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="mainNews" class="rwd-sm">
    <div class="container">
        <div class="row">
            @foreach($articles as $key => $article)
                <div class="col-12 col-lg-6 @if($key == 1) mt-4 mt-lg-0 @endif">
                    <article>
                        <div class="news-entry d-flex">
                            <div class="news-thumb">
                                @if($article->content)
                                    <a href="{{route('front.news.show', $article->slug)}}">
                                        @endif
                                        <picture>
                                            <source type="image/webp" srcset="{{asset('/uploads/articles/thumbs/webp/'.$article->file_webp) }}">
                                            <source type="image/jpeg" srcset="{{asset('/uploads/articles/thumbs/'.$article->file) }}">
                                            <img src="{{asset('/uploads/articles/thumbs/'.$article->file) }}" alt="{{ $article->file_alt }}">
                                        </picture>
                                        @if($article->content)
                                    </a>
                                @endif
                            </div>
                            <div class="news-text ps-4">
                                <h2>
                                    @if($article->content)
                                        <a href="{{route('front.news.show', $article->slug)}}">
                                    @endif
                                        {{ $article->title }}
                                    @if($article->content)
                                        </a>
                                    @endif
                                </h2>
                                <p>{{ $article->content_entry }}</p>
                                @if($article->content)
                                <a href="{{route('front.news.show', $article->slug)}}" class="bttn bttn-sm mt-4">CZYTAJ WIĘCEJ</a>
                                @endif
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center">
                    <span>KONTAKT Z NAMI</span>
                    <h2>MASZ PYTANIA? NAPISZ DO NAS!</h2>
                </div>
            </div>
        </div>
        <div class="row row-apla">
            <div class="col-12 col-md-6">
                <div class="contact-text">
                    <img src="/images/logo-sg.png" alt="">
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <h2>Siedziba firmy</h2>
                    <p>tel. <a href="tel:+48605433401">+48 605 433 401</a></p>
                    <p>ul. Śliska 3 lok. 1B</p>
                    <p>00-127 Warszawa</p>
                    <p>&nbsp;</p>
                    <h2>Kontakt do Biura Sprzedaży</h2>
                    <p>tel. <a href="tel:+48607823400">+48 607 823 400</a></p>
                </div>
            </div>
            <div class="col-12 col-md-6 mt-5 mt-md-0">
                <form method="post" id="homepage-form" action="{{ route('contact.index') }}" class="validateForm">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 col-sm-6 col-xl-4 form-input">
                            <label for="form_name">Imię <span class="text-danger">*</span></label>
                            <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 form-input col-input-important">
                            <label for="form_surname">Nazwisko <span class="text-danger">*</span></label>
                            <input name="form_surname" id="form_surname" class="form-control" type="text" value="{{ old('form_surname') }}">
                        </div>
                        <div class="col-12 col-sm-6 col-xl-4 form-input">
                            <label for="form_email">E-mail <span class="text-danger">*</span></label>
                            <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 col-xl-4 form-input">
                            <label for="form_phone">Telefon <span class="text-danger">*</span></label>
                            <input name="form_phone" id="form_phone" class="validate[required] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}">

                            @error('phone')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>
                        <div class="col-12 mt-1 form-input">
                            <label for="form_message">Treść wiadomości <span class="text-danger">*</span></label>
                            <textarea rows="5" cols="1" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>

                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="rodo-rules">
                            @foreach ($rules as $r)
                                <div class="col-12">
                                    <div class="rodo-rule clearfix">
                                        <input name="rule_{{$r->id}}" id="rule_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                                        <label for="zgoda_{{$r->id}}" class="rules-text">{!! $r->text !!}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row row-form-submit">
                        <div class="col-12 pt-3">
                            <div class="input text-center">
                                <input name="form_page" type="hidden" value="homepage">
                                <button class="bttn" type="submit">WYŚLIJ WIADOMOŚĆ</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<link href="{{ asset('/css/styles.min.css') }}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/app.min.js') }}" charset="utf-8"></script>

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    $(document).ready(function(){
        $('#slider ul').responsiveSlides({
                auto:true,
                pager:true,
                nav:true,
                timeout:9000,
                random:false,
                speed: 500
            });

        @if(settings()->get("popup_status") == 1)
            const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                keyboard: false
            });
        @endif
        @if($popup == 1)
        popModal.show();
            setTimeout( function(){
                popModal.hide();
            }, {{ settings()->get("popup_timeout") }} );
        @endif
    });
    @if (session('success')||session('warning'))
    $(window).load(function() {
        const aboveHeight = $('header').outerHeight();
        $('html, body').stop().animate({
            scrollTop: $('.alert').offset().top-aboveHeight
        }, 1500, 'easeInOutExpo');
    });
    @endif
</script>
{!! settings()->get("scripts_beforebody") !!}

</body>
</html>
