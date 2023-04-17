<x-layout>
    {{-- categoria inglese --}}
    @if (__('ui.category') == 'Category')
        <x-slot name="title">Presto.it - {{ __('ui.category') }}: {{ $category->name }}</x-slot>
    @endif

    @if (__('ui.category') == 'Categoria')
        <x-slot name="title">Presto.it - {{ __('ui.category') }}: {{ $category->nameit }}</x-slot>
    @endif

    @if (__('ui.category') == 'Categoría')
        <x-slot name="title">Presto.it - {{ __('ui.category') }}: {{ $category->namees }}</x-slot>
    @endif

    @if (__('ui.category') == '部門')
        <x-slot name="title">{{ __('ui.prestoIt') }} - {{ __('ui.category') }}: {{ $category->namejp }}</x-slot>
    @endif



    <section class="container-fluid bgArticle">
        <div class="row min-vh-100 m-0  text-center">

            <div class="container">
                <div class="row">
                    {{-- categoria inglese --}}
                    @if (__('ui.category') == 'Category')
                        <h1 class="formatTitlePages text-uppercase mb-5">{{ $category->name }}</h1>
                    @endif
                    {{-- categoria italiano --}}
                    @if (__('ui.category') == 'Categoria')
                        <h1 class="formatTitlePages text-uppercase mb-5">{{ $category->nameit }}</h1>
                    @endif
                    {{-- categoria spagnolo --}}
                    @if (__('ui.category') == 'Categoría')
                        <h1 class="formatTitlePages text-uppercase mb-5">{{ $category->namees }}</h1>
                    @endif
                    {{-- categoria inglese --}}
                    @if (__('ui.category') == '部門')
                        <h1 class="formatTitlePages text-uppercase mb-5">{{ $category->namejp }}</h1>
                    @endif
                    @forelse ($category->articles as $article)
                        @if ($article->is_accepted)
                            <div class="col-12 col-md-4 d-flex justify-content-center">
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
                            </div>
                            @endif
                        @empty
                            <div>
                                <h2 class="textWhiteSmoke">{{ __('ui.noOtherArticles') }}</h2>
                            </div>
                    @endforelse
                </div>
            </div>

        </div>
        <x-footer/>
    </section>
</x-layout>
