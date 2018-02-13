<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Bootstrap and core css --}}
    <link href="{{ mix('/css/styles.css')}}" rel="stylesheet">

    {{-- css for this demo page. Can be deleted for production --}}
    <style>

        body,html {
            height: 100%; /*important to center verticaly */
        }
    </style>

</head>

<body>

    <div class="container h-100">
        <div class="row align-items-center h-100">
            <div class="col-6 mx-auto">
                <div class="jumbotron-fluid text-center">
                    <h1 class="display-4">Welcome</h1>
                    <p class="lead">This site uses a php framework: LARAVEL.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="{{ route('admin') }}" role="button">Go to admin page</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- Scripts - 1. Jquery 2. Popper 3.Bootstrap --}}
    <script src="{{ mix('/js/scripts.js') }}"></script>

</body>

</html>
