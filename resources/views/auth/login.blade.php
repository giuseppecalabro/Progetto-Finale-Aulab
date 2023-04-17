<x-layout>
    <x-slot name="title">{{ __('ui.loginTitle') }}</x-slot>

    <div class="container-fluid bgBlack vh-100 d-flex flex-column align-items-center justify-content-center bgImageLogin">
        <h1 class="customLogin formatTitlePages py-3">{{ __('ui.prestoIt') }}</h1>
        <h4 class="customLogin text-uppercase ">{{ __('ui.accessToAccount') }}</h4>
        <div class="formResetPassword text-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group ">
                    <div class="form-group text-center d-flex flex-column align-items-center loginBox">
                        <input type="email" name="email" required="required" value="{{ old('email') }}">
                        <span>{{ __('ui.email') }}</span>
                        <i></i>
                    </div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>


                <div class="form-group ">
                    <div class="form-group text-center d-flex flex-column align-items-center loginBox ">
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

                
                <div class="form-row mb-3">
                    <label class="customGoldTextLogin form-check-label mt-3"
                        for="exampleCheck1">{{ __('ui.rememberMe') }} <input id="exampleCheck1" type="checkbox"
                            class="form-check-input" name="remember">
                    </label>
                </div>
                

                <div class="form-group mt-5">
                    <button class="btn btnResetPass mb-4 px-5" type="submit">{{ __('ui.login') }}</button>
                    <div class="form-row">
                        <div class="col-12 customGoldTextLogin">
                            <div class=" linksLogin">
                                <a class=""
                                    href="{{ route('password.request') }}">{{ __('ui.forgotPassword') }}</a>
                                <a class=""
                                    href="{{ route('register') }}">{{ __('ui.noAccount') }}<br>{{ __('ui.register') }}</a>
                            </div>
                            <i></i>
                        </div>
                    </div>
                    {{-- ZONA LOGIN SOCIAL --}}
                    <div class="text-center ">
                        <hr>

                        {{-- MESSAGGIO CAMBIO PASSWORD SUCCESSO --}}
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{-- messaggio errore email già usata --}}
                        @if (session('email'))
                            <div class="alert alert-danger">
                                {{ session('email') }}
                            </div>
                        @endif

                        
                        <p class="lead text-center text-white">{{ __('ui.socialLogin') }}</p>

                        {{-- LOGIN GITHUB --}}
                        <a href="/auth/github/redirect" class="btn btn-success me-3"><i class="fa-brands fa-github"></i>
                            GitHub</a>
                        {{-- LOGIN GOOGLE --}}
                        <a href="/auth/google/redirect" class="btn btn-danger"><i class="fa-brands fa-google"></i>
                            Google</a>
                    </div>
                </div>





            </form>
        </div>
    </div>

    <x-footer/>


</x-layout>





{{-- <x-layout>
    <x-slot name="title">Presto.it - Accedi</x-slot>

    <section id="slotLayout" class="container-fluid custom-scroll w-100 bgBlack">
        <div class="row custom-100vh m-0 align-items-center text-center cstm-about-bg">



            <div class="col-12 col-lg-4 d-flex align-items-center custom-main-px">
                <div class="bgImageLogin">
                </div>
            </div>

            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-4">

                <h1 class="customLogin formatTitlePages py-3">{{ __('ui.prestoIt') }}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4 class="customLogin text-uppercase">{{ __('ui.accessToAccount') }}</h4>

                    <div class="form-row">
                        <div class="col-12 col-lg-7 col-md-6 loginBox">
                            <input type="email" name="email" required="required" value="{{old("email")}}">
                            <span>{{ __('ui.email') }}</span>
                            <i></i>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 col-lg-7 col-md-6 loginBox">
                            <input class="inputPassword" type="password" name="password" required="required">
                            <span>{{ __('ui.password') }}</span>
                            <i></i>
                            <p class="fa-regular fa-eye eyePassword eyePasswordRegLog"></p>
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <label class="customGoldTextLogin form-check-label mt-3"
                            for="exampleCheck1">{{ __('ui.rememberMe') }} <input id="exampleCheck1" type="checkbox"
                                class="form-check-input" name="remember">
                        </label>
                    </div>

                    <button class="btnAccedi mt-3 mb-5" type="submit">{{ __('ui.login') }}</button>
                    <div class="form-row">
                        <div class="col-12 customGoldTextLogin">
                            <div class=" linksLogin">
                                <a class="glassButtons"
                                    href="{{ route('password.request') }}">{{ __('ui.forgotPassword') }}</a>
                                <a class="glassButtons"
                                    href="{{ route('register') }}">{{ __('ui.noAccount') }}<br>{{ __('ui.register') }}</a>
                            </div>
                            <i></i>
                        </div>
                    </div>
                    ZONA LOGIN SOCIAL
                    <div class="text-center">
                        <hr>

                        MESSAGGIO CAMBIO PASSWORD SUCCESSO
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        messaggio errore email già usata
                        @if (session('email'))
                            <div class="alert alert-danger">
                                {{ session('email') }}
                            </div>
                        @endif

                        <p class="lead text-center text-white">{{ __('ui.socialLogin') }}</p>

                        LOGIN GITHUB
                        <a href="/auth/github/redirect" class="btn btn-success me-3"><i class="fa-brands fa-github"></i>
                            GitHub</a>
                        LOGIN GOOGLE
                        <a href="/auth/google/redirect" class="btn btn-danger"><i class="fa-brands fa-google"></i>
                            Google</a>
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>
        <div class="custom-scroll">
            <x-footer/>
        </div>
    </section>
</x-layout>



 --}}





{{-- 
    <section class="form my-4 mx-5">
        <div class="container">
            <div class="row rowCustomLogin no-gutters">
    
                <div class="col-lg-5 p-0 m-0">	
                    <img src="./img/login.jpg" class="img-fluid imgCustomLogin" alt="immagine login di una donna con i capelli al vento">
                </div>
    
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="customLogin font-weight-bold py-3">{{__('ui.prestoIt')}}</h1>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                    <h4 class="customLogin">{{__('ui.accessToAccount')}}</h4>
        
                        <div class="form-row">
                            <div class="col-12 col-lg-7 col-md-6 loginBox">
                                <input type="email" name="email" required="required">
                                <span >{{__('ui.email')}}</span>
                                <i></i>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-12 col-lg-7 col-md-6 loginBox">
                                <input type="password" name="password" required="required">
                                <span>{{__('ui.password')}}</span>
                                <i></i>
                            </div>
                        </div>
                        
                        <div class="form-row mb-3">
                            <label class="customGoldTextLogin form-check-label mt-3" for="exampleCheck1">{{__('ui.rememberMe')}} <input id="exampleCheck1" type="checkbox" class="form-check-input" name="remember">
                            </label>
                        </div>

                        <input class="btnAccedi mt-3 mb-5" type="submit" value="Accedi">


                        {{-- ZONA LOGIN SOCIAL --}}
{{-- <div class="text-center my-5">
                            <hr> --}}

{{-- MESSAGGIO CAMBIO PASSWORD SUCCESSO --}}
{{-- @if (session('status'))
                                <div class="alert alert-success">
                                    {{session('status')}}
                                </div>
                             @endif --}}

{{-- messaggio errore email già usata --}}
{{-- @if (session('email'))
                                <div class="alert alert-danger">
                                    {{ session('email') }}
                                </div>
                             @endif

                            <p class="lead text-center text-white">Accedi con i social</p>

                            {{-- LOGIN GITHUB --}}
{{-- <a href="/auth/github/redirect" class="btn btn-success"><i
                                    class="fa-brands fa-github"></i> GitHub</a> --}}
{{-- LOGIN GOOGLE --}}
{{-- <a href="/auth/google/redirect" class="btn btn-danger"><i
                                    class="fa-brands fa-google"></i> Google</a>

                        </div>

                        
                        <div class="form-row">
                            <div class="col-12 col-lg-7 col-md-6 linksLogin customGoldTextLogin">
                                <a href="{{route('password.request')}}">{{__('ui.forgotPassword')}}</a>
                                <a href="{{route('register')}}">{{__('ui.noAccount')}}<br>{{__('ui.register')}}</a>
                                <i></i>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
