@extends('layouts.app')

@section('content')

    <div id="inportArticle">
        <inport-article></inport-article>
    </div>

    <script src="{{ asset('js/inportArticle.js') }}"></script>
    <!-- 単語検索、ハイライト用css-->
    <link href="{{ asset('css/floatContents.css') }}" rel="stylesheet">

@endsection
