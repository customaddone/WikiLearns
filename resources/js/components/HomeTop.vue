<template>
    <div uk-height-viewport="offset-top: true; offset-bottom: true" class="uk-section-primary uk-section-small  uk-text-center">
        <div class="uk-width-1-1">
            <div class="uk-container">　

                <!-- タイトル -->
                <h1 class="uk-heading-large" style="font-family: 'Pacifico', cursive;">
                    ~WikiLearns~
                </h1>

                <!-- 中央のマーク-->
                <p>
                    <svg width="168" height="155" viewBox="0 0 168 155" xmlns="http://www.w3.org/2000/svg" style="color: rgb(255, 255, 255);" class=" uk-svg" data-svg="./images/uikit-logo-large.svg">
                        <path fill="#fff" d="M117.4 33.3L93.3 47.9l27.8 15.8v41.5L83.8 126l-36.7-20.8V73L23 60.7v58.9l59.9 35.2 62.1-35.2V49.2l-27.6-15.9zM106.2 27.5L82.9 14 58.6 29.1l23.6 13z">
                        </path>
                    </svg>
                </p>

                <!-- 中央の文章 -->
                <p class="uk-text-lead">
                    For reading wiki articles
                </p>

                <!-- リンク先ボタン -->
                <div uk-grid="" class="uk-grid-medium uk-flex-inline uk-flex-center uk-grid ">
                    <div class="uk-first-column">
                        <router-link to="/search" class="uk-border-rounded uk-button
                          uk-button-default tm-button-default uk-button-large tm-button-large">Findings</router-link>
                    </div>
                    <div>
                        <router-link to="/articles" class="uk-border-rounded uk-button
                          uk-button-default tm-button-default uk-button-large tm-button-large">Articles</router-link>
                    </div>
                    <div class="uk-first-column">
                        <router-link to="/vocabula" class="uk-border-rounded uk-button
                          uk-button-default tm-button-default uk-button-large tm-button-large">Vocabla</router-link>
                    </div>
                    <div>
                        <a class="uk-border-rounded uk-button uk-button-default tm-button-default uk-button-large tm-button-large">settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
