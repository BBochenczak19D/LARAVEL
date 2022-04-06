


<html>
    <head>
        <title>@yield('title',$applicationName)</title>
        <link rel="stylesheet" href="{{ mix('css/app.css')}}">
        <script src="{{ mix('js/app.js')}}"></script>
        <style>
            td{
                padding:25px;
            }
        </style>
    </head>
    <body>
<main class="d-flex" style="height:100vh;">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4"><h1>{{$applicationName}}</h1></span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
             Lista użytkowników
            </a>
          </li>
          <li>
            <a href="{{route('games.list')}}" class="nav-link text-white">Lista</a>
          </li>
          <li>
            <a href="{{route('games.dashboard')}}" class="nav-link text-white">Dashboard</a>
          </li>
          <li>
            <li>
                <a href="{{route('games.eloquent.list')}}" class="nav-link text-white">Lista</a>
              </li>
              <li>
                <a href="{{route('games.eloquent.dashboard')}}" class="nav-link text-white">Dashboard</a>
              </li>
              <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
              ...
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
              ...
            </a>
          </li>
        </ul>
        <hr>

      </div>
    <div class="container">
        <div>
            @yield('content')
        </div>
    </div>

</main>

    </body>
</html>
