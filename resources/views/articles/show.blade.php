@extends('layouts.app')

@section('content')

    <div id="homeView">
        @component('components.nav')
        @endcomponent

        <div id="articlesShow">
            <div class="uk-container">
                <wiki-show></wiki-show>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/articlesShow.js') }}"></script>

@endsection
