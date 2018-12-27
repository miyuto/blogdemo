<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
<div id="app">
    <nav class="nav navbar-default navbar-static-top"></nav>
    @if(Auth::check())
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('post.create') }}">Create new post</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-8">
                @yield('content')
            </div>
        </div>
    </div>
    @endif
</div>
<link href="{{ asset('js/app.js') }}">
</body>
</html>
