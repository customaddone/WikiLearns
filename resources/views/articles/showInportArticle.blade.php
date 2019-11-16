@extends('layouts.app')

@section('content')
<div id="inportArticle">

    @component('components.showNav')
    @endcomponent

    <div class="uk-container">

        @component('components.dictAndHighlightcard')
        @endcomponent

        <div class="showSwitchButton uk-border-circle">
            <a href="#top" uk-icon="icon: chevron-up; ratio: 1.5" style="margin-left: 9px; margin-top: 10px;"></a>
        </div>

        <!-- wikiから引っ張ってくる記事 -->
        <!-- touchstart, touchmove, clickはボタンの押し具合によって挙動が変わる -->
        <div id="target" @select="selected" @touchstart="switchWordFunction" @touchmove='switchUnhighlight' @blur="selected" @keyup=
            "selected" @click="switchWordFunction">

            <div v-html="article"></div>

        </div>

    </div>

    @component('components.articleFooter')
    @endcomponent
</div>
<script src="{{ asset('js/showInportArticle.js') }}"></script>

@endsection
