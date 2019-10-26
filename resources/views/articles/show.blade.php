@extends('layouts.app')

@section('content')

    <div id="articlesShow">
        <wiki-show></wiki-show>
    </div>

    <script src="{{ asset('js/articlesShow.js') }}"></script>
    <!-- 単語検索、ハイライト用css-->
    <link href="{{ asset('css/floatContents.css') }}" rel="stylesheet">

@endsection
