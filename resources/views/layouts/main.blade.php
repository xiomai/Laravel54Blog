<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{ config('app.name') }}</title>
    <style>
    /* Everything but the jumbotron gets side spacing for mobile first views */
        .header,
        .marketing,
        .footer {
        padding-right: 15px;
        padding-left: 15px;
        }

        /* Custom page header */
        .header {
        padding-bottom: 20px;
        border-bottom: 1px solid #e5e5e5;
        }
        /* Make the masthead heading the same height as the navigation */
        .header h3 {
        margin-top: 0;
        margin-bottom: 0;
        line-height: 40px;
        }

        /* Custom page footer */
        .footer {
        padding-top: 19px;
        color: #777;
        border-top: 1px solid #e5e5e5;
        }

        /* Customize container */
        @media (min-width: 768px) {
        .container {
            max-width: 730px;
        }
        }
        .container-narrow > hr {
        margin: 30px 0;
        }

        /* Main marketing message and sign up button */
        .jumbotron {
        text-align: center;
        border-bottom: 1px solid #e5e5e5;
        }
        .jumbotron .btn {
        padding: 14px 24px;
        font-size: 21px;
        }

        /* Supporting marketing content */
        .marketing {
        margin: 40px 0;
        }
        .marketing p + h4 {
        margin-top: 28px;
        }

        /* Responsive: Portrait tablets and up */
        @media screen and (min-width: 768px) {
        /* Remove the padding we set earlier */
        .header,
        .marketing,
        .footer {
            padding-right: 0;
            padding-left: 0;
        }
        /* Space out the masthead */
        .header {
            margin-bottom: 30px;
        }
        /* Remove the bottom border on the jumbotron for visual effect */
        .jumbotron {
            border-bottom: 0;
        }
        }
    </style>
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="{{ url('/')}}">Home</a></li>
            <li role="presentation"><a href="{{ url('/about')}}">About</a></li>
            <li role="presentation"><a href="{{ url('/contact')}}">Contact</a></li>
            @if (Auth::guest())
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a href="{{ url('/home')}}">Dashboard</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
        </nav>
        <h3 class="text-muted">{{ config('app.name') }}</h3>
      </div>

      @yield('content')

      <footer class="footer">
        <p>&copy; 2017 {{ config('app.name') }}</p>
      </footer>

    </div> <!-- /container -->
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
