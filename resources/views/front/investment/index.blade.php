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
    @endif
@endsection
