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

    {{-- Sidebar and main navigation. Would be nice to split in 2 differents include files --}}
    @include('admin.nav')

    <div class="content-wrapper">

        {{-- Main content --}}
        <div class="container-fluid">
            @include('admin.main')
        </div>

        {{-- Footer --}}
        <footer class="sticky-footer">
            @include('admin.footer')
        </footer>

        {{-- Scroll to Top Button --}}
        @include('admin.scroll-to-top')

        {{-- Any modal --}}
        @include('admin.modals')

        {{-- Bootstrap core, Jquery and any other js library --}}
        <script src="{{ mix('/js/scripts.js') }}"></script>

    </div>
</body>
