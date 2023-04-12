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
                <div class="col-12 col-lg-6">
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
                <div class="col-12 col-lg-6 mt-4 mt-lg-0">
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
                <div class="col-12 col-lg-8 col-xxl-9 d-flex align-items-center text-center text-lg-start">
                    <h4>ZOBACZ NASZE DOTYCHCZASOWE <span>REALIZACJE</span></h4>
                </div>
                <div class="col-12 col-lg-4 col-xxl-3 text-center text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('completed') }}" class="bttn bttn-border">Zrealizowane inwestycje</a>
                </div>
            </div>
        </div>
    </div>

    <section id="investCTA">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="invest-cta">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <a href="{{ route('front.investment.show', ['slug' => 'radarowa']) }}"><img src="/uploads/box/project-radarowa.jpg" alt=""></a>
                            </div>
                            <div class="col-12 col-md-7 d-flex align-items-center justify-content-center">
                                <div class="invest-cta-text ps-4 pe-5 w-100">
                                    <h2><a href="{{ route('front.investment.show', ['slug' => 'radarowa']) }}">Radarowa</a></h2>
                                    <ul class="mb-0 list-unstyled mt-4">
                                        <li>
                                            Oddanie inwestycji: <span class="float-end">-</span>
                                        </li>
                                        <li>
                                            DOSTĘPNYCH MIESZKAŃ: <span class="float-end">-</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('front.investment.show', ['slug' => 'radarowa']) }}" class="bttn bttn-sm mt-4">ZOBACZ INWESTYCJE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                    <div class="invest-cta">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <a href="{{ route('front.investment.show', ['slug' => 'abrahama-14']) }}"><img src="/uploads/box/project-abrahama.jpg" alt=""></a>
                            </div>
                            <div class="col-12 col-md-7 d-flex align-items-center justify-content-center">
                                <div class="invest-cta-text ps-4 pe-5 w-100">
                                    <h2><a href="{{ route('front.investment.show', ['slug' => 'abrahama-14']) }}">Abrahama</a></h2>
                                    <ul class="mb-0 list-unstyled mt-4">
                                        <li>
                                            Oddanie inwestycji: <span class="float-end">Q4 2024</span>
                                        </li>
                                        <li>
                                            DOSTĘPNYCH MIESZKAŃ: <span class="float-end">67</span>
                                        </li>
                                    </ul>
                                    <a href="{{ route('front.investment.show', ['slug' => 'abrahama-14']) }}" class="bttn bttn-sm mt-4">ZOBACZ INWESTYCJE</a>
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
