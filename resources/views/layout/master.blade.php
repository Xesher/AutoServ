<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}
</head>
<body>
@include('partials.header')
<main>
    @yield('container')
</main>
@include('partials.footer')
{{--<script src="{{ mix('js/manifest.js') }}"></script>--}}
{{--<script src="{{ mix('js/vendor.js') }}"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>