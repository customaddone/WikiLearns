@extends('layouts.app')

@section('content')
    <div id="homeView">
        @component('components.nav')
        @endcomponent

        <router-view></router-view>
    </div>
    <div id="homePageWave">
        <home-wave></home-wave>
    </div>
    <!-- タイトルのフォント -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- SPA用js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- 波 -->
    <script src="{{ asset('/js/HomePageWave.js') }}"></script>


@endsection
