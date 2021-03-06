<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Headタグ内に足す -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>

    <!-- Vue + axios + VueRouter-->
    <script src="https://unpkg.com/vue@2.5.17"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.18.0/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue-router@3.0.1"></script>

    <!-- 特殊フォント -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- wikipedia用css -->
    <link href="{{ asset('css/wikicss.css') }}" rel="stylesheet">
    <!-- 単語検索、ハイライト用css-->
    <link href="{{ asset('css/floatContents.css') }}" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>
