@extends('layouts.app')

@section('content')

    @component('components.showNav')
    @endcomponent

    <div id="vocabula">

        @component('components.dictAndHighlightForEdit')
        @endcomponent

        <div class="uk-container">
            <h1>・{{ $article->title }}</h1>
        </div>
        <div class="uk-padding-small">
            <ul class="uk-child-width-expand uk-tab" uk-tab="animation: uk-animation-fade">
                <li class="" aria-expanded="false"><a href="#">Words</a></li>
                <li aria-expanded="true" class="uk-active"><a href="#">Article</a></li>
            </ul>
            <!-- 単語一覧ページ -->
            <ul class="uk-switcher uk-margin">
                <li>
                    <div v-for="(relatedWord, index) in relatedWords" v-bind:key="index"
                        class="uk-margin-small-right uk-margin-small-left uk-float-left" style="height: 100px; width: 330px;">
                        <div class="uk-card uk-card-small uk-grid-collapse uk-card-default
                            uk-padding-small" uk-grid>
                            <div class="uk-width-2-3">
                                <h3><strong>@{{ relatedWord.word }}</strong></h3>
                                <p style="height: 40px;　overflow: hidden;">@{{ relatedWord.mean }}</p>
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-flex" style="padding-top: 15px;" uk-grid>
                                    <a href="#modal-edit" @click="showModal(relatedWord)" uk-icon="icon: pencil; ratio: 1.5"
                                        class="uk-logo" uk-toggle>
                                    </a>
                                    <a @click="wordDelete(relatedWord.id)" uk-icon=
                                        "icon: trash; ratio: 1.5" class="uk-logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="modal-edit" uk-modal>
                        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                            <h3 class="uk-modal-title">Edit</h3>
                            <p>word: @{{ editWord }}</p>
                            <p>means:</p>
                            <textarea v-model="editMean" rows="5"
                                style="width: 100%;"></textarea>
                            <p class="uk-text-right">
                                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                                <button @click="wordEdit(editId, editMean)"
                                    class="uk-button uk-button-primary uk-modal-close" type="button">Save</button>
                            </p>
                        </div>
                    </div>

                    <!-- これをつけないと一番下の単語がフッターに埋まる -->
                    <div style="padding: 300px 0px;">
                    </div>

                </li>

                <!-- 記事ページ　-->
                <li @select="selected" @touchstart="switchWordFunction" @touchmove=
                    'switchUnhighlight' @blur="selected" @keyup="selected" @click="switchWordFunction">
                    <div id="target">{!! $article->article !!}</div>
                </li>
            </ul>

            <div class="showSwitchButton uk-border-circle">
                <a href="#top" uk-icon="icon: chevron-up; ratio: 1.5" style="margin-left: 9px; margin-top: 10px;"></a>
            </div>

            @component('components.vocabulaFooter')
            @endcomponent

        </div>
    </div>

    <script src="{{ asset('js/vocabula.js') }}"></script>
@endsection
