<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

 <!--   <link rel="icon" href="{{asset('images/favicon.ico')}}">-->


    <title>Oren</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/normalize.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/skeleton.min.css')}}" rel="stylesheet">
    <style>
        .top-right {
            position: absolute;
            right: 380px;
            top: 18px;
        }

    </style>


    <!-- Custom styles for this template -->
   <!-- <link href="{{asset('css/album.css')}}" rel="stylesheet"> -->
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="#" ><img src="{{asset('images/222.png')}}" width="68" height="68"> </a>
    <a class="navbar-brand" href="{{route('blog')}}">Новости </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup"  >
        <div class="navbar-nav" >
            <a class="nav-item nav-link active" href="{{route('game')}}">Игры <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="{{route('company')}}">Компания</a>
            <a class="nav-item nav-link" href="{{route('support')}}">Поддержка</a>
            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                    <div class="top-right links">
                @auth
                    <a class="nav-item nav-link" href="{{ url('/home') }}" >Домашняя</a>
                @else
                    <a class="nav-item nav-link" href="{{ route('login') }}">Вход</a>
                    <a class="nav-item nav-link" href="{{ route('register') }}">Регестрация</a>
                @endauth

            @endif
            </div>
            </div>
        </div>
    </div>
</nav>








<main role="main">

<!--  <section class="jumbotron text-center">-->
        <div class="container">
            @yield('title')
            <!--
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row"> -->
                @yield('content')

            </div>
    <!--
       </div>
   </div>
-->

</main>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery-3.3.1.min.js')}}" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/holder.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>


</body>
</html>
