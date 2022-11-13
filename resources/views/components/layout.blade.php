<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Presto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-body">
    <x-navbar></x-navbar>

    @if (session('message'))
    <div class="alert alert-success mt-custom position-absolute w-100">
        {{ session('message') }}
    </div>
    @endif

    @if (session('access.denied'))
        <div class="alert alert-success mt-custom position-absolute w-100">
            {{ session('access.denied')}}
        </div>
    @endif


    {{$slot}}

    <a href="#" id="buttonUpScroll" class="d-none">
        <p class="fa-solid fa-angles-up fa-2x my-auto"></p>
    </a>
    

    
    
    <x-footer></x-footer>
    @yield('welcomejs')
    @livewireScripts
</body>
</html>