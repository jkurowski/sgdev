@extends('layouts.page', ['body_class' => 'news no-bottom no-top'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('pageheader')
    @include('layouts.partials.page-header', ['page' => $page, 'header_file' => 'news.jpg'])
@stop

@section('content')
    <section id="mainNews">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <article>
                        <div class="news-entry d-flex">
                            <div class="news-thumb">
                                <a href="">
                                    <img src="{{ asset('/uploads/news-1.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="news-text ps-4">
                                <h2><a href="">Budynek usługowo-biurowy na Mokotowie.</a></h2>
                                <p>Inwestycja w przygotowaniu.</p>
                                <a href="" class="bttn bttn-sm mt-4 d-none">CZYTAJ WIĘCEJ</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-6">
                    <article>
                        <div class="news-entry d-flex">
                            <div class="news-thumb">
                                <a href="">
                                    <img src="{{ asset('/uploads/news-2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="news-text ps-4">
                                <h2><a href="">Dziennik budowy</a></h2>
                                <p>Po rozpoczęciu budowy będziemy publikować informację o bieżącym postępie prac.</p>
                                <a href="" class="bttn bttn-sm mt-4 d-none">CZYTAJ WIĘCEJ</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

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

@endsection
@push('scripts')
    <script>

    </script>
@endpush
