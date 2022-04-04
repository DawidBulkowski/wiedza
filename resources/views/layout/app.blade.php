<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/bootstrap/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <script src="/js/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <title>Aplikacja</title>
    <link href="{{ asset('css/layout.css') }}?control={{ md5_file(public_path().'/css/layout.css') }}" rel="stylesheet">
    @yield('header')

</head>
<body>

<div class="row header">

    <div class="col-md-12 mt-4">
        @yield('content')
    </div>

</div>

<script src="{{ asset('js/layout.js') }}"></script>

</body>
@yield('scripts')

</html>
