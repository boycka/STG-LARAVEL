<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>

        body {
            width: 100%;
            height:100%;

            background: url() center top repeat-x ;
        }

        body .accueil-header, .accueil-body, .accueil-footer {
            width: 100%;
        }

        .accueil-header {
            text-align: center;
            height: 200px;
        }

        .accueil-body {
            text-align: center;
        }

        .accueil-footer {
            position: absolute;
            bottom: 0px;
            left: 18%;
            width: 60%;
            background: #c02424;
            border-top: 1px solid #d2d6de;
            padding: 12px;
        }

        .accueil-component {
            width: 500px;
            height: 184px;
            display: inline-block;
            padding-top: 6px;
        }

        .accueil-component:hover {
            box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 45px, rgba(0, 0, 0, 0.22) 0px 10px 18px;
            cursor: pointer;
        }

        .materiel-color-orange {
            background: #801818;
        }

        .materiel-color-gray {
            background: #8fa4ae;
        }

        .accueil-component-icon {
            width: 40%;
            margin: auto;

            border: 0px solid;
            width: 208px;
            border-radius: 110px;
        }

        .accueil-component-icon img {
            width: 208px;
            height: 208px;
            border-radius: 50%;
            border: 4px solid #9da7dc;
        }

        .accueil-component-title {
            display: inline-block;
            border: 0px solid;
            position: relative;
            background: #eeeeee;
            width: 97%;
            bottom: 15px;
            z-index: -1;
        }

        .accueil-component-title p {
            font-size: 20px;
            font-weight: 700;
            text-align: center;
        }

        .pull-right {
            float: left !important;
        }

        .pull-left {
            float: right !important;
        }


        </style>
    </head>
    <body class="antialiased h-screen
    bg-[url('/img/hero-pattern.svg')]">

        <div class="">

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/interProf') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

        </div>
        <body>
    <div class="accueil-header">

    </div>
    <div class="accueil-body grid gap-4 grid-cols-2">


                    <div class="accueil-component materiel-color-gray" data-url="./waliye">
                        <div class="accueil-component-icon">
                        <a href="{{ url('/login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <img src="https://th.bing.com/th/id/OIP.pn8tQGcQMyRWt7SbamsbuwAAAA?w=349&h=250&rs=1&pid=ImgDetMain"></a>
                        </div>
                        <div class="accueil-component-title">
                            <p>Professeur</p>
                        </div>
                    </div>
                    <div class="accueil-component materiel-color-orange" data-url="./moutamadris">
                        <div class="accueil-component-icon">
                        <a href="{{ url('/login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <img src="https://th.bing.com/th/id/R.83c253c55fcf6749b45c22c6d4d67937?rik=CzZI3cSSUG8jUg&pid=ImgRaw&r=0"></a>
                        </div>
                        <div class="accueil-component-title">
                            <p>Etudiant</p>
                        </div>
                    </div>





    </div>
    <div class="accueil-footer">
        <div class="pull-right">
            <b>Version</b> 1.0
        </div>
        <div class="pull-left">
            <strong>Copyright © 2024 CFMNTIOE </strong>
        </div>

    </div>









    </body>
</html>
