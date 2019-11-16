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
                            <li v-for="(article, index) in articles" v-bind:key="index">
                                <a :href="'articles/vocabula/' + article.id "><h1>{{ article.title }}</h1></a>
                                <p class="uk-accordion-title uk-margin-top" style="font-size: 15px;">Summary</p>
                                <div class="uk-accordion-content" aria-hidden="true" hidden="hidden">
                                    <p>{{ article.summary }}</p>
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
    })
  },
}
</script>
