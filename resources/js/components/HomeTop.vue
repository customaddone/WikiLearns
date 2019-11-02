<template>
    <div uk-height-viewport="offset-top: true; offset-bottom: true" class="uk-section-small  uk-text-center">
        <div class="uk-width-1-1">
            <div class="uk-container">　

                <!-- タイトル -->
                <h1 class="uk-text-primary uk-heading-large" style="font-family: 'Pacifico', cursive;">
                    ~WikiLearns~
                </h1>

                <!-- 中央のマーク-->
                <p style="padding: 80px;">
                </p>

                <!-- 中央の文章 -->
                <p class="uk-text-lead uk-text-primary" style="font-family: 'Pacifico', cursive;">
                    For reading wiki articles
                </p>

                <!-- リンク先ボタン -->
                <div uk-grid="" class="uk-grid-medium uk-flex-inline uk-flex-center uk-grid ">
                    <div class="uk-first-column">
                        <router-link to="/search" class="uk-border-rounded uk-button
                          uk-button-default tm-button-default uk-button-large tm-button-large button-border">Findings</router-link>
                    </div>
                    <div>
                        <router-link to="/articles" class="uk-border-rounded uk-button
                          uk-button-default tm-button-default uk-button-large tm-button-large button-border">Articles</router-link>
                    </div>
                    <div class="uk-first-column">
                        <router-link to="/vocabula" class="uk-border-rounded uk-button
                          uk-button-default tm-button-default uk-button-large tm-button-large button-border">Vocabla</router-link>
                    </div>
                    <div>
                        <a class="uk-border-rounded uk-button uk-button-default tm-button-default uk-button-large tm-button-large button-border">settings</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
