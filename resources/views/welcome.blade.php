<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>King</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
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
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
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
                    Laravel
                </div>
<!--
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                    <button type="button" class="btn btn-primary">Primary</button>
                </div>
            </div>
        </div>-->
        <!--<script src="{{asset('js/bootstrap.min.js')}}"></script>-->
        <label> 01 </label>
        <input type="text" id="txtUm" readonly/></br>
        <label> 02 </label>
        <input type="text" id="txtDois"readonly/></br>
        <label> 03 </label>
        <input type="text" id="txtTres"readonly/></br>
        <label> 04 </label>
        <input type="text" id="txtQuatro"readonly/></br>
        <label> 05 </label>
        <input type="text" id="txtCinco"readonly/></br>
        <label> 06 </label>
        <input type="text" id="txtSeis"readonly/></br>
        <label> 07 </label>
        <input type="text" id="txtSete"readonly/></br>
        <label> 08 </label>
        <input type="text" id="txtOito"readonly/></br>
        <label> 09 </label>
        <input type="text" id="txtNove"readonly/></br>
        <label> 10 </label>
        <input type="text" id="txtDez"readonly/></br>
        <label> 11 </label>
        <input type="text" id="txtOnze"readonly/></br>
        <label> 12 </label>
        <input type="text" id="txtDoze"readonly/></br>
        <label> 13 </label>
        <input type="text" id="txtTreze"readonly/></br>
        <label> 14 </label>
        <input type="text" id="txtQuatorze"readonly/></br>
        <label> 15 </label>
        <input type="text" id="txtQuinze"readonly/></br>
        <label> 16 </label>
        <input type="text" id="txtDezeseis"readonly/></br>
        <label> 17 </label>
        <input type="text" id="txtDezesete"readonly/></br>
        <label> 18 </label>
        <input type="text" id="txtDezoito"readonly/></br>
        <button onClick="generateRan()">Gerar numeros</button>
        <script src="{{ asset('js/loto-min.js') }}"></script>
    </body>
</html>
