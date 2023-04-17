<x-layout>
    <x-slot name="title">{{__('ui.addArticleTitle')}}</x-slot>

    <section id="slotLayout" class="container-fluid custom-scroll w-100 bgLightGrey">
        <div class="row m-0 align-items-center text-center cstm-about-bg">



            {{-- MESSAGGIO PASSWORD AGGIORNATA DOPO REGISTRAZIONE SOCIALITE --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <livewire:create-article/>
                    </div>
                </div>
            </div>
        
            

        </div>
        <div class="custom-scroll">
            <x-footer/>
        </div>
    </section>
</x-layout>
