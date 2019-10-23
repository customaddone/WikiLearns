@extends('layouts.app')

@section('content')
    @component('components.nav')
    @endcomponent

    <div id="homeView">
        <router-view></router-view>
    </div>
    <!-- タイトルのフォント -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <!-- SPA用js -->
    <script src="{{ asset('js/app.js') }}"></script>

@endsection
