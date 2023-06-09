<div class="header-holder">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-2">
                    <div id="logo">
                        <a href="/" aria-label="Link strony głównej">
                            <img src="{{ asset("images/logo-sg.png") }}" alt="Logo {{ settings()->get("page_title") }}" width="328" height="73">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-10">
                    <nav class="h-100">
                        <ul class="mb-0 list-unstyled d-block d-lg-flex h-100 justify-content-end ps-0 ps-lg-5">
                            <li>
                                <a href="{{ route('front.investment.show', ['slug' => 'abrahama-14']) }}">Inwestycje w sprzedaży</a>
                            </li>
                            <li><a href="{{ route('about') }}">O nas</a></li>
                            <li><a href="{{ route('front.news.index') }}">Aktualności</a></li>
                            <li><a href="{{ route('completed') }}">Inwestycje zrealizowane</a></li>
                            <li><a href="{{ route('land') }}">Zakup gruntów</a></li>
                            <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                        </ul>
                    </nav>
                    <div id="triggermenu" class="d-block d-lg-none"><i class="las la-bars"></i> MENU</div>
                </div>
            </div>
        </div>
    </header>
</div>

<aside>
    <ul class="mb-0 list-unstyled socials">
        @if(settings()->get("social_facebook"))
        <li class="socials-fb"><a href="{{ settings()->get("social_facebook") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Facebook"><i class="lab la-facebook-f"></i></a></li>
        @endif
        @if(settings()->get("social_youtube"))
        <li class="socials-yt"><a href="{{ settings()->get("social_youtube") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Youtube"><i class="lab la-youtube"></i></a></li>
        @endif
        @if(settings()->get("social_linkedin"))
        <li class="socials-linkedin"><a href="{{ settings()->get("social_linkedin") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Linkedin"><i class="lab la-linkedin-in"></i></a></li>
        @endif
        @if(settings()->get("social_instagram"))
        <li class="socials-instagram"><a href="{{ settings()->get("social_instagram") }}" target="_blank" rel="nofollow" aria-label="Link do profilu Instagram"><i class="lab la-instagram"></i></a></li>
        @endif
        <li class="socials-contact">
            <a href="{{ route('contact.index') }}" aria-label="Link do strony Kontakt">
                <i class="las la-phone"></i>
            </a>
        </li>
    </ul>
</aside>