<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Event CURD Application</title>

         <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        <link href="{{ asset('backend/css/custom.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="container">

            <div class="card mb-3 welcome-section">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{ asset('backend/images/event.jpg') }}" class="img-fluid rounded-start" alt="event">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Event CRUD Application</h5>
                      <p class="card-text">Technical Assessment For The Job Of PHP Developer</p>

                      @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">
                                <button type="button" class="btn btn-primary">Home</button>
                            </a>
                        @else
                            <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Log in</button></a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"><button type="button" class="btn btn-primary">Register</button></a>
                            @endif
                        @endauth

                    @endif
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </body>
</html>
