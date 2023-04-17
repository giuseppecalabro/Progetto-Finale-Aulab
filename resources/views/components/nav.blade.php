<nav class="navbar fixed-top navCustom p-0">
    <div class="container-fluid p-0">
        {{-- HAMBURGER BUTTON----------------------------------------- --}}
        <div class="d-flex ps-3 bgBlack">
        <div class="menu-btn py-2 bgBlack">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar">
                <span><i class="fa-solid fa-bars fa-3x "></i></span>
            </button>
        </div>
        {{-- <a class="navLogo h1 mx-auto" href="/">{{ __('ui.prestoIt') }}</a> --}}

        </div>
        {{-- END HAMBURGER BUTTON-------------------------------------- --}}

        {{-- LOGO----------------------------------------------------- --}}
        {{-- END LOGO-------------------------------------------------- --}}

        {{-- LANG ICONS------------------------------------------------ --}}
        <div class="d-flex bgBlack customPyLang">
            <div class="btn-group dropstart me-2">
                <button type="button" class="btn btnLang dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-language fa-3x langIcon"></i>
                </button>
                <ul class="dropdown-menu customLangGlass">
                    <li>
                        <div class="nav-item mx-1">
                            <x-_locale lang="it" nation="it"></x-_locale>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item mx-1">
                            <x-_locale lang="en" nation="gb">US</x-_locale>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item mx-1">
                            <x-_locale lang="es" nation="es">ES</x-_locale>
                        </div>
                    </li>
                    <li>
                        <div class="nav-item mx-1">
                            <x-_locale lang="ja" nation="jp">JP</x-_locale>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        {{-- END LANG ICONS------------------------------------------------ --}}

        {{-- SIDE MENU------------------------------------------------------ --}}
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel">

            {{-- OFFCANVAS HEADER------------------------------------------------ --}}
            <div class="offcanvas-header">
                <button type="button" class="btnCloseCustom" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-circle-xmark fa-2x"></i>
                    </button>
                @guest
                    <h5>
                        <a class="offcanvas-title" id="offcanvasDarkNavbarLabel" href="{{ route('register') }}">
                            {{-- <i class="fa-solid fa-user-plus"></i> --}}
                             {{ __('ui.register') }}
                        </a>
                        <span class="mx-auto"> | </span>
                        <a class="offcanvas-title" id="offcanvasDarkNavbarLabel" href="{{ route('login') }}">
                            {{-- <i class="fa-solid fa-address-card"></i>  --}}
                            {{ __('ui.login') }}
                        </a>
                    </h5>
                @else
                    <a class="nav-link offcanvas-title" href="{{ route('profile') }}"> 
                    <img src="{{ Auth::user()->imgprofile }}" class="img_user" alt="foto profilo">
                        {{ __('ui.hello') }},
                        {{ Auth::user()->name }}
                    </a>
                    
                    <a class="nav-link offcanvas-title" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{-- <i class="fa-solid fa-right-to-bracket"></i>  --}}
                        {{ __('ui.logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest


                
            </div>
            {{-- END OFFCANVAS HEADER------------------------------------------------ --}}

            {{-- OFFCANVAS BODY------------------------------------------------ --}}
            <div class="offcanvas-body">

                <form action="{{ route('searchArticle') }}" method="GET" class="d-flex mt-1 mb-3" role="search">
                    <input name="searched" class="form-control searchPlaceholder me-2" type="search"
                        placeholder="{{ __('ui.goSearchIt') }}" aria-label="Search">
                    <button class="btn btnSearchCustom" type="submit">{{ __('ui.search') }}</button>
                </form>

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link nav-linkCustom" aria-current="page" href="/">
                            {{-- <i class="fa-solid fa-house"></i>  --}}
                            {{ __('ui.home') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-linkCustom" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- <i class="fa-solid fa-shirt"></i> --}}
                            {{ __('ui.categories') }}
                        </a>
                        {{-- CATEGORIES ENG------------------------------------ --}}
                        @if (__('ui.allArticles') == 'All articles')
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item ms-3"
                                        href="{{ route('allArticle') }}">{{ __('ui.allArticles') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item nav-linkCustom ms-3"
                                            href="{{ route('showCategory', $category->slug) }}">{{ $category->name }}</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        {{-- END CATEGORIES ENG------------------------------------ --}}

                        {{-- CATEGORIES ITA------------------------------------ --}}
                        @if (__('ui.allArticles') == 'Tutti gli articoli')
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item ms-3"
                                        href="{{ route('allArticle') }}">{{ __('ui.allArticles') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item nav-linkCustom ms-3"
                                            href="{{ route('showCategory', $category->slug) }}">{{ $category->nameit }}</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        {{-- END CATEGORIES ITA------------------------------------ --}}
                        {{-- CATEGORIES ES------------------------------------ --}}
                        @if (__('ui.allArticles') == 'Todos los artículos')
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item ms-3"
                                        href="{{ route('allArticle') }}">{{ __('ui.allArticles') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item nav-linkCustom ms-3"
                                            href="{{ route('showCategory', $category->slug) }}">{{ $category->namees }}</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        {{-- END CATEGORIES ES------------------------------------ --}}
                        {{-- CATEGORIES JP------------------------------------------- --}}
                        @if (__('ui.allArticles') == 'すべての記事')
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item ms-3"
                                        href="{{ route('allArticle') }}">{{ __('ui.allArticles') }}</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                @foreach ($categories as $category)
                                    <li><a class="dropdown-item nav-linkCustom ms-3"
                                            href="{{ route('showCategory', $category->slug) }}">{{ $category->namejp }}</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        {{-- END CATEGORIES JP----------------------------------------- --}}
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-linkCustom" aria-current="page" href="{{ route('faq') }}">
                            {{-- <i class="fa-solid fa-circle-question"></i> --}}
                            {{ __('ui.faq') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link nav-linkCustom" aria-current="page" href="{{ route('aboutUs') }}">
                            {{-- <i class="fa-solid fa-people-group"></i>  --}}
                                {{ __('ui.aboutUs') }}</a>
                    </li>

                    <li>
                        <div class ="navLine my-5 mx-3"></div>
                    </li>

                @auth
                {{-- INSERT ARTICLE---------------------------------- --}}
                <li class="nav-item">
                    <a class="nav-link nav-linkCustom" href="{{ route('addArticle') }}">
                        {{-- <i class="fa-solid fa-hand-holding-dollar"></i> --}}
                         {{ __('ui.insertArticle') }}
                    </a>
                </li>
                {{-- END INSERT ARTICLE------------------------------- --}}

                {{-- REVISOR------------------------------------------ --}}
                
                        @if (Auth::user()->is_revisor)
                        <li>
                            <div class ="navLine my-5 mx-3"></div>
                        </li>
                        <li class="nav-item">
                            <p class="revisorArea mx-auto">{{ __('ui.revisorTitle') }}</p>
                        </li>
                            <li class="nav-item">
                                <a class="nav-link nav-linkCustom position-relative" aria-current="page"
                                    href="{{ route('indexRevisor') }}">
                                    {{-- <i class="fa-solid fa-people-group"></i> --}}
                                    {{ __('ui.revArea') }}
                                    <span
                                        class="translate-middle badge rounded-pill bg-danger ms-2">{{ App\Models\Article::toBeRevisionedCount() }}
                                        <span class="visually-hidden">{{ __('ui.unreadMsg') }}</span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-linkCustom" aria-current="page"
                                    href="{{ route('confirmationRevisor') }}">
                                    {{-- <i class="fa-solid fa-people-group"></i> --}}
                                    {{ __('ui.reviewedArticles') }}</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link nav-linkCustom position-relative" aria-current="page"
                                    href="" data-bs-toggle="modal" data-bs-target="#modalVerify">
                                    {{-- <i class="fa-solid fa-people-group"></i> --}}

                                    {{ __('ui.workWithUs') }}
                                </a>
                            </li>
                        @endif
                {{-- END REVISOR----------------------------------- --}}
                    @endauth

                    
                </ul>
            </div>
        </div>
    {{-- END SIDE MENU------------------------------------------------------ --}}

    </div>
    
    {{-- MODALE LAVORA CON NOI --}}
    <div class="modal fade" id="modalVerify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content bgBlack mx-md-auto">
            <div class="modal-header">
              <p class="class h1 text-center" id="exampleModalLabel">{{__('ui.workWithUsTitle')}}</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="fs-3">{{__('ui.workWithUsSubtitle')}}</p>
                    <p class="fs-5">{{__('ui.workWithUsDescription')}}</p class="fs-5">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{__('ui.workWithUsCloseButton')}}</button>
              <form action="{{route('becomeRevisor')}}" method="get">
                @csrf
                <button type="submit" class="btn bgGold">{{__('ui.workWithUsRequestButton')}}</button>
            </form>
            </div>
          </div>
        </div>
      </div>
</nav>