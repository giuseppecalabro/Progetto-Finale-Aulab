<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Presto.it - 404 ERROR</title>

    {{-- GoogleFonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
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

<main class="custom-main-container">

    <section id="404" class="container-fluid custom-scroll w-100">
        <div class="row corpoQuattro">

            <div class="col-12 d-flex justify-content-center">
                <div class="quattro" title="404 eRRoR">404 eRRoR</div>
            </div>

            <div class="col-12 d-flex justify-content-end me-5 ">
                <div class="arrowDownCustom arrowGlitch" title="&#8595">&#8595</div>
            </div>
        </div>
    </section>

    <section id="404 _2" class="container-fluid custom-scroll w-100">
        <div class="row corpoQuattro">

            <div class="col-12 d-flex justify-content-center mt-5">
                <div class="quattro mt-5" title="I wAnT tO pLaY a GaMe.">I wAnT tO pLaY a GaMe.</div> 
                {{-- I WANT TO PLAY A GAME. --}}
                {{-- I wAnT tO pLaY a GaMe. --}}
                {{-- I WaNt To PlAy A gAmE. --}}
            </div>

            <div class="col-12 d-flex justify-content-end me-5 ">
                <div class="arrowDownCustom arrowGlitch" title="&#8595">&#8595</div>
            </div>
        </div>
    </section>
    
    <section id="404_game" class="container-fluid custom-scroll w-100">
        <div class="row corpoQuattro">

            <div class="col-12 d-flex justify-content-center mt-5">

                 <iframe height="650" width="1000" src="http://mario5.florian-rappl.de/"></iframe>
                {{-- <div class="game">
                    <div id="dino"></div>
                    <div id="cactus"></div>
                    </div> --}}
            </div>

            <div class="col-12 d-flex justify-content-end me-5 ">
                <div class="arrowDownCustom arrowGlitch" title="&#8595">&#8595</div>
            </div>
        </div>
    </section>

    <section id="404_end" class="container-fluid custom-scroll w-100">
        <div class="row corpoQuattro">

            <div class="col-12 d-flex flex-column justify-content-center align-items-center mt-5">
                <div class="quattro" title="We are Legion.">We are Legion.</div>
                <div class="quattro" title="We are &lt;/arCoders&gt">We are &lt;/arCoders&gt.</div>
                <div class="quattro" title="Expect Us.">Expect Us.</div>
                
<button>
                <?php
echo "Your IP is ";

echo $_SERVER["REMOTE_ADDR"];

function get_ip_address() {
  // check for shared internet/ISP IP
  if (!empty($_SERVER['HTTP_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_CLIENT_IP']))
   return $_SERVER['HTTP_CLIENT_IP'];

  // check for IPs passing through proxies
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
   // check if multiple ips exist in var
    $iplist = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
    foreach ($iplist as $ip) {
     if ($this->validate_ip($ip))
      return $ip;
    }
   }

  if (!empty($_SERVER['HTTP_X_FORWARDED']) && $this->validate_ip($_SERVER['HTTP_X_FORWARDED']))
   return $_SERVER['HTTP_X_FORWARDED'];
  if (!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']) && $this->validate_ip($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
   return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
  if (!empty($_SERVER['HTTP_FORWARDED_FOR']) && $this->validate_ip($_SERVER['HTTP_FORWARDED_FOR']))
   return $_SERVER['HTTP_FORWARDED_FOR'];
  if (!empty($_SERVER['HTTP_FORWARDED']) && $this->validate_ip($_SERVER['HTTP_FORWARDED']))
   return $_SERVER['HTTP_FORWARDED'];

  // return unreliable ip since all else failed
   return $_SERVER['REMOTE_ADDR'];
 }
 ?>
 </button>
            </div>

            <div class="col-12 d-flex justify-content-end me-5 ">
                <div class="quattro ms-4" title="We are glad you can go back ">We are glad you can go back </div><a href="/"><button>HOME</button></a>
            </div>
        </div>
    </section>

    
</main>



    @livewireScripts

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">
    </script>
    <script>
    AOS.init();
    </script>
    {{-- SwiperJS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    
    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/6c9b292d6e.js" crossorigin="anonymous"></script>
</body>
</html>