<template>
<!-- uk-container 横にpadding uk-section 縦にpadding -->
    <div class=" uk-section-xsmall uk-container">
        <div class="uk-margin">

            <!-- タイトル -->
            <h1 class="uk-text-center uk-text-primary " style="font-size: 30px;
                font-family: 'Pacifico', cursive;">
                ~Articles~
            </h1>

            <!-- TopHit -->
            <div class="uk-first-column">
                <div class="uk-card uk-card-default uk-margin uk-border-rounded" style="border: solid 1px #fff;">
                    <p>・Top Hit</p>
                    <div class="uk-card-header">
                        <div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">
                            <div class="uk-width-auto uk-first-column">
                                <div class="uk-cover-container"><img src="https://tapittalk.com/wp-content/uploads/2018/10/be46dc68a2c32d89451ff8e6006216f3.jpg" alt="*" uk-cover="" class="uk-cover" style="width: 107px; height: 80px;">
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
                    <div class="uk-card-body">
                        <p>智ちに働けば角かどが立つ。情じょうに棹さおさせば流される。意地を通とおせば窮屈きゅうくつだ。とかくに人の世は住みにくい。</p>
                    </div>
                    <div class="uk-card-footer ">
                        <a class="uk-button uk-button-text" href="#">Read More</a>
                    </div>
                </div>
            </div>

            <!-- 各記事 -->
            </div>
            <div class="uk-child-width-1-2" uk-grid>
                <p>Articles</p>
                <a href="/seeMoreArticles" class="uk-text-right">see more...</a>
            </div>
            <ul class="uk-section-xsmall">
                <li class="uk-float-left" v-for="(article, index) in articles" v-bind:key="index">
                    <div class="uk-margin-small-right uk-margin-top uk-card uk-card-default uk-card-body"
                        style="height: 265px; width: 345px;">
                        <div>
                            <a v-on:click="articleDelete(article.id)" href="../" uk-icon="icon: trash" style="float: right; margin-left: 15px;"></a>
                            <a :href="'articles/' + article.id"  uk-icon="icon: pencil" style="float: right;"></a>
                        </div>
                        <h1 class="uk-card-title">{{ article.title }}</h1>
                        <div class="uk-child-width-1-2" uk-grid style="margin-top: 10px;">
                            <p>author: {{ article.name }}</p>
                            <p>status: wiki</p>
                        </div>
                        <hr>
                        <p>{{ article.summary }} ...</p>
                    </div>
                </li>
            </ul>
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
  methods : {

    articleDelete: function (articleId) {
      confirm('are you sure?');

      axios.delete('api/del/' + articleId)
      .then(() => {

      }).catch((response) => {
        console.log(response);
      });
    }
  }
}
</script>
