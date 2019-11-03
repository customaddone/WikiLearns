@extends('layouts.app')

@section('content')
<div id="inportArticle">

    @component('components.showNav')
    @endcomponent

    <div class="showInportBox">
        <div v-if="inportArticleButton" class="uk-card uk-card-default uk-margin" style="width: 250px;">
            <div class="uk-card-media-top">
                <div class="uk-cover-container">
                </div>
                <div class="uk-card-body" style="padding: 5px;">
                    <a class="uk-card-title" v-on:click="editArticle">エディット</a>
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
                    <div v-on:click="registerWord" class="uk-card-footer" style="padding: 5px 25px;">単語登録</div>
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

        <!-- 単語モード、ハイライトモード、標準モードを切り替えるためのボタン -->
        <div class="showSwitchButton uk-border-circle" @click="switchKeyValue">
            <div v-if="switchFunctionKey % 3 == 0">
                <div uk-icon="icon: bookmark; ratio: 1.5" style="margin-left: 9px; margin-top: 10px;"></div>
            </div>
            <div v-else-if="switchFunctionKey % 3 == 1">
                <div uk-icon="icon: album" style="margin-left: 10px; margin-top: 9px;"></div>
            </div>
            <div v-else>
                <div uk-icon="icon: italic" style="margin-left: 10px; margin-top: 9px;"></div>
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
<script src="{{ asset('js/showInportArticle.js') }}"></script>

@endsection
