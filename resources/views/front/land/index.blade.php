@extends('layouts.page', ['body_class' => 'no-top no-bottom land-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'jak-kupic.jpg'])
@stop

@section('content')
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-6 d-flex align-items-center justify-content-center">
                <div class="block-text">

                    <p><strong>Jesteśmy zainteresowani nabyciem gruntów inwestycyjnych pod budownictwo wielorodzinne na terenie Warszawy i okolic.</strong></p>
                    <p>&nbsp;</p>
                    <p>Interesują nas zarówno grunty niezabudowane,jak i te z budynkami przeznaczonymi do wyburzenia.</p>
                    <p>&nbsp;</p>
                    <p><strong>Serdecznie zapraszamy do kontaktu:</strong></p>

                    <ul class="list-unstyled mb-0">
                        <li>
                            telefon: <a href=""><strong>+48 605 433 401</strong></a>
                        </li>
                        <li>
                            email: <a href="">grunty@sgdevelopment.pl</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-6">
                <div class="block-img">
                    <picture>
                        <source type="image/webp" srcset="{{ asset('/uploads/kupimy-grunty.webp') }}">
                        <source type="image/jpeg" srcset="{{ asset('/uploads/kupimy-grunty.jpg') }}">
                        <img src="{{ asset('/uploads/kupimy-grunty.jpg') }}" alt="Widok budynku, zielone otoczenia, ludzie" width="960" height="680">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <div id="cta" class="m-0 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-9 d-flex align-items-center">
                    <h4>ZOBACZ NASZE DOTYCHCZASOWE <span>REALIZACJE</span></h4>
                </div>
                <div class="col-3">
                    <a href="" class="bttn bttn-border">Zrealizowane inwestycje</a>
                </div>
            </div>
        </div>
    </div>

    <section id="investCTA">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="invest-cta">
                        <div class="row">
                            <div class="col-5">
                                <a href=""><img src="https://sgdevelopment.pl/wp-content/themes/sgdevelopment/assets/images/project-radarowa.jpg" alt=""></a>
                            </div>
                            <div class="col-7 d-flex align-items-center justify-content-center">
                                <div class="invest-cta-text ps-4 pe-5 w-100">
                                    <div class="invest-cta-text">
                                        <h2><a href="">Radarowa</a></h2>
                                        <ul class="mb-0 list-unstyled mt-4">
                                            <li>
                                                Oddanie inwestycji: <span class="float-end">IV kwartał 2024</span>
                                            </li>
                                            <li>
                                                DOSTĘPNYCH MIESZKAŃ: <span class="float-end">68</span>
                                            </li>
                                        </ul>
                                        <a href="" class="bttn bttn-sm mt-4">ZOBACZ INWESTYCJE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="invest-cta">
                        <div class="row">
                            <div class="col-5">
                                <a href=""><img src="https://sgdevelopment.pl/wp-content/themes/sgdevelopment/assets/images/project-abrahama.jpg" alt=""></a>
                            </div>
                            <div class="col-7 d-flex align-items-center justify-content-center">
                                <div class="invest-cta-text ps-4 pe-5 w-100">
                                    <div class="invest-cta-text">
                                        <h2><a href="">Abrahama</a></h2>
                                        <ul class="mb-0 list-unstyled mt-4">
                                            <li>
                                                Oddanie inwestycji: <span class="float-end">IV kwartał 2024</span>
                                            </li>
                                            <li>
                                                DOSTĘPNYCH MIESZKAŃ: <span class="float-end">68</span>
                                            </li>
                                        </ul>
                                        <a href="" class="bttn bttn-sm mt-4">ZOBACZ INWESTYCJE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                <div class="col-6">
                    <div class="contact-text">
                        <img src="https://sgdevelopment.pl/wp-content/themes/sgdevelopment/assets/images/logo-sg.png" alt="">
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <h2>Siedziba firmy</h2>
                        <p>tel. <a href="tel: +48 605 433 401">+48 605 433 401</a></p>
                        <p>ul. Śliska 3 lok. 1B</p>
                        <p>00-127 Warszawa</p>
                        <p>&nbsp;</p>
                        <h2>Kontakt do Biura Sprzedaży</h2>
                        <p>tel. <a href="tel: +48 607 823 400">+48 607 823 400</a></p>
                    </div>
                </div>
                <div class="col-6">
                    <form method="post" id="homepage-form" action="{{ route('contact.index') }}" class="validateForm">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 col-sm-6 form-input">
                                <label for="form_name">Imię <span class="text-danger">*</span></label>
                                <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}">

                                @error('name')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6 form-input col-input-important">
                                <label for="form_surname">Nazwisko <span class="text-danger">*</span></label>
                                <input name="form_surname" id="form_surname" class="form-control" type="text" value="{{ old('form_surname') }}">
                            </div>
                            <div class="col-12 col-sm-6 form-input">
                                <label for="form_email">E-mail <span class="text-danger">*</span></label>
                                <input name="form_email" id="form_email" class="validate[required] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}">

                                @error('email')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                            <div class="col-12 col-sm-6 form-input">
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
@endsection
