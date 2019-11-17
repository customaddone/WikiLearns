@extends('layouts.app')

@section('content')
<div id="articlesShow">
    @component('components.showNav')
    @endcomponent

    <div class="uk-container">

        @component('components.dictAndHighlightForImport')
        @endcomponent

        <div class="showSwitchButton uk-border-circle">
            <a href="#top" uk-icon="icon: chevron-up; ratio: 1.5" style="margin-left: 9px; margin-top: 10px;"></a>
        </div>

        <!-- wikiから引っ張ってくる記事 -->
        <!-- touchstart, touchmove, clickはボタンの押し具合によって挙動が変わる -->
        <div @select="selected" @touchstart="switchWordFunction" @touchmove='switchUnhighlight'
            @mousedown="switchWordFunction"  @click="switchUnhighlight">
            <div v-html="article"></div>
        </div>

    </div>

    @component('components.footer')
    @endcomponent
</div>

<script src="{{ asset('js/articlesShow.js') }}"></script>
<!-- 単語検索、ハイライト用css-->
<link href="{{ asset('css/floatContents.css') }}" rel="stylesheet">

@endsection
