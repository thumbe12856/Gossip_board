<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content={{ csrf_token() }}>
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />

    <!--material css-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/assets/materialize/css/materialize.css')}}" type="text/css">
    @yield("css")
</head>
<body>
    @yield("content")

    <!-- jQuery -->
    <script type="text/javascript" charset="utf8" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/spin.js/2.3.2/spin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.0/lodash.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dustjs-linkedin/2.7.2/dust-core.min.js" defer></script>

    <!--material js-->
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js" defer></script>-->
    <script src="{{url('/assets/materialize/js/materialize.js')}}" defer></script>
    @yield("js")
</body>
</html>
