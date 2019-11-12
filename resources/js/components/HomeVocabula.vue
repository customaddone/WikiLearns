<template>
    <!-- uk-container 横にpadding uk-section 縦にpadding -->
      <div class="uk-section-xsmall uk-container">
        <div class="uk-margin">

            <!-- タイトル -->
            <h1 class="uk-text-center uk-text-primary " style="font-size: 30px;
                font-family: 'Pacifico', cursive;">
                ~Vocabulary~
            </h1>

            <!-- 記事 -->
            <hr>
            <p>Articles and related words</p>
            <div>
                <ul class="uk-child-width-expand uk-tab" uk-tab="animation: uk-animation-fade">
                    <li class="" aria-expanded="false"><a href="#">ITEM 1</a></li>
                    <li aria-expanded="true" class="uk-active"><a href="#">ITEM 2</a></li>
                    <li aria-expanded="false"><a href="#">ITEM 3</a></li>
                    <li aria-expanded="false"><a href="#">ITEM 4</a></li>
                </ul>
                <ul class="uk-switcher uk-margin">
                    <li>
                        <a :href="'articles/vocabula/' + articles[0].id "><h1>{{ articles[0].title}}</h1></a>
                        <p>{{ articles[0].summary }} ...</p>

                        <!-- 関連する単語 -->
                        <p><strong>・related words</strong></p>
                        <div class="uk-container">
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h1>{{ articles[1].title}}</h1>
                        <p>{{ articles[1].summary }} ...</p>

                        <p><strong>・related words</strong></p>
                        <div class="uk-container">
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h1>{{ articles[2].title}}</h1>
                        <p>{{ articles[2].summary }} ...</p>

                        <p><strong>・related words</strong></p>
                        <div class="uk-container">
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <h1>{{ articles[3].title}}</h1>
                        <p>{{ articles[3].summary }} ...</p>

                        <p><strong>・related words</strong></p>
                        <div class="uk-container">
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                            <div class="uk-child-width-1-3 uk-text-center" uk-grid>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                                <div>
                                    <p>sample</p>
                                    <p>例、サンプル</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data: function () {
    return {
      articles: [],
    }
  },
  // 記事表示
  mounted: function () {
    axios.get('/api/get'
    ).then((response) => {
      this.articles = [];
      this.articles = response.data;

      // 記事が３つ未満の場合は空のデータをarticlesに入れる
      if (this.articles.length < 4) {
        for ( let i = 0; i < 4; i++ ) {
          this.articles.push({
            id: 0,
            title: 'No data',
            summary: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          })
        }
      }
    })
  },
}
</script>
