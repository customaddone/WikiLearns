@extends('layouts.app')

@section('content')

    @component('components.showNav')
    @endcomponent

    <div class="uk-container">
        <h1>・Heading</h1>
    </div>
    <div class="uk-padding-small">
        <ul class="uk-child-width-expand uk-tab" uk-tab="animation: uk-animation-fade">
            <li class="" aria-expanded="false"><a href="#">Words</a></li>
            <li aria-expanded="true" class="uk-active"><a href="#">Article</a></li>
        </ul>
        <ul class="uk-switcher uk-margin">
            <li>
                <div class="uk-card uk-card-small uk-grid-collapse uk-card-default
                    uk-padding-small" uk-grid>
                    <div class="uk-width-2-3">
                        <h3><strong>word</strong></h3>
                        <p>means</p>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-flex-left" style="padding-top: 7px;" uk-grid>
                            <button uk-icon="icon: pencil; ratio: 1.5" class="uk-logo">
                            </button>
                            <button uk-icon="icon: trash; ratio: 1.5" class="uk-logo">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-small uk-grid-collapse uk-card-default
                    uk-padding-small" uk-grid>
                    <div class="uk-width-2-3">
                        <h3><strong>word</strong></h3>
                        <p>means</p>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="uk-flex-left" style="padding-top: 7px;" uk-grid>
                            <button uk-icon="icon: pencil; ratio: 1.5" class="uk-logo">
                            </button>
                            <button uk-icon="icon: trash; ratio: 1.5" class="uk-logo">
                            </button>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-small uk-card-default uk-card-body">
                    <p class="uk-card-title"><strong>あ</strong></p>
                    <p>あああ</p>
                </div>
            </li>
        </ul>
    </div>
@endsection
