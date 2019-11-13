@extends('layouts.app')

@section('content')

    @component('components.showNav')
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
                @foreach ($article->words as $word)
                    <div class="uk-card uk-card-small uk-grid-collapse uk-card-default
                        uk-padding-small" uk-grid>
                        <div class="uk-width-2-3">
                            <h3><strong>{{ $word->word }}</strong></h3>
                            <p style="height: 40px;">{{ str_limit($word->mean,40) }}</p>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="uk-flex-left" style="padding-top: 15px;" uk-grid>
                                <button uk-icon="icon: pencil; ratio: 1.5" class="uk-logo">
                                </button>
                                <button uk-icon="icon: trash; ratio: 1.5" class="uk-logo">
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </li>

            <li>
                {!! $article->article !!}
            </li>
        </ul>

        <div class="showSwitchButton uk-border-circle">
            <a href="#top" uk-icon="icon: chevron-up; ratio: 1.5" style="margin-left: 9px; margin-top: 10px;"></a>
        </div>
    </div>
@endsection
