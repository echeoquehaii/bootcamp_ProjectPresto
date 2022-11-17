<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Syne+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Condiment&family=Kanit:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <title>Presto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-body">
    <x-navbar></x-navbar>

    @if (session('message'))
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                 <div class="alert alert-success w-100 mt-custom2 purple text-white d-flex justify-content-center">
                     {{ session('message') }}
                 </div>
            </div>
        </div>
    </div>
        
    @endif

    @if (session('access.denied'))
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="alert alert-success w-100 mt-custom2 purple text-white d-flex justify-content-center">
                    {{ session('access.denied')}}
                </div>
            </div>
        </div>
    </div>
    @endif
    
    

    {{$slot}}

    <a href="#" id="buttonUpScroll" class="d-none">
        <p class="fa-solid fa-angles-up fa-2x my-auto"></p>
    </a>
    
    
    <x-footer></x-footer>
    @livewireScripts
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
            AOS.init();

         const swiper = new Swiper('.swiper', {
              // Optional parameters
  
              loop: true,
              
              
              // Navigation arrows
              navigation: {
                  nextEl: '.swiper-button-next',
                  prevEl: '.swiper-button-prev',
              },
  
              // Custom Effects
              effect: "coverflow",
              grabCursor: true,
              centeredSlides: true,
              slidesPerView: 2,
              coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: false,
              }
              
          });
        

    //       var loader = document.getElementbyId("#preloader");
    
    //         window.addEventListener("load", function(){
    //             loader.style.display = "none";
    //         });
    //   </script>

<script>
    var swiper1 = new Swiper(".mySwiper1", {
      slidesPerView: 3,
      spaceBetween: 2,
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
    });
  </script>

</body>
</html>