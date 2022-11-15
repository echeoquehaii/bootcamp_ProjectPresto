<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
    <div class="alert alert-success w-100 mt-custom">
        {{ session('message') }}
    </div>
    @endif

    @if (session('access.denied'))
        <div class="alert alert-success w-100  mt-custom">
            {{ session('access.denied')}}
        </div>
    @endif


    {{$slot}}

    <a href="#" id="buttonUpScroll" class="d-none">
        <p class="fa-solid fa-angles-up fa-2x my-auto"></p>
    </a>
    
    
    <x-footer></x-footer>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script>
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
      </script>
</body>
</html>