<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '.opensource football') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-1">
                <a href="/" ><h1>.opensource football</h1></a>
            </div>
            <div class="col-lg-5" style="padding-top:20px;">
                @if (Auth::guest())
                    <form inline role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-lg-4">
                            <input name="email" class="form-control" value="{{ old('email') }}"
                                class="form-control" placeholder="email" required autofocus>
                            </input>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                remember me
                            </a>
                        </div>
                        <div class="form-group col-lg-4">
                            <input name="password" type="password" class="form-control"
                                class="form-control" placeholder="password" required autofocus>
                            </input>
                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                forgotten password?
                            </a>
                        </div>
                        <div class="form-group col-lg-4">
                            <button type="submit" class="btn btn-primary">submit</button>
                            <a href="/register" class="btn btn-primary">register</a>
                        </div>
                    </form>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->firstname }}
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="/profile">profile</a>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </div>
        </div>               
        <div class="row">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
