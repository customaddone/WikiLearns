@extends('layouts.app')

@section('content')
    @component('components.nav')
    @endcomponent

    <!-- uk-container 横にpadding uk-section 縦にpadding -->
    <div class="uk-section-primary uk-section-xsmall uk-container">
        <div class="uk-margin">
            <h1 class="uk-text-center uk-text-primary" style="font-size: 30px; font-family: 'Pacifico', cursive;">
                     Search
            </h1>
            <form class="uk-search uk-search-default " style="width: 100%;">
                <a href="" uk-search-icon></a>
                <input class="uk-search-input " type="search" placeholder="Search...">
            </form>
        </div>
        <!-- uk-card-primary 青色カード表示　-->
        <div style="padding: 5px 5px;">
            <div class="uk-card uk-card-header uk-card-primary uk-width-1-2@m uk-border-rounded "
                style="border: solid 1px #fff;">
                <p><strong>Title</strong></p>
                <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div style="padding: 5px 5px;">
            <div class="uk-card uk-card-header uk-card-primary uk-width-1-2@m uk-border-rounded "
                style="border: solid 1px #fff;">
                <p><strong>Title</strong></p>
                <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div style="padding: 5px 5px;">
            <div class="uk-card uk-card-header uk-card-primary uk-width-1-2@m uk-border-rounded "
                style="border: solid 1px #fff;">
                <p><strong>Title</strong></p>
                <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

@endsection
