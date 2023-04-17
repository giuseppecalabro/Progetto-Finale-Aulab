<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{$title ?? 'Presto.it'}}</title>

    {{-- SwiperJS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- Livewire --}}
    @livewireStyles

</head>

<body>

    <x-nav/>

        {{-- <div class="topSpace"></div> --}}

    <main class="custom-main-container">

        {{-- EASTER EGG --}}
        <a href="/01100101_01100001_01110011_01110100_01100101_01110010_01100101_01100111_01100111" accesskey="h"></a>
        {{-- END EASTER EGG --}}

        {{$slot}}
                
                
 
        
    </main>
        
        {{-- <div class="botSpace"></div> --}}
    
    
    
    
    @livewireScripts
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
    AOS.init();
    </script>
    {{-- SwiperJS --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/6c9b292d6e.js" crossorigin="anonymous"></script>
</body>
</html>
