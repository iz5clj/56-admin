@extends('admin.layouts.master')

@section('body')

    {{-- Sidebar and main navigation. Would be nice to split in 2 differents include files --}}
    @include('admin.partials.nav')

    <div class="content-wrapper">

        {{-- Main content --}}
        <div class="container-fluid">
            @yield('content')
        </div>

        {{-- Footer --}}
        <footer class="sticky-footer">
            @include('admin.partials.footer')
        </footer>

        {{-- Scroll to Top Button --}}
        @include('admin.partials.scroll-to-top')

        {{-- Any modal --}}
        @include('admin.partials.modals')

    </div>

@endsection
