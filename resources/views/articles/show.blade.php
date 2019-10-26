@extends('layouts.app')

@section('content')


    @component('components.navShow')
    @endcomponent

    <div id="articlesShow">
       <div class="uk-container">
           <wiki-show></wiki-show>
        </div>
    </div>

    <script src="{{ asset('js/articlesShow.js') }}"></script>
    <!-- 単語検索、ハイライト用css-->
    <link href="{{ asset('css/floatContents.css') }}" rel="stylesheet">

@endsection
