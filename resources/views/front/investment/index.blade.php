@extends('layouts.page', ['body_class' => 'no-top no-bottom land-page'])

@section('meta_title', $investment->name)
@section('seo_title', $investment->meta_title)
@section('seo_description', $investment->meta_description)

@section('pageheader')
    @include('layouts.partials.developro-header', ['page' => $page, 'investment' => $investment, 'header_file' => 'jak-kupic.jpg'])
@stop

@section('content')
    @if($investment->file_header)
        <div id="investHeader">
            <img src="{{ asset('/investment/header/'.$investment->file_header) }}" alt="{{ $investment->name }}" class="w-100">
        </div>
    @endif
    @if($investment->id == 1)
    <nav id="investNav" class="position-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{ route('front.investment.plan', $investment->slug) }}" class="bttn">ZOBACZ MIESZKANIA</a>
                </div>
            </div>
        </div>
    </nav>
    <section id="investDesc">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6 d-flex align-items-center">
                    <div class="pe-0 pe-xl-5">
                        <p><strong>ABRAHAMA 14 to nowy projekt powstający na warszawskim Gocławiu z bezpośrednim widokiem na jezioro Balaton. </strong></p>
                        <p>&nbsp;</p>
                        <p>Elegancki, subtelny budynek wtapia się w otoczenie, podnosząc tym samym walory estetyczne najbliższej okolicy.</p>
                        <p>&nbsp;</p>
                        <p>Na 8 kondygnacjach zaprojektowanych zostało 67 mieszkań wraz z podziemnymi miejscami parkingowymi. Na parterze budynku zlokalizowane są lokale usługowe.</p>
                        <div class="row mt-4 mt-sm-5 mb-4 mb-sm-5">
                            <div class="col-12 col-sm-4">
                                <div class="gradient-border p-4">
                                    <div class="box">
                                        <h4 class="label-title">67</h4>
                                        <p>Mieszkań na 8 <br>kondygnacjach</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                <div class="gradient-border p-4">
                                    <div class="box">
                                        <h4 class="label-title">37-96 m<sup>2</sup></h4>
                                        <p>Różnorodne <br>metraże</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-4 mt-4 mt-sm-0">
                                <div class="gradient-border p-4">
                                    <div class="box">
                                        <h4 class="label-title">Q4 2024</h4>
                                        <p>Oddanie <br>inwestycji</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><strong>Budynek ABRAHAMA 14 został zaprojektowany z dbałością o każdy szczegół. Projekt odznacza się niebanalną architekturą, oryginalnymi rozwiązaniami i nowoczesnym designem.</strong></p>
                        <p>&nbsp;</p>
                        <p>Elegancki, subtelny budynek wtapia się w otoczenie, podnosząc tym samym walory estetyczne najbliższej okolicy.</p>
                        <p>&nbsp;</p>
                        <p>Na 8 kondygnacjach zaprojektowanych zostało 67 mieszkań wraz z podziemnymi miejscami parkingowymi. Na parterze budynku zlokalizowane są lokale usługowe.</p>
                    </div>
                </div>
                <div class="mt-5 mt-xl-0 col-12 col-xl-6">
                    <div class="position-sticky">
                        <img class="d-none d-xl-block" src="{{ asset('/uploads/abrahama-14-budynek.jpg') }}" alt="Wizualizacja budynku, w tle zielone tereny">
                        <img class="d-block d-xl-none" src="{{ asset('/uploads/abrahama-14-budynek-lg.jpg') }}" alt="Wizualizacja budynku, w tle zielone tereny">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="investFeatures" class="bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="icon-box icon-box-white d-flex mt-0">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/abrahama/komunikacja-miejska.png') }}" alt="Przyjazne otoczenie" width="70" height="70">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-sm-5">
                            <h3>2 minuty</h3>
                            <p>do przystanku komunikacji miejskiej</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3 mt-5 mt-md-0">
                    <div class="icon-box icon-box-white d-flex mt-0">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/abrahama/latwy-dojazd.png') }}" alt="Przyjazne otoczenie" width="70" height="70">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-sm-5">
                            <h3>Łatwy dojazd</h3>
                            <p>do obwodnicy Warszawy</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3 mt-5 mt-xl-0">
                    <div class="icon-box icon-box-white d-flex mt-0">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/abrahama/edukacja-icon.png') }}" alt="Przyjazne otoczenie" width="70" height="70">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-sm-5">
                            <h3>Szkoły i przedszkola</h3>
                            <p>- w okolicy inwestycji</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-xl-3 mt-5 mt-xl-0">
                    <div class="icon-box icon-box-white d-flex mt-0">
                        <div class="icon-box-img">
                            <img src="{{ asset('/uploads/abrahama/sport-icon.png') }}" alt="Przyjazne otoczenie" width="70" height="70">
                        </div>
                        <div class="icon-box-text ps-4 pe-0 pe-sm-5">
                            <h3>Tereny rekreacyjne</h3>
                            <p>- obiekty rozrywkowe i sportowe w pobliżu osiedla</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="investLocation">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('/uploads/abrahama/lokalizacja.jpg') }}" alt="Lokalizacja inwestycji" width="964" height="799">
                </div>
                <div class="mt-5 mt-lg-0 col-12 col-lg-6 d-flex align-items-center">
                    <div class="ps-0 ps-lg-5">
                        <h2 class="mb-4">LOKALIZACJA</h2>
                        <p><strong>Mieszkania na warszawskim Gocławiu z bezpośrednim widokiem na jezioro Balaton.</strong></p>
                        <p>&nbsp;</p>
                        <p>Najbliższa okolica obfituje dużą ilością terenów zielonych. ABRAHAMA 14 sąsiaduje z tętniącą życiem tamtejszych restauracji i kawiarenek Saską Kępą.</p>
                        <p>&nbsp;</p>
                        <p>Lokalizacja jest także świetnie skomunikowana z większymi arteriami komunikacyjnymi, co pozwala uniknąć korków. ABRAHAMA 14 to projekt dedykowany miłośnikom życia w mieście, elegancji i nowoczesnej architektury.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img src="{{ asset('/uploads/abrahama/mapa.jpg') }}" width="1920" height="983" alt="Mapa lokalizacji" class="w-100">

    <section id="investMapLegend">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4 col-lg-2">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/sklepy-i-centra-handlowe.png') }}" alt="">
                        <p>Sklepy i centra handlowe</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/szkoly-przedszkola-i-zlobki.png') }}" alt="">
                        <p>Szkoły</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/przedszkola-i-zlobki.png') }}" alt="">
                        <p>Przedszkola i żłobki</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2 mt-3 mt-sm-5 mt-lg-0">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/metro.png') }}" alt="">
                        <p>Planowana linia metra</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2 mt-3 mt-sm-5 mt-lg-0">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/przystanki-autobusowe.png') }}" alt="">
                        <p>Przystanki autobusowe</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2 mt-3 mt-sm-5 mt-lg-0">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/sport-rekreacja-i-place-zabaw.png') }}" alt="">
                        <p>Sport i rekreacja</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2 mt-3 mt-sm-5">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/place-zabaw.png') }}" alt="">
                        <p>Place zabaw</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2 mt-3 mt-sm-5">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/restauracje-i-kawiarnie.png') }}" alt="">
                        <p>Restauracje i kawiarnie</p>
                    </div>
                </div>
                <div class="col-4 col-lg-2 mt-3 mt-sm-5">
                    <div class="legend">
                        <img src="{{ asset('/uploads/abrahama/markers/apteki-przychodnie-i-szpitale.png') }}" alt="">
                        <p>Apteki, przychodnie i szpitale</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="investGallery">
        <div class="container">
            <div class="col-12">
                {!! parse_text('[galeria=gallery]2[/galeria]') !!}
            </div>
        </div>
    </section>
    @endif

    @if($investment->contact_form)
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
                            {!! $investment->contact_form_text !!}
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
    @endif
@endsection
