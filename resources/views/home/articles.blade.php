@extends('layouts.app')

@section('content')
    @component('components.nav')
    @endcomponent

    <!-- uk-container 横にpadding uk-section 縦にpadding -->
    <div class="uk-section-primary uk-section-xsmall uk-container">
        <div class="uk-margin">
            <h1 class="uk-text-center uk-text-primary " style="font-size: 30px;
                font-family: 'Pacifico', cursive;">
                Articles
            </h1>
            <p class='uk-text-lead'>・Top Hit</p>
            <div class="uk-first-column">
                <div class="uk-card uk-card-default uk-margin uk-border-rounded" style="border: solid 1px #fff;">
                    <div class="uk-card-header uk-section-primary">
                        <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <div class="uk-cover-container"><img src="https://ai-create.net/lab/uikit/sample/images/hero.jpg" alt="*" uk-cover="" class="uk-cover" style="width: 107px; height: 80px;">
                                    <canvas width="80" height="80"></canvas>
                                </div>
                            </div>
                            <div class="uk-width-expand ">
                                <h3 class="uk-card-title uk-margin-remove-bottom">夏目漱石</h3>
                                <p class="uk-text-meta">
                                    <time>April 01, 2017</time>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-body uk-section-primary">
                        <p>智ちに働けば角かどが立つ。情じょうに棹さおさせば流される。意地を通とおせば窮屈きゅうくつだ。とかくに人の世は住みにくい。</p>
                    </div>
                    <div class="uk-card-footer uk-section-primary">
                        <a class="uk-button uk-button-text" href="#">Read More</a>
                    </div>
                </div>
            </div>
            </div>
            <div class="uk-child-width-1-2" uk-grid>
                <p class="uk-text-lead uk-text-left uk-text-primary">・Articles</p>
                <p class="uk-text-right uk-text-primary" style="margin-top: 10px;">see more...</p>
            </div>
            <div class="uk-grid-small" data-uk-grid-margin="">
                <div class="uk-width-medium-1-3 uk-row-first">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-4">
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                        </div>
                        <div class="uk-width-3-4">
                            <h2 class="uk-h3">Sample Heading</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="uk-width-medium-1-3 uk-row-first">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-4">
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                        </div>
                        <div class="uk-width-3-4">
                            <h2 class="uk-h3">Sample Heading</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="uk-width-medium-1-3 uk-row-first">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-4">
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                        </div>
                        <div class="uk-width-3-4">
                            <h2 class="uk-h3">Sample Heading</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
