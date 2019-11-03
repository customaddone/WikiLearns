@extends('layouts.app')

@section('content')

    @component('components.showNav')
    @endcomponent

    <div class="uk-container">
        <div class="uk-section-xsmal">
           <p class="uk-h3 tm-heading-fragment">
               See Articles
           </p>
           <div class="uk-container">
               <div class="uk-search uk-search-default"style="width: 100%;">
                   <p uk-search-icon></p>
                   <input class="uk-search-input " type="search" placeholder="Search...">
               </div>
           </div>
        </div>
        <div class="uk-section">
            <ul class="uk-child-width-expand uk-tab" uk-tab="animation: uk-animation-fade">
                <li class="" aria-expanded="false"><a href="#">finding</a></li>
                <li aria-expanded="true" class="uk-active"><a href="#">public</a></li>
                <li aria-expanded="false"><a href="#">users</a></li>
                <li aria-expanded="false"><a href="#">ITEM 4</a></li>
            </ul>
            <hr>
            <ul class="uk-switcher uk-margin">
                <li>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                </li>
                <li>
                    
                </li>
                <li>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                    <div class="uk-card uk-card-small uk-card-default uk-card-body">
                        <p class="uk-card-title"><strong>あ</strong></p>
                        <p>あああ</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection
