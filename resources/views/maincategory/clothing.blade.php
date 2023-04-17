<x-layout>
    <x-slot name="title">{{ __('ui.prestoIt') }} - {{ __('ui.clothing') }}</x-slot>

    <section id="slotLayout" class="container-fluid   ">
        <div class="row min-vh-100  bgArticle ">
            <h2 class="text-center my-3 formatTitlePages text-uppercase">{{ __('ui.clothing') }}</h2>
            @forelse ($articles as $article)
                    <div class="col-12 col-md-4 d-flex justify-content-center ">

                        <a href="{{ route('detArticle', $article->slug) }}">

                            <div class="card rgb" data-tilt>
                                <div>
                                    <img src="{{ !$article->images()->get()->isEmpty()? $article->images()->first()->getUrl(400, 300): 'https://picsum.photos/200' }}"
                                        class="card-image img-fluid" alt="immagine articolo">
                                </div>
                                <div class="card-text">
                                    <span class="sellDate">
                                        {{ $article->user->name ?? '' }}</span>
                                    <span class="sellDate"> | </span>
                                    <span class="sellDate">{{ $article->created_at->format('d/m/Y') }}</span>
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
               

            @empty
                <div class="alert alert-warning">
                    <p>{{ __('ui.researchZeroResults') }}</p>
                </div>
            @endforelse


            {{-- PAGINAZIONE --}}
            {{-- <div class="d-flex justify-content-center my-5">
                {{ $articles->links() }}
            </div> --}}
            {{-- END PAGINAZIONE --}}
      
            
            
        </div>
        <x-footer/>
    </section>
</x-layout>