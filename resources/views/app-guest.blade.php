<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:black !important; ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" >
                <ul class="navbar-nav">
                    <li class="nav-item anchor">
                        <img src="asset-timeline/logo.png" alt="brand">
                    </li>
                    <li class="nav-item anchor">
                        <a href="#home" class="anchor">Home</a>
                    </li>
                    <li class="nav-item anchor">
                        <a href="#championPrizes" class="anchor">Champion Prizes</a>
                    </li>
                    <li class="nav-item anchor">
                        <a href="#aboutUs" class="anchor">Mentor & Jury</a>
                    </li>
                    <li class="nav-item anchor">
                        <a href="#mentorAndJury" class="anchor">About</a>
                    </li>
                    <li class="nav-item anchor">
                        <a href="#faq" class="anchor">Faq</a>
                    </li>
                    <li class="nav-item anchor">
                        <a href="#timeline" class="anchor">Timeline</a>
                    </li>
                    <li class="nav-item">
                        @if (auth()->user())
                            <a class="nav-link"
                                href="{{ route('dashboard', ['group_name' => auth()->user()->group_name ?? 'default']) }}">Dashboard</a>
                        @else
                        @endif
            </div>
        </div>
        @auth
            <h4 class="" style="width: 200px; text-align: center">
                <a href="" class="anchor">
                    {{ Auth::user()->group_name }} Group
                </a>
            </h4>
            <div class="login-button">
                <a href="{{ route('logout') }}" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <div class="login-button">
                <a class="anchor" href="{{ route('loginchoose') }}">Login</a>
            </div>
        @endauth

    </nav>
    @yield('content')
</body>

</html>
