@extends('layouts.app')

@section('content')

    @component('components.showNav')
    @endcomponent

    <div class="uk-container">
        <div class="uk-section-xsmal">
           <p class="uk-h3 tm-heading-fragment uk-text-muted">
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
                <li aria-expanded="false"><a href="#">likes</a></li>
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
                    @foreach( $publicArticles as $publicArticle )
                        <div class="uk-card uk-card-small uk-card-default uk-card-body">
                            <a href="/articles/{{ $publicArticle->id }}" class="uk-card-title"><strong>{{ $publicArticle->title }}</strong></a>
                            <p>{{ $publicArticle->summary }}</p>
                        </div>
                    @endforeach
                    <div class="uk-section-xsmall">
                        <ul class="uk-pagination uk-flex-center">
                            {{ $publicArticles->links() }}
                        </ul>
                    </div>
                </li>
                <li>
                    @foreach( $usersArticles as $usersArticle )
                        <div class="uk-card uk-card-small uk-card-default uk-card-body">
                            <a href="/articles/{{ $usersArticle->id }}" class="uk-card-title"><strong>{{ $usersArticle->title }}</strong></a>
                            <p>{{ $usersArticle->summary }}</p>
                        </div>
                    @endforeach
                    <div class="uk-section-xsmall">
                        <ul class="uk-pagination uk-flex-center">
                            {{ $usersArticles->links() }}
                        </ul>
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
