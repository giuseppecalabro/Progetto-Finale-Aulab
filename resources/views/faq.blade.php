<x-layout>
    <x-slot name="title">{{ __('ui.faqTitle') }}</x-slot>
    <section class="container-fluid bgLightGrey">
        <div class="row min-vh-100 justify-content-center">
            <div class="col-12 text-center">
                <h2 class="formatTitlePages"> {{ __('ui.FAQ') }}</h2>
            </div>
            <div class="col-12 col-md-8">

                {{-- ACCORDION SPEDIZIONI --}}
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-heading1">
                            <button class="accordion-button fs-5  collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                                {{ __('ui.FirstFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">{{ __('ui.FirstFaqA') }}
                                <br>
                                {{ __('ui.FirstFaqB') }}
                                <br>
                                <ul><strong>{{ __('ui.FirstFaqC') }}</strong>
                                    <li>{{ __('ui.FirstFaqD') }} <strong>{{ __('ui.prestoIt') }}</strong> - {{ __('ui.FirstFaqE') }}</li>
                                    <li>{{ __('ui.FirstFaqF') }}</li>
                                </ul>
                                {{ __('ui.FirstFaqG') }}<strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.FirstFaqH') }}

                                <ul> <strong>{{ __('ui.FirstFaqI') }}</strong>
                                    <li>
                                        {{ __('ui.FirstFaqJ') }}<br>
                                        {{ __('ui.FirstFaqK') }} <strong>{{ __('ui.prestoIt') }}</strong>.
                                    </li>
                                    <li>
                                        {{ __('ui.FirstFaqL') }} <br>
                                        {{ __('ui.FirstFaqM') }} <br>
                                        {{ __('ui.FirstFaqN') }}
                                        <strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.FirstFaqO') }}
                                    </li>
                                    <li>
                                        {{ __('ui.FirstFaqP') }} <br>
                                        {{ __('ui.FirstFaqQ') }} <br>

                                        {{ __('ui.FirstFaqR') }}
                                        <strong>{{ __('ui.prestoIt') }}</strong>.
                                        <br>
                                        {{ __('ui.FirstFaqS') }}

                                    </li>
                                    <li>
                                        {{ __('ui.FirstFaqT') }} <br>
                                        {{ __('ui.FirstFaqU') }}  <br> <br>
                                        {{ __('ui.FirstFaqV') }}
                                    </li>
                                    <ul><strong> {{ __('ui.FirstFaqW') }}</strong>
                                        <li>
                                            {{ __('ui.FirstFaqX') }}
                                        </li>
                                        <li>
                                            {{ __('ui.FirstFaqY') }}
                                        </li>
                                        <br>
                                        {{ __('ui.FirstFaqZ') }}
                                        <br>
                                        {{ __('ui.FirstFaq1') }}
                                    </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-heading2">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                {{ __('ui.SecFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">{{ __('ui.SecFaqA') }}
                                <br>
                                {{ __('ui.SecFaqB') }} <br><br>

                                {{ __('ui.SecFaqC') }} <br>
                                <ul>
                                    <li>{{ __('ui.SecFaqD') }}</li>
                                    <li>{{ __('ui.SecFaqE') }}</li>
                                    <li>{{ __('ui.SecFaqF') }}</li>
                                    <li>{{ __('ui.SecFaqG') }}</li>
                                    <li>{{ __('ui.SecFaqH') }}
                                        <strong>{{ __('ui.prestoIt') }}</strong>.</li>
                                    <li>{{ __('ui.SecFaqI') }}
                            </div>
                            </li>
                            </ul>






                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-heading3">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                {{ __('ui.ThirdFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">{{ __('ui.ThirdFaqA') }} <strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.ThirdFaqB') }}</div>
                        </div>
                    </div>
                </div>
                {{-- END ACCORDION SPEDIZIONI --}}


                {{-- ACCORDION PAGAMENTO --}}
                <p class="text-center formatTitlePages fs-1">{{ __('ui.payment') }}</p>
                <div class="accordion accordion-flush" id="accordionFlushExample1">
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                {{ __('ui.FourthFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body"> {{ __('ui.FourthFaqA') }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                {{ __('ui.FifthFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">{{ __('ui.FifthFaqA') }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingSix">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                {{ __('ui.SixthFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body"> {{ __('ui.SixthFaqA') }}
                                <strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.SixthFaqB') }} <br><br>

                                {{ __('ui.SixthFaqC') }} <strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.SixthFaqD') }}
                                <br>
                                {{ __('ui.SixthFaqE') }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingSeven">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                {{ __('ui.SeventhFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample1">
                            <div class="accordion-body">{{ __('ui.SeventhFaqA') }}
                                <br><br>
                                {{ __('ui.SeventhFaqB') }}<strong>{{ __('ui.prestoIt') }}</strong>..</div>
                        </div>
                    </div>
                </div>
                {{-- END ACCORDION PAGAMENTO --}}


                {{-- ACCORDION CAMBI E RESTITUZIONI --}}
                <p class="formatTitlePages fs-1 text-center">{{ __('ui.shipments') }}</p>
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingEight">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseEight" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                {{ __('ui.EighthFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body">{{ __('ui.EighthFaqA') }}. <br><br>
                                <ul><strong>{{ __('ui.EighthFaqB') }}</strong>
                                    <br>
                                    <br>
                                    <li>
                                        {{ __('ui.EighthFaqC') }}
                                        <strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.EighthFaqD') }} <br><br>
                                        {{ __('ui.EighthFaqE') }} <strong>{{ __('ui.prestoIt') }}</strong>, {{ __('ui.EighthFaqF') }}<strong>{{ __('ui.prestoIt') }}</strong>. <br><br>
                                        {{ __('ui.EighthFaqG') }}<br>
                                        {{ __('ui.EighthFaqH') }} 
                                    </li>
                                    <li>
                                        {{ __('ui.EighthFaqI') }} 
                                        <strong>{{ __('ui.prestoIt') }}</strong>. <br>
                                        <ul><strong>  {{ __('ui.EighthFaqJ') }} 
                                        </strong> 
                                            <li>
                                                {{ __('ui.EighthFaqK') }} {{ __('ui.prestoIt') }}, {{ __('ui.EighthFaqL') }} <br><br>
                                            </li>
                                            <li>
                                                {{ __('ui.EighthFaqM') }}<br>
                                                {{ __('ui.EighthFaqN') }} <br><br>
                                                {{ __('ui.EighthFaqO') }}<br>
                                                {{ __('ui.EighthFaqP') }} <br>
                                            </li>
                                            <li>
                                                {{ __('ui.EighthFaqQ') }} <br>
                                                {{ __('ui.EighthFaqR') }} <br><br>
                
                                                {{ __('ui.EighthFaqS') }} <br>
                                                {{ __('ui.EighthFaqT') }}<br><br>
                
                                                {{ __('ui.EighthFaqU') }} <br><br>
                
                                                {{ __('ui.EighthFaqV') }}
                                            </li>
                                        </ul>

                                    </li>

                                </ul>

                                


                                
                                


                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2">
                        <h2 class="accordion-header" id="flush-headingNine">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseNine" aria-expanded="false"
                                aria-controls="flush-collapseNine">
                                {{ __('ui.NinthFaq') }}

                            </button>
                        </h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample2">
                                {{ __('ui.NinthFaqA') }}
                                <div class="accordion-body"> <strong>{{ __('ui.prestoIt') }}</strong> {{ __('ui.NinthFaqB') }}                                    <strong>{{ __('ui.prestoIt') }}</strong>
                                    {{ __('ui.NinthFaqC') }} 
                                <strong>{{ __('ui.prestoIt') }}</strong>,  {{ __('ui.NinthFaqD') }}  <strong>{{ __('ui.prestoIt') }}</strong>.

                                {{ __('ui.NinthFaqE') }}
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item my-2 mb-5">
                        <h2 class="accordion-header" id="flush-headingTen">
                            <button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTen" aria-expanded="false"
                                aria-controls="flush-collapseTen">
                                {{ __('TenthFaq') }}
                            </button>
                        </h2>
                        <div id="flush-collapseTen" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample2">
                            <div class="accordion-body mb-5">{{ __('TenthFaqA') }}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END ACCORDION CAMBI E RESTITUZIONI --}}

            </div>

        </div>
        <x-footer />
    </section>
</x-layout>
