<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Michel Sabatino">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- Bootstrap and core css --}}
    <link href="{{ mix('/css/styles.css')}}" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-light" id="page-top">

    @yield('body')

    {{-- Bootstrap core, Jquery and any other js library --}}
    <script src="{{ mix('/js/scripts.js') }}"></script>

</body>
