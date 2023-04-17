<x-layout>
    <x-slot name="title">{{__('ui.indexRevTitle')}}</x-slot>
    <section id="slotLayout" class="container-fluid custom-scroll w-100 bgLightGrey">
        <div class="row min-vh-100   text-center">

            @if ($article_to_check)
                <div class="container">
                    <div class="row justify-content-center">
                        <h1 class="mb-5 formatTitlePages">{{__('ui.revisionZone')}}</h1>
                        <div class="col-11 col-md-8">
                            @forelse ($article_to_check as $article)
                                <div class="accordion accordion-flush mb-2">
                                    <div class="accordion-item">

                                        <h2 class="accordion-header bgDark">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne{{ $article->id }}"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                {{ __('ui.title') }}: {{ $article->title }} - {{ __('ui.seller') }}:
                                                {{ $article->user->name }}
                                            </button>
                                        </h2>

                                        <div id="flush-collapseOne{{ $article->id }}"
                                            class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                                            data-bs-parent="#accordionFlushExample">

                                            <div class="accordion-body">

                                                @if ($article->images)
                                                    <div class="d-md-flex justify-content-center">
                                                        @foreach ($article->images as $image)
                                                            <div class="img-preview mx-auto mx-md-3 col-1">
                                                                <img src="{{ $image->getUrl(400, 300) }}"
                                                                    class="img-fluid rounded border" alt="{{$image->article->title}}">
                                                            </div>
                                                            <div class="col-1 d-flex flex-column">
                                                                <h5>Rating</h5>
                                                                <p>{{__('ui.adults')}} <span class="{{ $image->adult }}"></span></p>
                                                                <p>{{__('ui.satire')}} <span class="{{ $image->spoof }}"></span></p>
                                                                <p>{{__('ui.medicine')}} <span class="{{ $image->medical }}"></span>
                                                                </p>
                                                                <p>{{__('ui.violence')}} <span
                                                                        class="{{ $image->violence }}"></span></p>
                                                                <p>{{__('ui.winking')}} <span
                                                                        class="{{ $image->racy }}"></span></p>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @endif
                                                <div class="row align-items-center">
                                                    <div class="col-12 col-md-6">

                                                        {{-- categoria inglese --}}
                                                        @if (__('ui.category') == 'Category')
                                                            <p class="fs-5"> {{ __('ui.category') }}:
                                                                {{ $article->category->name }}</p>
                                                        @endif
                                                        {{-- categoria italiano --}}
                                                        @if (__('ui.category') == 'Categoria')
                                                            <p class="fs-5"> {{ __('ui.category') }}:
                                                                {{ $article->category->nameit }}</p>
                                                        @endif
                                                        {{-- categoria spagnolo --}}
                                                        @if (__('ui.category') == 'Categoría')
                                                            <p class="fs-5"> {{ __('ui.category') }}:
                                                                {{ $article->category->namees }}</p>
                                                        @endif
                                                        {{-- categoria giapponese --}}
                                                        @if (__('ui.category') == '部門')
                                                            <p class="fs-5"> {{ __('ui.category') }}:
                                                                {{ $article->category->namejp }}</p>
                                                        @endif
                                                        <div class="fs-5">
                                                            {{ __('ui.description') }}:
                                                            {{ $article->description }}<br>
                                                            {{ __('ui.price') }}: {{ $article->price }}€<br>
                                                            {{ __('ui.city') }}: {{ $article->city }}<br>
                                                        </div>

                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <h5>TAGS</h5>
                                                        @if ($image->labels)
                                                            @foreach ($image->labels as $label)
                                                                <span>{{ $label }}, </span>
                                                            @endforeach
                                                        @endif

                                                    </div>
                                                </div>




                                                <div class="d-flex justify-content-around mt-5">
                                                    <form
                                                        action="{{ route('acceptArticle', ['article' => $article]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('patch')
                                                        <button type="submit"
                                                            class="btn btn-success">{{ __('ui.accept') }}</button>
                                                    </form>

                                                    <!-- Button modale -->
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{$article->id}}">
                                                        {{ __('ui.deny') }}
                                                    </button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                      <!-- Modal -->
                                      <div class="modal fade" id="exampleModal{{$article->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
    
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    {{ __('ui.areYouSure') }}
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning"
                                                        data-bs-dismiss="modal">{{ __('ui.cancel') }}</button>
                                                    <form action="{{ route('rejectArticle', ['article' => $article]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('patch')
                                                        <button type="submit"
                                                            class="btn btn-danger">{{ __('ui.deny') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @empty
                                <div class="alert alert-success">{{ __('ui.noAnnouncementsToReview') }}</div>


                          
                            @endforelse

                        </div>
                    </div>
                </div>
            @endif

        </div>
        <x-footer />
    </section>
</x-layout>
