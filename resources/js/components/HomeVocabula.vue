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
            <h3>Articles and related words</h3>
            <section  id="link-accordion">
                <div class="uk-container">
                    <div class="uk-section-small">
                        <ul uk-accordion="" class="uk-accordion">
                            <li class="">
                                <h3 class="uk-accordion-title">タイトル 1</h3>
                                <div class="uk-accordion-content" aria-hidden="true" hidden="hidden">
                                    <p>コンテンツ 1 智ちに働けば角かどが立つ。情じょうに棹さおさせば流される。意地を通とおせば窮屈きゅうくつだ。とかくに人の世は住みにくい。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
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
