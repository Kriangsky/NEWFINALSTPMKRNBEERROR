<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            @if (auth()->user())
                                <a class="nav-link"
                                    href="{{ route('dashboard', ['group_name' => auth()->user()->group_name ?? 'default']) }}">Dashboard</a>
                            @else
                            @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/timeline">Timeline</a>
                        </li>
                        @auth
                        
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" class="nav-link"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                </form>
                            </li>
                        @endauth
                        {{-- <li class="nav-item">
                  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> --}}
                    </ul>
                </div>
            </div>
            @auth
            @else
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                <a class="btn btn-danger" href="{{ route('register') }}">Register</a>
            @endauth

        </nav>
        @yield('content')
</body>

</html>
