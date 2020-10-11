<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebGram</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                color: #bfbfbf; 
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background-image: url({{'img/background.png'}}), 
                radial-gradient(#777, #555);
                background-repeat: no-repeat;
                background-position: center center;
                background-blend-mode: multiply;
                background-attachment: fixed;
                background-size:100% 100%;

                
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #bfbfbf;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
            <a  href="{{ url('/') }}">
                   WebGram
            </a>
            </div> 
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="/profile/{{Auth::id() ?? ''}}">{{Auth::user()->username ?? ''}}</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    WebGram
                </div>

                <div class="links">
                    <a href="#">News</a>
                    <a href="#">Blog</a>
                    <a href="#">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>