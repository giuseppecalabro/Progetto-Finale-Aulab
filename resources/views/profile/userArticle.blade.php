<x-layout>
<div class="container-fluid bgLightGrey min-vh-100">


    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center">
                    {{-- immagine profilo --}}
                    {{-- @if (Auth::user()->provider == 'google' || Auth::user()->provider == 'github') --}}
                        <img class="img_user_profile mt-5" width="150px" height="150px" src="{{ Auth::user()->imgprofile }}" alt="immagine profilo">
                    {{-- @elseif (Auth::user()->provider == null && Auth::user()->imgprofile != null)
                        <img class="rounded-circle mt-5" width="150px" height="150px"
                            src="{{ Storage::url('imgProfile') }}/{{ Auth::user()->imgprofile }}">
                    @else
                        <img class="rounded-circle mt-5" width="150px" height="150px" src="https://picsum.photos/200">
                    @endif --}}

                    @if (session('success_img'))
                        <div class="alert alert-success" role="alert">

                            {{ session('success_img') }}

                        </div>
                    @endif
                    {{-- cambia immagine profilo --}}
                    {{-- @if (Auth::user()->provider == null) --}}
                        <form action="{{ route('updateImgProfile') }}" method="post" class="mb-3"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <input type="file" class="form-control my-2 @error('imgprofile') is-invalid @enderror"
                                name="imgprofile" required>
                            @error('imgprofile')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                            <button type="submit" class="btn btnProfile">{{ __('ui.changeimgprofile') }}</button>
                        </form>
                    {{-- @endif --}}
                    {{-- dettagli utente --}}
                    <div class="d-flex flex-column align-items-start mt-5">
                        <span class="text-black-50 my-1">{{ __('ui.usernameprofile') }}: {{ $user->name }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.emailprofile') }}: {{ $user->email }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.nameprofile') }}: {{ $user->userdetail->firstname ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.surnameprofile') }}: {{ $user->userdetail->surname ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.phoneprofile') }}: {{ $user->userdetail->phone ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.addressprofile') }}: {{ $user->userdetail->address ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.postcodeprofile') }}: {{ $user->userdetail->postcode ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.cityprofile') }}: {{ $user->userdetail->city ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.countryprofile') }}: {{ $user->userdetail->country ?? '' }}</span>
                        <span class="text-black-50 my-1">{{ __('ui.stateprofile') }}: {{ $user->userdetail->state ?? '' }}</span>
                    </div>

                    {{-- bottone per passare vista tuoi articoli --}}
                    <a type="button" class="btn btnProfile mt-3" href="{{ route('profile') }}">{{__('ui.changedataprofilebutton')}}</a>
                    
                    {{-- bottone per verificare email se non sei già verificato --}}
                    @if (Auth::user()->email_verified_at == null)

                        <form action="{{ route('verification.send') }}" method="post">
                            @csrf
                            <button type="submit" class="btn btnProfile my-3">{{__('ui.resendemailverification')}}</button>
                        </form>

                    @endif
                </div>
            </div>


            <div class="col-12 col-md-8 border-right mx-auto">

                @if (session('success_delete'))
                    <div class="alert alert-success" role="alert">

                        {{ session('success_delete') }}

                    </div>
                @endif
                    {{-- card degli articoli creati dall'utente --}}
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">{{__('ui.yourannouncements')}}</h4>
                    </div>

                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-12 col-md-5">
                                
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
                                
                                    <div class="text-center">
                                        <form action="{{ route('deleteArticle', compact('article') )}}" method="POST">
                                            @csrf
                                            @method('delete')
                                        
                                            <button type="submit" class="btn btn-danger" name="delete" value="">{{__('ui.deletebutton')}}</button>
                                        </form>
                                    
                                    </div>
                            </div>

                        
                        @endforeach

                        {{-- PAGINAZIONE --}}
                        <div class="d-flex justify-content-center my-5">
                            {{ $articles->links() }}
                        </div>
                        {{-- END PAGINAZIONE --}}

                    </div>

                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</div>
</x-layout>
