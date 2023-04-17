<x-layout>
    <x-slot name="title">{{__('ui.changePassTitle')}}</x-slot>
    <div class="container-fluid bgBlack vh-100 d-flex flex-column align-items-center justify-content-center imageReset">
        <h1 class="formatTitlePages">{{__('ui.changePass')}}</h1>
        <div class="formResetPassword text-center">
            <form action="{{ route('password.update') }}" method="post">
                @csrf

                <input type="hidden" name="token" value="{{ $request->token }}">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {{-- <div class="form-group"> --}}
                    <div class="form-group text-center d-flex flex-column align-items-center loginBox">
                        <input type="email" id="email" class="inputReset" @error('email') is-invalid @enderror
                            name="email" value="{{ $request->email }}" required>
                        <span class="spanReset">{{__('ui.insert')}}{{__('ui.email')}}</span>
                        <i class="i"></i>
                    </div>
                    @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                {{-- </div> --}}

                <div class="form-group">
                    <div class="form-group text-center d-flex flex-column align-items-center loginBox">
                        <input type="password" id="password" class="inputPassword"
                            @error('password') is-invalid @enderror name="password" required>
                        <span class="spanReset">{{__('ui.insert')}}{{__('ui.password')}}</span>
                        <i class="i"></i>
                        <p class="fa-regular fa-eye eyePassword"></p>
                    </div>
                    {{-- @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror --}}
                </div>

                <div class="form-group">
                    <div class="form-group text-center d-flex flex-column align-items-center loginBox">
                        <input type="password" id="password-confirm" class="inputPassword"
                            @error('password') is-invalid @enderror name="password_confirmation" required>
                        <span class="spanReset">{{__('ui.passwordConfirmation')}}</span>
                        <i class="i"></i>
                    </div>
                    @error('password')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group mt-5">
                    <button type="submit" class="btn btnResetPass">{{__('ui.changePass')}}</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
