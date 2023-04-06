<div class="header-holder">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div id="logo">
                        <a href="/">
                            <img src="{{ asset("images/logo-sg.png") }}" alt="{{ settings()->get("page_title") }}">
                        </a>
                    </div>
                </div>
                <div class="col-8">
                    <nav class="h-100">
                        <ul class="mb-0 list-unstyled d-flex h-100 justify-content-end ps-5">
                            <li>
                                <a href="#">Inwestycje w sprzedaży</a>
                                <ul class="submenu mb-0 list-unstyled">
                                    <li><a href="{{ route('front.investment.show', ['slug' => 'radarowa']) }}">Radarowa</a></li>
                                    <li><a href="{{ route('front.investment.show', ['slug' => 'abrahama-14']) }}">Abrahama 14</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('about') }}">O nas</a></li>
                            <li><a href="{{ route('front.news.index') }}">Aktualności</a></li>
                            <li><a href="{{ route('completed') }}">Inwestycje zrealizowane</a></li>
                            <li><a href="{{ route('land') }}">Zakup gruntów</a></li>
                            <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
