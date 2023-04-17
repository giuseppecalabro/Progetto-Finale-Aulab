<x-layout>
<div class="container-fluid bgLightGrey min-vh-100">


<div class="container pt-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center">
               {{-- Immagine profilo --}}
                {{-- @if (Auth::user()->provider == 'google' || Auth::user()->provider == 'github') --}}
                    <img class="img_user_profile mt-5" width="150px" height="150px" src="{{Auth::user()->imgprofile}}">
                {{-- @elseif (Auth::user()->provider == null && Auth::user()->imgprofile != null)
                    <img class="rounded-circle mt-5" width="150px" height="150px" src="{{ Storage::url('imgProfile') }}/{{Auth::user()->imgprofile}}">
                @else
                    <img class="rounded-circle mt-5" width="150px" height="150px" src="https://picsum.photos/200">
                @endif --}}

                @if (session('success_img'))

                    <div class="alert alert-success" role="alert">

                        {{ session('success_img') }}

                    </div>

                @endif
                {{-- Cambia immagine profilo --}}
                {{-- @if (Auth::user()->provider == null) --}}
                <form action="{{route('updateImgProfile')}}" method="post" class="mb-3" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <input type="file" class="form-control my-2 @error('imgprofile') is-invalid @enderror" name="imgprofile" required>
                    @error('imgprofile')<span class="invalid-feedback" role="alert">{{ $message }}</span>

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
                <a type="button" class="btn btnProfile mt-3" href="{{route('showmyarticle')}}">{{__('ui.myannouncements')}}</a>
                
                {{-- bottone per verificare email se non sei già verificato --}}
                @if (Auth::user()->email_verified_at == null)

                    <form action="{{ route('verification.send') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btnProfile my-3">{{__('ui.resendemailverification')}}</button>
                    </form>

                 @endif
            </div>
        </div>

        
        <div class="col-md-5 border-right mx-auto">

            @if (session('success_save'))

                    <div class="alert alert-success" role="alert">

                        {{ session('success_save') }}

                    </div>

                @endif

            {{-- inserisci dati utente --}}
            <div class="p-3 py-5 mt-3">
                @if (!$user->userdetail)
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">{{__('ui.enteryourdata')}}</h4>
                    </div>
                    <form action="{{route('saveDetails')}}" method="post">
                        @csrf
                        @method('put')

                        <div class="row mt-2">
                            <div class="col-md-5">
                                <label class="labels">{{ __('ui.nameprofile') }}</label>
                                <input type="text" class="form-control" placeholder="first name" value="" name="firstname">
                            </div>
                            <div class="col-md-5 ms-auto">
                                <label class="labels">{{ __('ui.surnameprofile') }}</label>
                                <input type="text" class="form-control" value="" placeholder="surname" name="surname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.phoneprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter phone number" value="" name="phone">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.addressprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter address" value="" name="address">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.postcodeprofile') }}</label>
                                <input type="number" class="form-control" placeholder="enter Postcode" value="" name="postcode">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.cityprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter City" value="" name="city">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.countryprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter country" value="" name="country">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.stateprofile') }}</label>
                                <input type="text" class="form-control" value="" placeholder="enter state" name="state">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btnProfile profile-button" type="submit">{{__('ui.savedatabutton')}}</button>
                        </div>
                    </form>
                @else
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">{{__('ui.updateyourdata')}}</h4>
                    </div>

                    {{-- Aggiorna i dati utente --}}
                    <form action="{{route('updateDetails')}}" method="post">
                        @csrf
                        @method('patch')

                        <div class="row mt-2">
                            <div class="col-md-5">
                                <label class="labels">{{ __('ui.nameprofile') }}</label>
                                <input type="text" class="form-control" placeholder="first name" value="{{$user->userdetail->firstname}}" name="firstname">
                            </div>
                            <div class="col-md-5 ms-auto">
                                <label class="labels">{{ __('ui.surnameprofile') }}</label>
                                <input type="text" class="form-control" value="{{$user->userdetail->surname}}" placeholder="surname" name="surname">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.phoneprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter phone number" value="{{$user->userdetail->phone}}" name="phone">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.addressprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter address" value="{{$user->userdetail->address}}" name="address">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.postcodeprofile') }}</label>
                                <input type="number" class="form-control" placeholder="enter Postcode" value="{{$user->userdetail->postcode}}" name="postcode">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.cityprofile') }}</label>
                                <input type="text" class="form-control" placeholder="enter City" value="{{$user->userdetail->city}}" name="city">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.countryprofile') }}</label>
                                <input type="text" class="form-control" placeholder="country" value="{{$user->userdetail->country}}" name="country">
                            </div>
                            <div class="col-md-12">
                                <label class="labels">{{ __('ui.stateprofile') }}</label>
                                <input type="text" class="form-control" value="{{$user->userdetail->state}}" placeholder="state" name="state">
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btnProfile" type="submit">{{__('ui.updatedatabutton')}}</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
<x-footer></x-footer>
</x-layout>

