@extends('layouts.app')

@section('content')
    <div id="homeView">
        @component('components.nav')
        @endcomponent

        <router-view></router-view>
    </div>
    <!-- タイトルのフォント -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <!-- SPA用js -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- ホームでの検索用 -->
    <script src="{{ asset('js/searchWikiAPI.js') }}"></script>

@endsection
