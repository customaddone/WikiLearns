@extends('layouts.app')

@section('content')

    <div id="homePageWave">
        <home-wave></home-wave>
    </div>

    <div id="homeView">
        @component('components.nav')
        @endcomponent

        <router-view></router-view>
    </div>

    <!-- タイトルのフォント -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <!-- SPA用js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- 波 -->
    <script src="{{ asset('/js/HomePageWave.js') }}"></script>
    <!-- トップページの文字用 -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">


@endsection
