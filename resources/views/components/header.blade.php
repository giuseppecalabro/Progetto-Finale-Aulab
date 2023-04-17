<style>
    /* EFFETTO PAROLE */




    @keyframes changetext {
        0% {
            content: "{{ __('ui.outwearC') }}";
        }

        33% {
            content: "{{ __('ui.sweatersC') }}";
        }

        66% {
            content: "{{ __('ui.necklacesC') }}";
        }

        100% {
            content: "{{ __('ui.shoesC') }}";
        }
    }
</style>

<header class="container-fluid custom-scroll w-100 bgBlack">
    <section class="row custom-100vh">
        <div class="main">
            <div class="d1"></div>
            <div class="d2"></div>
            <div class="d3">
                @if (session('message'))
                    <div class="alert alert-success fs-5">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="d4"></div>
            <div class="d5">
                <div class="container">
                    <div class="row ">
                        {{-- div wrapper mediaquery --}}
                        <div class="mqWrapperHeader">

                            <div class="col-12 textGold d-flex flex-column align-items-end">
                                <h1 class="presto">{{ __('ui.prestoIt') }}</h1>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-3"></div>
                                <div class="col-12 col-md-3 d-flex  justify-content-end align-items-end">
                                    <!-- <a href="" class="btn btnCustom fw-bold fs-4 me-3">SCOPRI TUTTO</a>
                              <a href="" class="btn btnCustom fw-bold fs-4">INIZIA A VENDERE</a> -->
                                </div>
                                <div class="col-12 col-md-5 align-items-end d-flex flex-row flex-md-column">
                                    <p
                                        class="d-none d-md-flex display-1 m-0 fw-bold lh-custom mqHeader textWhiteSmoke bgGold me-3 pt-2 pb-3 px-3">
                                        {{ __('ui.buy') }}</p>
                                    <p
                                        class="d-none d-md-flex display-2 m-0 fw-bold lh-custom mqHeader textWhiteSmoke bgGold me-3 my-1 pt-2 pb-3 px-3">
                                        {{ __('ui.sell') }}</p>
                                    <div class="text-center">
                                        <p
                                            class="usato d-none d-md-flex display-2 m-0 fw-bold lh-custom mqHeader textWhiteSmoke bgGold me-3 pt-2 pb-3 px-3">
                                            {{ __('ui.used') }}</p>
                                    </div>
                                </div>
                                <div class="col-12 justify-content-center d-flex mt-3">
                                    <p class="change_content d-none d-md-block"></p>
                                </div>

                            </div>
                            {{-- div giù fine wrapper  --}}
                        </div>
                        <div class="row posButtonHeader">
                            <div class="col-12 col-md-3 ms-2"></div>
                            <div class="col-12 col-md-8">
                                <div class="d-flex mt-3 justify-content-center">
                                    <a href="{{ route('allArticle') }}"
                                        class="btn btnCustomHeader fw-bold fs-4 me-5">{{ __('ui.allCategories') }}</a>
                                    <a href="{{ route('addArticle') }}"
                                        class="btn btnCustomHeader fw-bold fs-4">{{ __('ui.startSelling') }}</a>
                                </div>
                            </div>
                            <div class="col-12 col-md-1"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
