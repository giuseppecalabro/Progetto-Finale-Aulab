<x-layout>
    <x-slot name="title">{{ __('ui.headerTitle') }}</x-slot>

    <!-- HEADER----------------------------------------------- -->
    <x-header />
    <!-- END HEADER------------------------------------------- -->

    @if (session('access.denied'))
        <div class="alert alert-danger">
            {{ session('access.denied') }}
        </div>
    @endif

    <!-- WELCOME CATEGORIES----------------------------------- -->
    <section id="welcomeCategories" class="container-fluid custom-scroll w-100 bgLightGrey">

        <div class="row custom-100vh m-0">

            <div class="swiper mySwiper3 swParticles">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide swiperBg">
                        <a href="{{ route('outwear') }}">
                            <div class="boxCategoryOutwear " data-tilt>
                                <img src="/img/outwear.png" alt="{{__('ui.outwear')}}"  class=" imgOutwear">
                                <h2 class="popUpNameOutwear element">
                                    {{ __('ui.outwear') }}
                                </h2>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiperBg">
                        <a href="{{ route('accessories') }}">
                            <div class="boxCategoryAccessories "data-tilt>
                                <img src="/img/accessories.png" alt="{{__('ui.accessories')}}"  class="imgAccessories">
                                <h2 class="popUpNameAccessories element">{{ __('ui.accessories') }}</h2>
                            </div>
                        </a>
                        
                    </div>
                    <div class="swiper-slide swiperBg">
                        <a href="{{ route('clothing') }}">
                            <div class="boxCategoryClothing "data-tilt>
                                <img src="/img/clothing.png" alt="{{__('ui.clothing')}}"  class="imgClothing">
                                <h2 class="popUpNameClothing element">{{ __('ui.clothing') }}</h2>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide swiperBg">
                        <a href="{{ route('footwear') }}">
                            <div class="boxCategoryFootwear "data-tilt>
                                <img src="/img/footwear.png" alt="{{__('ui.footwear')}}"  class="imgFootwear">
                                <h2 class="popUpNameFootwear element">{{ __('ui.footwear') }}</h2>
                                
                            </div>
                        </a>
                    </div>
                </div>
                <div class="swiper-button-next swiper-button-next-custom-welcome" data-tilt></div>
                <div class="swiper-button-prev swiper-button-prev-custom-welcome" data-tilt></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>
    <!-- END WELCOME CATEGORIES------------------------------- -->

    <!-- LAST ARTICLES---------------------------------------- -->
    <section id="lastArtHome" class="container-fluid custom-scroll bgBlack">
        <div class="row custom-100vh">
            <div class="col-12 col-md-2"></div>

            <div class="col-12 col-md-8 d-flex justify-content-center align-items-center flex-column">

                <div class="mb-5 pb-5 formatTitlePages">
                    {{__('ui.lastArticles')}}
                </div>

                <div class="swiper swiper-welcome mySwiper1 mt-5">
                    <div class="swiper-wrapper mx-5">
                        {{-- INIZIO SCHEDA SWIPER RIPETUTA --}}
                        @foreach ($articles as $article)
                            <div class="swiper-slide swiper-slide-welcome">

                                <a href="{{ route('detArticle', $article->slug) }}">
                                    <div class="cardPreview rgbPreview">
                                        <div>
                                            <img src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                                class="card-imagePreview img-fluid" alt="immagine articolo">
                                        </div>
                                        <div class="card-textPreview">
                                            <span class="sellDatePreview">
                                                {{ $article->user->name ?? '' }}</span>
                                            <span class="sellDatePreview"> | </span>
                                            <span
                                                class="sellDatePreview">{{ $article->created_at->format('d/m/Y') }}</span>
                                            <h2>{{ $article->title }}</h2>
                                            <p>
                                                {{-- categoria inglese --}}
                                                @if (__('ui.category') == 'Category')
                                                    <small> {{ $article->category->name ?? '' }}</small>
                                                @endif
                                                {{-- categoria italiano --}}
                                                @if (__('ui.category') == 'Categoria')
                                                    <small> {{ $article->category->nameit ?? '' }}</small>
                                                @endif
                                                {{-- categoria spagnolo --}}
                                                @if (__('ui.category') == 'Categoría')
                                                    <small> {{ $article->category->namees ?? '' }}</small>
                                                @endif
                                                {{-- categoria giapponese --}}
                                                @if (__('ui.category') == '部門')
                                                    <small> {{ $article->category->namejp ?? '' }}</small>
                                                @endif
                                            </p>
                                            <p>
                                                {{ $article->price }}€
                                            </p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        @endforeach
                        {{-- FINE SCHEDA SWIPER RIPETUTA --}}
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>

            <div class="col-12 col-md-2"></div>
        </div>
    </section>
    <!-- END LAST ARTICLES----------------------------------- -->

    {{-- FOOTER--------------------------------------------- --}}
    <div class="custom-100vh custom-scroll">
        <x-footer />
    </div>
    {{-- END FOOTER--------------------------------------------- --}}
</x-layout>
