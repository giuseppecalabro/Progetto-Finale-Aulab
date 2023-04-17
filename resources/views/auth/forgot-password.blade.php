<x-layout>
    <x-slot name="title">{{__('ui.forgotPassTitle')}}</x-slot>

    <div class="container-fluid vh-100 d-flex flex-column align-items-center justify-content-center bgBlack imageForgot">
        <div class="col-12 d-flex justify-content-center">

            <div class="forgotPassForm ">
                <i class="fa-solid fa-lock text-center fa-5x textGold mb-md-5 pt-1"></i>
                <h2 class="formatTitlePages my-3 mb-5">{{__('ui.problem')}}</h2>
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf

                    <div class="form-group text-center d-flex flex-column align-items-center loginBox">
                        <p class="mb-4 w-75 textWhiteSmoke">{{__('ui.link')}}</p>
                        <input type="email" id="email" class="inputForgot" name="email" value="{{ old('email') }}"
                            placeholder="" required>
                        <span class="spanForgot"> {{__('ui.insert')}} {{__('ui.email')}}</span>
                        <i class="i"></i>


                    </div>

                    <span class="text-danger">
                        @error('email')
                            <p class="alert alert-danger mt-3">{{ $message }}</p>
                        @enderror
                    </span>

                    <div class="form-group my-5 text-center">
                        <button type="submit" class="btn btnForgot">{{__('ui.reset')}}</button>
                    </div>
                    
                    <div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
