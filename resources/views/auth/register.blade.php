<x-layout>
    <x-slot name="title">{{ __('ui.prestoIt') }} - {{ __('ui.register') }}</x-slot>

    <div class="container-fluid bgBlack vh-100 d-flex flex-column align-items-center justify-content-center bgImageRegister">
     
        <h1 class="customLogin formatTitlePages py-3">{{ __('ui.prestoIt') }}</h1>
        <h4 class="customLogin text-uppercase ">{{ __('ui.regOnWebSite') }}</h4>
        <div class=" formResetPassword text-center  ">
            <form method="POST" action="{{ route('register') }}">
                @csrf



                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif


                <div class="form-group ">
                    <div class=" loginBox">
                        <input type="email" name="email" required="required" value="{{ old('email') }}">
                        <span>{{ __('ui.email') }}</span>
                        <i></i>
                    </div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <div class=" loginBox">
                        <input type="text" name="name" required="required" value="{{ old('name') }}">
                        <span>{{ __('ui.username') }}</span>
                        <i></i>
                    </div>
                    {{-- @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror --}}
                </div>

                <div class="form-group ">
                    <div class=" loginBox ">
                        <input class="inputPassword " type="password" name="password" required="required">
                        <span>{{ __('ui.password') }}</span>
                        <i></i>

                        {{-- da rivedere qui --}}
                        <p class="fa-regular fa-eye eyePassword eyePasswordRegLog"></p>
                    </div>
                    @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class=" loginBox">
                        <input class="inputPassword" type="password" name="password_confirmation" required="required">
                        <span>{{ __('ui.passwordConfirmation') }}</span>
                        <i></i>
                    </div>
                </div>
                
                

                <div class="form-group mt-5">
                    <button type="submit" class="btn btnResetPass">{{__('ui.register')}}</button>
                </div>
                <div class="col-12 linksRegister customGoldTextLogin">
                    <a
                        href="{{ route('login') }}">{{ __('ui.existingAccount') }}<br>{{ __('ui.loginHere') }}</a>
                    <i></i>
                </div>
            </form>
        </div>
  
</div>
    <x-footer/>

</x-layout>

{{-- bgImageRegister --}}



{{-- VECCHIO FORM 1 --}}
{{-- <section id="slotLayout" class="container-fluid custom-scroll">
        <div class="row custom-100vh m-0 align-items-center text-center bgBlack">


                    <button type="submit" class="btnAccedi mt-5 mb-4">{{ __('ui.register') }}</button>
                </form>
                <div class="form-row">
                    <div class="col-12 linksRegister customGoldTextLogin">
                        <a class="glassButtons"
                            href="{{ route('login') }}">{{ __('ui.existingAccount') }}<br>{{ __('ui.loginHere') }}</a>
                        <i></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2 d-none d-md-block"></div>
        </div>

        <div class="custom-scroll">
            <x-footer/>
        </div>
    </section> --}}
{{-- VECCHIO FORM 1 --}}





{{-- VECCHIO FORM 2 --}}

{{-- <section class="form my-4 mx-5">
                <div class="container">
                    <div class="row rowCustomLogin no-gutters">

                        <div class="col-lg-5 p-0 m-0">
                            <img src="./img/registrazione.jpg" class="img-fluid imgCustomLogin"
                                alt="immagine registrazione di una donna con i fiori sul volto">
                        </div>

                        <div class="col-lg-7 px-5 pt-5">
                            <h1 class="customLogin font-weight-bold py-3">{{ __('ui.prestoIt') }}</h1>
                            <h4 class="customLogin">{{ __('ui.regOnWebSite') }}</h4>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-row">
                                    <div class="col-12 col-lg-7 col-md-6 loginBox">
                                        <input type="email" name="email" required="required">
                                        <span>{{ __('ui.email') }}</span>
                                        <i></i>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-lg-7 col-md-6 loginBox">
                                        <input type="text" name="name" required="required">
                                        <span>{{ __('ui.username') }}</span>
                                        <i></i>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-lg-7 col-md-6 loginBox">
                                        <input type="password" name="password" required="required">
                                        <span>{{ __('ui.password') }}</span>
                                        <i></i>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 col-lg-7 col-md-6 loginBox">
                                        <input type="password" name="password_confirmation" required="required">
                                        <span>{{ __('ui.passwordConfirmation') }}</span>
                                        <i></i>
                                    </div>
                                </div>


                                <input type="submit" class="btnAccedi mt-3 mb-4" value="Registrati">
                            </form>


                            

                            <div class="form-row">
                                <div class="col-12 col-lg-7 col-md-6 linksLogin customGoldTextLogin">
                                    <a
                                        href="{{ route('login') }}">{{ __('ui.existingAccount') }}<br>{{ __('ui.loginHere') }}</a>
                                    <i></i>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </section> --}}
