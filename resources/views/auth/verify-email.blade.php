<x-layout>

    <div class="container-fluid bgWhiteSmoke">
        <div class="row min-vh-100">
            <div class="col-12 col-md-12 bgArticle d-flex flex-column justify-content-center align-items-center">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <h1 class="formatTitlePages">Verifica la tua mail!</h1>
                <h3 class="textLightGrey">Per richiedere di lavorare con noi è necessario verificare la tua mail</h3>

                <form action="{{ route('verification.send') }}" method="post">
                    @csrf
                    <button type="submit" class="btn glassButtons textWhiteSmoke p-3 mt-5 fs-5">Reinvia Verifica Email</button>
                </form>

            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout>
