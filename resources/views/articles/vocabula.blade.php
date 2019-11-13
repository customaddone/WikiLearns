@extends('layouts.app')

@section('content')

    @component('components.showNav')
    @endcomponent

    <div id="vocabula">

        @component('components.dictAndHighlightcard')
        @endcomponent

        <div class="uk-container">
            <h1>・{{ $article->title }}</h1>
        </div>
        <div class="uk-padding-small">
            <ul class="uk-child-width-expand uk-tab" uk-tab="animation: uk-animation-fade">
                <li class="" aria-expanded="false"><a href="#">Words</a></li>
                <li aria-expanded="true" class="uk-active"><a href="#">Article</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li>
                    <div v-for="(relatedWord, index) in relatedWords" v-bind:key="index"
                        class="uk-margin-right uk-float-left" style="height: 100px; width: 345px;">
                        <div class="uk-card uk-card-small uk-grid-collapse uk-card-default
                            uk-padding-small" uk-grid>
                            <div class="uk-width-2-3">
                                <h3><strong>@{{ relatedWord.word }}</strong></h3>
                                <p style="height: 40px;　overflow: hidden;">@{{ relatedWord.mean }}</p>
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-flex-left" style="padding-top: 15px;" uk-grid>
                                    <button uk-icon="icon: pencil; ratio: 1.5" class="uk-logo">
                                    </button>
                                    <a @click="wordDelete(relatedWord.id)" uk-icon="icon: trash; ratio: 1.5" class="uk-logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li @select="selected" @touchstart="switchWordFunction" @touchmove=
                    'switchUnhighlight' @blur="selected" @keyup="selected" @click="switchWordFunction">
                    {!! $article->article !!}
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
