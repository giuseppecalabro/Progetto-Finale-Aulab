<x-layout>
    <x-slot name="title">Presto.it - {{ $article->title }}</x-slot>

    <section class="container-fluid bgBlack">
        <div class="row min-vh-100">


            <div class="pt-1 mt-5"></div>
            <div class="col-12 col-md-1 "></div>
            <div class="col-12 col-md-10 imgDetArticle bgGlassArticle  mt-5 mb-2 ms-2">
                {{-- CAROSELLO FOTO ARTICOLO --}}
                <div style="--swiper-navigation-color: rgb(255, 255, 255); --swiper-pagination-color: #fff"
                    class="swiper swiper-det mySwiper2 mySwiper2-det">
                    <div class="swiper-wrapper">

                        @if ($article->images)
                            @foreach ($article->images as $image)
                                <div class="swiper-slide swiper-slide-det">
                                    <img src="{{ Storage::url($image->path) }}" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $image->id }}" />
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide swiper-slide-det">
                                <img src="public/img/img_insert_pic.png" />
                            </div>
                        @endif

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper swiper-det mySwiper mySwiper-det">
                    <div class="swiper-wrapper">
                        @if ($article->images)
                            @foreach ($article->images as $image)
                                <div class="swiper-slide swiper-slide-det">
                                    <img src="{{ Storage::url($image->path) }}" />
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide swiper-slide-det">
                                <img src="public/img/img_insert_pic.png" />
                            </div>
                        @endif
                    </div>
                </div>

                {{-- END CAROSELLO FOTO ARTICOLO --}}
            </div>
            <div class="col-12 col-md-1"></div>
        </div>

        {{-- BOX INFORMAZIONI ARTICOLO-------------------------------- --}}
        <div class="row">
            {{-- BOX ARTICOLO: DESCRIONE---------------------------------- --}}
            <div class="col-12 col-md-1"></div>
            <div class="col-12 col-md-7 descDetArticle flex-column mx-2">
                <h1 class="formatTitlePages">{{ $article->title }}</h1>
                <h5>{{ $article->description }}</h5>
            </div>
            {{-- END BOX ARTICOLO: DESCRIONE---------------------------------- --}}
            {{-- BOX ARTICOLO: ALTRE INFO---------------------------------- --}}
            <div class="col-12 col-md-3 infoDetArticle">
                <ul>
                    {{-- categoria inglese --}}
                    @if (__('ui.category') == 'Category')
                        <li class="my-5 textGold h2">{{ __('ui.category') }}:
                            {{ $article->category->name ?? '' }}</li>
                    @endif
                    {{-- categoria italiano --}}
                    @if (__('ui.category') == 'Categoria')
                        <li class="my-5 textGold h2">{{ __('ui.category') }}:
                            {{ $article->category->nameit ?? '' }}</li>
                    @endif
                    {{-- categoria spagnolo --}}
                    @if (__('ui.category') == 'Categoría')
                        <li class="my-5 textGold h2">{{ __('ui.category') }}:
                            {{ $article->category->namees ?? '' }}</li>
                    @endif
                    {{-- categoria giapponese --}}
                    @if (__('ui.category') == '部門')
                        <li class="my-5 textGold h2">{{ __('ui.category') }}:
                            {{ $article->category->namejp ?? '' }}</li>
                    @endif


                        
                        @auth 
                        @if(Auth::user()->email_verified_at != null)
                        <p class="mt-5">Contatta venditore: </p>
                        <i class="fa-solid fa-phone me-2"></i> {{$article->user->userdetail->phone ?? ""}} <br>
                        <i class="fa-solid fa-at me-2"></i> {{$article->user->email ?? ""}}
                        @endif
                        @endauth
                </ul>


                
                <p class="btnPriceArticle">{{ $article->price }}€</p>
                {{-- <a href="#" class="btnBuy fw-bold fs-5 mb-3">{{ __('ui.addCart') }}</a> --}}

                <div class="card-textPreview">
                    <span class="sellDatePreview textLightGrey">

                        {{ $article->user->name ?? '' }}</span>
                    <span class="sellDatePreview textLightGrey"> | </span>
                    <span class="sellDatePreview textLightGrey">{{ $article->created_at->format('d/m/Y') }}</span>
                </div>
            </div>
            {{-- END BOX ARTICOLO: ALTRE INFO-------------------------------- --}}
            <div class="col-12 col-md-1"></div>
        </div>
        {{-- END BOX INFORMAZIONI ARTICOLO------------------------ --}}




        {{-- SEZIONE ARTICOLI CORRELATI STESSA CATEGORIA--------------- --}}
        <div class="row mt-5 pt-5">
            <div class="col-12 text-center formatTitlePages h2 ">{{__('ui.otherArticle')}}
            </div>
            <div class="mt-1"></div>
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-8">
                <!-- SWIPER -->
                <div class="swiper swiper-art-cat mySwiper4">
                    <div class="swiper-wrapper">
                        {{-- INIZIO SCHEDA SWIPER RIPETUTA --}}
                        @foreach ($categoryConnected as $article)
                        <div class="swiper-slide swiper-slide-art-cat">
                                <a href="{{ route('detArticle', $article->slug) }}">
                                    <div class="cardPreview rgbPreview me-5">
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

                    <!-- END SWIPER -->

                </div>
            </div>

            <!-- END SWIPER -->
        </div>
        <div class="col-12 col-md-2"></div>
        {{-- END SEZIONE ARTICOLI CORRELATI STESSA CATEGORIA------------- --}}
        </div>
        </div>
        {{-- <div class="mt-5">
        </div> --}}
        <x-footer />
    </section>
</x-layout>







{{-- MODALE IMMAGINI FORSE DA TOGLIERE --}}

<!-- Modal -->
{{-- @foreach ($article->images as $image)
                    <div class="modal modal-body-custom  fade" id="exampleModal{{$image->id}}" data-bs-keyboard="false"
                        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered ">
                            <div class="modal-content  ">
                                <div class="modal-body ">
                                  <img src="{{ Storage::url($image->path) }}" class="img-fluid" />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
