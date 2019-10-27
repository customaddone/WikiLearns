@extends('layouts.app')

@section('content')
<div id="articlesShow">
    @component('components.showNav')
    @endcomponent

    <div class="showInportBox">
        <div v-if="inportArticleButton" class="uk-card uk-card-default uk-margin" style="width: 250px;">
            <div class="uk-card-media-top">
                <div class="uk-cover-container">
                </div>
                <div class="uk-card-body" style="padding: 5px;">
                    <a class="uk-card-title" v-on:click="inportArticle">インポート</a>
                    <p style="height: 105px; overflow: hidden;">@{{ translated }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container">
        <!-- 単語検索結果を表示するカードを右上に設置 -->
        <div class="showTextBox">
            <div v-if="switchFunctionKey % 3 == 1" class="uk-card uk-card-default uk-margin" style="width: 250px;">
                <div class="uk-card-media-top">
                    <div class="uk-cover-container">
                    </div>
                    <div class="uk-card-body" style="padding: 5px;">
                        <h3 class="uk-card-title">@{{ selectedText }}</h3>
                        <p style="height: 105px; overflow: hidden;">@{{ translated }}</p>
                    </div>
                    <div class="uk-card-footer" style="padding: 5px 25px;"><a class="uk-text-muted" href="#">READ MORE</a></div>
                </div>
            </div>
        </div>

        <!-- ハイライトのカラー選択 -->
        <div class="showTextBox">
            <div v-if="switchFunctionKey % 3 == 2" class="uk-card uk-card-default uk-margin" style="width: 250px;">
                <div class="uk-card-media-top">
                    <div class="uk-cover-container">
                    </div>
                    <div class="uk-card-body" style="padding: 5px;">
                        <h3 class="uk-card-title">カラー選択</h3>
                        <div class="uk-grid-small uk-text-center" uk-grid
                            style="padding-left: 12px;">
                            <div>
                                <div v-bind:class="{ 'sample-active' : isActive[0] }" v-on:click="changeColor(0)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #FF89FF;　opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div v-bind:class="{ 'sample-active' : isActive[1] }" v-on:click="changeColor(1)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #89DB89; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div v-bind:class="{ 'sample-active' : isActive[2] }" v-on:click="changeColor(2)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #90AFEE; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div  v-bind:class="{ 'sample-active' : isActive[3] }" v-on:click="changeColor(3)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #C8AAF2; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div  v-bind:class="{ 'sample-active' : isActive[4] }" v-on:click="changeColor(4)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #8BDEDE; opacity: 0.3;"></div>
                                </div>
                            <div>
                            <div  v-bind:class="{ 'sample-active' : isActive[5] }" v-on:click="changeColor(5)"
                                class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                style="background-color: #FF9999; opacity: 0.3;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p>右下のボタンでモードを切り替えてください</p>
        <p>単語検索モード：単語１wordを範囲指定して適当な場所を押すと検索結果が右上に出ます</p>
        <p>ハイライトモード：範囲指定して適当な場所を軽くタッチするとハイライトが付きます</p>
        <p>長押ししてハイライトの周りをグリグリするとして小さく指をずらすとハイライトが消えます（割と広範囲
            が消えます）</p>

        <!-- 単語モード、ハイライトモード、標準モードを切り替えるためのボタン -->
        <div class="showSwitchButton">
            <div v-if="switchFunctionKey % 3 == 0">
                <button @click="switchKeyValue" class="uk-button uk-button-muted">標準</button>
            </div>
            <div v-else-if="switchFunctionKey % 3 == 1">
                <button @click="switchKeyValue" class="uk-button uk-button-primary">単語検索</button>
            </div>
            <div v-else>
                <button @click="switchKeyValue" class="uk-button" style="backgroundColor: yellow;">ライト</button>
            </div>
        </div>

        <!-- wikiから引っ張ってくる記事 -->
        <!-- touchstart, touchmove, clickはボタンの押し具合によって挙動が変わる -->
        <div @select="selected" @touchstart="switchWordFunction" @touchmove='switchUnhighlight' @blur="selected" @keyup=
            "selected" @click="switchWordFunction">
            <div v-html="article"></div>
        </div>
    </div>
</div>

<script src="{{ asset('js/articlesShow.js') }}"></script>
<!-- 単語検索、ハイライト用css-->
<link href="{{ asset('css/floatContents.css') }}" rel="stylesheet">

@endsection
