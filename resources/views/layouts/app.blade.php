<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cards Games</title>
</head>
<body>
{{--<nav class="navbar navbar-expand-lg navbar-light bg-light">--}}
{{--    <a class="navbar-brand" href="{{route('home')}}">Cards Games</a>--}}
{{--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    @auth--}}
{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <li class="nav-item @if(request()->is('admin/stores*')) active @endif">--}}
{{--                    <a class="nav-link" href="{{route('admin.stores.index')}}">Lojas <span class="sr-only">(current)</span></a>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-item @if(request()->is('admin/products*')) active @endif ">--}}
{{--                    <a class="nav-link" href="{{route('admin.products.index')}}">Produtos</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--            <div class="form-inline my-2 my-lg-0">--}}
{{--                <ul class="navbar-nav mr-auto">--}}
{{--                    <li class="nav-item">--}}
{{--                        <span class="nav-link">{{ auth()->user()->name }}</span>--}}
{{--                    </li>--}}

{{--                    <li class="nav-item active">--}}
{{--                        <a class="nav-link" href="#"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                       document.querySelector('form.logout').submit();">Sair</a>--}}

{{--                        <form action="{{route('logout')}}" class="logout" method="POST" style="display: none">--}}
{{--                            @csrf--}}
{{--                        </form>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endauth--}}
{{--</nav>--}}
<div class="container mt-5">
{{--    @include('flash::message')--}}
    @yield('content')
</div>
</body>
</html>
