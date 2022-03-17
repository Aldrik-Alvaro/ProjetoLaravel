<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/a3000fd09d.js" crossorigin="anonymous"></script>
            
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- Fonts google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
        <!-- JS -->
        <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
       
    </head>

    <header style="background-color: white;">
        <!-- CABEÇALHO -->
        <div class="container-fluid sombra ">
        <header class="d-flex flex-wrap justify-content-center align-items-center py-2 mb-3">

            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="{{asset('img/logo_santa_casa.png')}}" alt="logo" style="width:150px; height:50px;">
            </a>
            
            <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/eventos/create" class="nav-link">Create</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link active">About</a></li>
            </ul>
        </header>
        </div>
    </header>

    <body>

        <!-- CHAMANDO O CONTEUDO DE OUTRA PAGINA-->
        @yield('content')
        
      
    </body>

    <!-- FOOTER -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-4 my-0 border-top footericone" style="background-color: white;">
        <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            <i class="fab fa-artstation"></i>
        </a>
        <span class="text-muted" style="color:aliceblue">&copy; 2021 Company, Inc</span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">  
        <li class="ms-3"><a class="text-muted" href="#"><i class="fas fa-home "></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="far fa-address-book "></i></a></li>
        <li class="ms-3"><a class="text-muted" href="#"><i class="fas fa-arrow-up "></i></a></li>
        </ul>
    </footer>
</html>
