<x-layout>
    <x-slot name="title">{{ __('ui.prestoIt') }} - {{ __('ui.aboutUs') }}</x-slot>
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>

    <section id="slotLayout" class="container-fluid oldBg">
        <div class="row mx-4">

        <div class="mt-5 pt-3"></div>

            <div class="col-12 col-md-2 d-none d-md-block"></div>
            <div class=" col-12 col-md-8 rpgui-container framed rpgui-pixelated rpgui-content text-center mt-5 mb-1">
                <h1 class="text-uppercase">{{ __('ui.aboutUs') }}</h1>
            </div>
            <div class="col-12 col-md-2 d-none d-md-block"></div>

{{-- BLOCCO PERSONALE: DOMENICO------------------------- --}}

            <div class="col-12 rpgui-container framed-golden-2 rpgui-content rpgui-pixelated p-0 m-0 mt-5">
                <h2>{{__('ui.wiseMan')}}</h2>
            </div>


            <div class="col-12 col-md-3">
                <div class="row">
                    {{-- COL IMG PROFILO --}}
                    <div class="col-12 imgBgAU img-fluid rpgui-container framed rpgui-pixelated rpgui-content" 
                    style="background-image: linear-gradient(rgba(51, 51, 51, 0.400), rgba(51, 51, 51, 0.400)), url(/img/domenico.jpeg);">
                    </div>
                </div>
                <div class="row">
                    {{-- COL IMG DESCR SOTTO FOTO --}}
                    <div class="col-12">
                        <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
                            <div class="rpgui-container framed ">
                                <p>Statistiche:</p>
                                <hr>
                                <label>Vita:</label>
                                <div id="hp-bar" class="rpgui-progress red" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill red" style="left: 0px; width: 50%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                                <label>Mana:</label>
                                <div id="mana-bar" class="rpgui-progress blue" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill blue" style="left: 0px; width: 100%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                                <label>Forza:</label>
                                <div id="stamina-bar" class="rpgui-progress green" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill green" style="left: 0px; width: 20%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                                <label>Esperienza:</label>
                                <div id="xp-bar" class="rpgui-progress" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill" style="left: 0px; width: 100%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- COLONNA GRANDE CON DESCRIZIONE PIENA --}}
            <div class="col-12 col-md-9">
                <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
                    <p class="rpgui-content rpgui-pixelated">
                        <label>{{__('ui.name')}}</label>
                        <input type="text" name="nomeEroe" value="Domenico"
                            placeholder="Nome Eroe">
                    </p>
                    <p class="rpgui-content rpgui-pixelated">
                        <label>{{__('ui.surname')}}</label>
                        <input type="text" name="cognomeEroe" value="Liuzzi"
                            placeholder="Cognome Eroe">
                    </p>
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <p class="rpgui-content rpgui-pixelated">
                                <label>{{__('ui.age')}}</label>
                                <input type="text" name="etaLettere" value="32"
                                    placeholder="Età Eroe">
                            </p>
                        </div>
                        <div class="col-12 col-md-2"></div>
                        <div class="col-12 col-md-5">
                            <p class="rpgui-content rpgui-pixelated">
                                <label>{{__('ui.cityA')}}</label>
                                <input type="text" name="città" value="IGNOTA"
                                    placeholder="Città Eroe">
                            </p>
                        </div>
                    </div>
                    <p class="rpgui-content rpgui-pixelated">
                        <label>{{__('ui.oldProfession')}}</label>
                    <div class="rpgui-container framed-grey"
                        style="width:100%; height:100%; left:0px; top:0px;">
                        <label>{{__('ui.domProf')}}</label>
                    </div>
                    </p>
                    <p class="rpgui-content rpgui-pixelated">
                        <label>{{__('ui.currentProfession')}}</label>
                    <div class="rpgui-container framed-grey"
                        style="width:100%; height:100%; left:0px; top:0px;">
                        <label>{{__('ui.domProfC')}}</label>
                    </div>
                    </p>
                    <p class="rpgui-content rpgui-pixelated">
                        <label>{{__('ui.biography')}}</label>
                    <div class="rpgui-container framed-grey"
                        style="width:100%; height:100%; left:0px; top:0px;">
                        <label>{{__('ui.domProfBio')}}</label>
                    </div>
                    </p>
                    <p class="rpgui-content rpgui-pixelated">
                        <label>{{__('ui.signature')}}</label>
                    <div class="rpgui-container framed-grey"
                        style="width:100%; height:100%; left:0px; top:0px;">
                        <label>446f6d656e69636f<br>204c69757a7a69</label>
                    </div>
                    </p>
                </div>
            </div>
{{-- END BLOCCO PERSONALE: DOMENICO------------------------- --}}

{{-- GIF ANIMATE 1 --}}
<div class="col-12 col-md-2 d-none d-md-block"></div>
<div class="col-12 col-md-8 d-flex justify-content-evenly mt-5">
    <span class="mx-1">
        <img src="/img/gifSuperMario/SM1.gif" alt="SuperMario" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifSuperMario/SM2.gif" alt="SuperMario" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifSuperMario/SM3.gif" alt="SuperMario" style="width:80px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifSuperMario/SM4.gif" alt="SuperMario" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifSuperMario/SM5.gif" alt="SuperMario" style="width: 50px; height:50px;">
    </span>
</div>
<div class="col-12 col-md-2 d-none d-md-block"></div>
{{-- END GIF ANIMATE 1 --}}


{{-- BLOCCO PERSONALE: GIUSEPPE C------------------------- --}}
<div class="col-12 rpgui-container framed-golden-2 rpgui-content rpgui-pixelated p-0 m-0 mt-5">
    <h2>{{__('ui.youngStudent')}}</h2>
</div>

{{-- COLONNA GRANDE CON DESCRIZIONE PIENA --}}
<div class="col-12 col-md-9">
    <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.name')}}</label>
            <input type="text" name="nomeEroe" value="Giuseppe"
                placeholder="Nome Eroe">
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.surname')}}</label>
            <input type="text" name="cognomeEroe" value="Calabrò"
                placeholder="Cognome Eroe">
        </p>
        <div class="row">
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.age')}}</label>
                    <input type="number" name="eta" value="24"
                        placeholder="Età Eroe">
                </p>
            </div>
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.cityA')}}</label>
                    <input type="text" name="città" value="Cosenza"
                        placeholder="Città Eroe">
                </p>
            </div>
        </div>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.oldProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.calProf')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.currentProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.calProfC')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.biography')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.calProfCBio')}}
            </label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.signature')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>while(alive){<br>&nbsp;eat();<br>&nbsp;sleep();<br>&nbsp;code();<br>&nbsp;repeat();<br>} </label>
        </div>
        </p>

    </div>
</div>
{{-- FINE COLONNA DESCRIZIONE PIENA------------- --}}
<div class="col-12 col-md-3">
    <div class="row">
        {{-- COL IMG PROFILO --}}
        <div class="col-12 imgBgAU img-fluid rpgui-container framed rpgui-pixelated rpgui-content" 
        style="background-image: linear-gradient(rgba(51, 51, 51, 0.400), rgba(51, 51, 51, 0.400)), url(/img/giuseppeC.png);">
        </div>
    </div>
    <div class="row">
        {{-- COL IMG DESCR SOTTO FOTO --}}
        <div class="col-12">
            <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
                <div class="rpgui-container framed ">
                    <p>Statistiche:</p>
                    <hr>
                    <label>Vita:</label>
                    <div id="hp-bar" class="rpgui-progress red" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill red" style="left: 0px; width: 70%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Mana:</label>
                    <div id="mana-bar" class="rpgui-progress blue" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill blue" style="left: 0px; width: 30%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Forza:</label>
                    <div id="stamina-bar" class="rpgui-progress green" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill green" style="left: 0px; width: 50%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Esperienza:</label>
                    <div id="xp-bar" class="rpgui-progress" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill" style="left: 0px; width: 85%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- END BLOCCO PERSONALE: GIUSEPPE C------------------------- --}}

{{-- GIF ANIMATE 2 --}}
<div class="col-12 col-md-2 d-none d-md-block"></div>
<div class="col-12 col-md-8 d-flex justify-content-evenly mt-5">
    <span class="mx-1">
        <img src="/img/gifStarWars/SW1.gif" alt="StarWars" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifStarWars/SW2.gif" alt="StarWars" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifStarWars/SW3.gif" alt="StarWars" style="width:80px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifStarWars/SW4.gif" alt="StarWars" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifStarWars/SW5.gif" alt="StarWars" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifStarWars/SW6.gif" alt="StarWars" style="width: 50px; height:50px;">
    </span>
</div>
<div class="col-12 col-md-2 d-none d-md-block"></div>
{{-- END GIF ANIMATE 2 --}}



{{-- BLOCCO PERSONALE: LUCA------------------------- --}}
<div class="col-12 rpgui-container framed-golden-2 rpgui-content rpgui-pixelated p-0 m-0 mt-5">
    <h2>{{__('ui.narrator')}}</h2>
</div>

<div class="col-12 col-md-3">
    <div class="row">
        {{-- COL IMG PROFILO --}}
        <div class="col-12 imgBgAU img-fluid rpgui-container framed rpgui-pixelated rpgui-content" 
        style="background-image: linear-gradient(rgba(51, 51, 51, 0.400), rgba(51, 51, 51, 0.400)), url(/img/luca.jpg);">
        </div>
    </div>
    <div class="row">
        {{-- COL IMG DESCR SOTTO FOTO --}}
        <div class="col-12">
            <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
                <div class="rpgui-container framed ">
                    <p>Statistiche:</p>
                    <hr>
                    <label>Vita:</label>
                    <div id="hp-bar" class="rpgui-progress red" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill red" style="left: 0px; width: 80%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Mana:</label>
                    <div id="mana-bar" class="rpgui-progress blue" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill blue" style="left: 0px; width: 10%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Forza:</label>
                    <div id="stamina-bar" class="rpgui-progress green" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill green" style="left: 0px; width: 60%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Esperienza:</label>
                    <div id="xp-bar" class="rpgui-progress" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill" style="left: 0px; width: 100%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- COLONNA GRANDE CON DESCRIZIONE PIENA --}}
<div class="col-12 col-md-9">
    <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.name')}}</label>
            <input type="text" name="nomeEroe" value="Luca"
                placeholder="Nome Eroe">
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.surname')}}</label>
            <input type="text" name="cognomeEroe" value="D'Aurizio"
                placeholder="Cognome Eroe">
        </p>
        <div class="row">
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.age')}}</label>
                    <input type="number" name="eta" value="30"
                        placeholder="Età Eroe">
                </p>
            </div>
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.cityA')}}</label>
                    <input type="text" name="etaLettere" value="Non Esiste"
                        placeholder="Età Eroe">
                </p>
            </div>
        </div>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.oldProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.lucaProf')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.currentProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.lucaProfC')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.biography')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.lucaProfCBio')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.signature')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label> 01010110 01100001
                01101100 01101100 01101111 00100000 01100001 00100000 01100011 01100101
                01110010 01100011 01100001 01110010 01100101 00100001 00100000 01000011
                01101111 01110011 11000011 10101100 00100000 01110000 01100001 01110010
                01101100 11000011 10110010 00100000 01000100 01101001 01101111
                00101110</label>
        </div>
        </p>

    </div>
</div>
{{-- END BLOCCO PERSONALE: LUCA------------------------- --}}

{{-- GIF ANIMATE 3 --}}
<div class="col-12 col-md-2 d-none d-md-block"></div>
<div class="col-12 col-md-8 d-flex justify-content-evenly mt-5">
    <span class="mx-1">
        <img src="/img/gifZelda/Z1.gif" alt="Zelda" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifZelda/Z2.gif" alt="Zelda" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifZelda/Z3.gif" alt="Zelda" style="width:80px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifZelda/Z4.gif" alt="Zelda" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifZelda/Z5.gif" alt="Zelda" style="width: 50px; height:50px;">
    </span>
</div>
<div class="col-12 col-md-2 d-none d-md-block"></div>
{{-- END GIF ANIMATE 3 --}}




{{-- BLOCCO PERSONALE: GIUSEPPE P------------------------- --}}
<div class="col-12 rpgui-container framed-golden-2 rpgui-content rpgui-pixelated p-0 m-0 mt-5">
    <h2>EL SILENCIOSO MAS LETAL</h2>
</div>

{{-- COLONNA GRANDE CON DESCRIZIONE PIENA --}}
<div class="col-12 col-md-9">

    <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.name')}}</label>
            <input type="text" name="nomeEroe" value="Giuseppe"
                placeholder="Nome Eroe">
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.surname')}}</label>
            <input type="text" name="cognomeEroe" value="Puligheddu"
                placeholder="Cognome Eroe">
        </p>
        <div class="row">
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.age')}}</label>
                    <input type="number" name="eta" value="28"
                        placeholder="Età Eroe">
                </p>
            </div>
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.cityA')}}</label>
                    <input type="text" name="città" value="'A Capitale"
                        placeholder="Città Eroe">
                </p>
            </div>
        </div>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.oldProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.pulProf')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.currentProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.pulProfC')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.biography')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.pulProfCBio')}}
            </label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.signature')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>Aiò</label>
        </div>
        </p>
    
    </div>
</div>
{{-- FINE COLONNA DESCRIZIONE PIENA --}}
<div class="col-12 col-md-3">
    <div class="row">
        {{-- COL IMG PROFILO --}}
        <div class="col-12 imgBgAU img-fluid rpgui-container framed rpgui-pixelated rpgui-content" 
        style="background-image: linear-gradient(rgba(51, 51, 51, 0.400), rgba(51, 51, 51, 0.400)), url(/img/giuseppeP.jpeg);">
        </div>
    </div>
    <div class="row">
        {{-- COL IMG DESCR SOTTO FOTO --}}
        <div class="col-12">
            <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
                <div class="rpgui-container framed ">
                    <p>Statistiche:</p>
                    <hr>
                    <label>Vita:</label>
                    <div id="hp-bar" class="rpgui-progress red" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill red" style="left: 0px; width: 40%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Mana:</label>
                    <div id="mana-bar" class="rpgui-progress blue" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill blue" style="left: 0px; width: 0%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Forza:</label>
                    <div id="stamina-bar" class="rpgui-progress green" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill green" style="left: 0px; width: 100%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Esperienza:</label>
                    <div id="xp-bar" class="rpgui-progress" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill" style="left: 0px; width: 100%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END BLOCCO PERSONALE: GIUSEPPE P------------------------- --}}


{{-- GIF ANIMATE 4 --}}
<div class="col-12 col-md-2 d-none d-md-block"></div>
<div class="col-12 col-md-8 d-flex justify-content-evenly mt-5">
    <span class="mx-1">
        <img src="/img/gifPokemon/PK1.gif" alt="Pokémon" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifPokemon/PK2.gif" alt="Pokémon" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifPokemon/PK3.gif" alt="Pokémon" style="width:80px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifPokemon/PK4.gif" alt="Pokémon" style="width: 50px; height:50px;">
    </span>
    <span class="mx-1">
        <img src="/img/gifPokemon/PK5.gif" alt="Pokémon" style="width: 50px; height:50px;">
    </span>
</div>
<div class="col-12 col-md-2 d-none d-md-block"></div>
{{-- END GIF ANIMATE 4 --}}



{{-- BLOCCO PERSONALE: WALTER------------------------- --}}
<div class="col-12 rpgui-container framed-golden-2 rpgui-content rpgui-pixelated p-0 m-0 mt-5">
    <h2>DESAPARECIDOS</h2>
</div>

<div class="col-12 col-md-3">
    <div class="row">
        {{-- COL IMG PROFILO --}}
        <div class="col-12 imgBgAU img-fluid rpgui-container framed rpgui-pixelated rpgui-content" 
        style="background-image: linear-gradient(rgba(51, 51, 51, 0.400), rgba(51, 51, 51, 0.400)), url(/img/walter.jpeg);">
        </div>
    </div>
    <div class="row">
        {{-- COL IMG DESCR SOTTO FOTO --}}
        <div class="col-12">
            <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
                <div class="rpgui-container framed ">
                    <p>Statistiche:</p>
                    <hr>
                    <label>Vita:</label>
                    <div id="hp-bar" class="rpgui-progress red" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill red" style="left: 0px; width: 20%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Mana:</label>
                    <div id="mana-bar" class="rpgui-progress blue" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill blue" style="left: 0px; width: 10%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Forza:</label>
                    <div id="stamina-bar" class="rpgui-progress green" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill green" style="left: 0px; width: 10%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                    <label>Esperienza:</label>
                    <div id="xp-bar" class="rpgui-progress" data-rpguitype="progress"><div class=" rpgui-progress-track"><div class=" rpgui-progress-fill" style="left: 0px; width: 100%;"></div></div><div class=" rpgui-progress-left-edge"></div><div class=" rpgui-progress-right-edge"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- COLONNA GRANDE CON DESCRIZIONE PIENA --}}
<div class="col-12 col-md-9 mb-5">
    <div class="rpgui-container framed-golden rpgui-content rpgui-pixelated">
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.name')}}</label>
            <input type="text" name="nomeEroe" value="Walter"
                placeholder="Nome Eroe">
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.surname')}}</label>
            <input type="text" name="cognomeEroe" value="Mazzoletti"
                placeholder="Cognome Eroe">
        </p>
        <div class="row">
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.age')}}</label>
                    <input type="number" name="eta" value="26"
                        placeholder="Età Eroe">
                </p>
            </div>
            <div class="col-12 col-md-2"></div>
            <div class="col-12 col-md-5">
                <p class="rpgui-content rpgui-pixelated">
                    <label>{{__('ui.cityA')}}</label>
                    <input type="text" name="etaLettere"
                        value="Sperdutolandia" placeholder="Età Eroe">
                </p>
            </div>
        </div>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.oldProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.waltProf')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.currentProfession')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.waltProfC')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.biography')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>{{__('ui.waltProfCBio')}}</label>
        </div>
        </p>
        <p class="rpgui-content rpgui-pixelated">
            <label>{{__('ui.signature')}}</label>
        <div class="rpgui-container framed-grey"
            style="width:100%; height:100%; left:0px; top:0px;">
            <label>???</label>
        </div>
        </p>

    </div>
</div>
{{-- END BLOCCO PERSONALE: WALTER------------------------- --}}

        </div>

    <x-footer/>
</section>
</x-layout>



