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
            <ul>
                <li class="uk-section-xsmall">
                    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                        <div>
                            <a v-on:click="articleDelete(articles[0].id)" href="../" uk-icon="icon: trash" style="float: right; margin-left: 15px;"></a>
                            <a :href="'articles/' + articles[0].id"  uk-icon="icon: pencil" style="float: right;"></a>
                        </div>
                        <h1 class="uk-card-title">{{ articles[0].title}}</h1>
                        <div class="uk-child-width-1-2" uk-grid style="margin-top: 10px;">
                            <p>author: {{ articles[0].name }}</p>
                            <p>status: wiki</p>
                        </div>
                        <hr>
                        <p>{{ articles[0].summary }} ...</p>
                    </div>
                </li>
                <li>
                    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                        <div>
                            <a v-on:click="articleDelete(articles[1].id)" href="../" uk-icon="icon: trash" style="float: right; margin-left: 15px;"></a>
                            <a :href="'articles/' + articles[1].id"  uk-icon="icon: pencil" style="float: right;"></a>
                        </div>
                        <h1 class="uk-card-title">{{ articles[1].title}}</h1>
                        <div class="uk-child-width-1-2" uk-grid style="margin-top: 10px;">
                            <p>author: user</p>
                            <p>status: wiki</p>
                        </div>
                        <hr>
                        <p>{{ articles[1].summary }} ...</p>
                    </div>
                </li>
                <li class="uk-section-xsmall">
                    <div class="uk-card uk-card-default uk-card-body uk-width-1-2@m">
                        <div>
                            <a v-on:click="articleDelete(articles[2].id)" href="../" uk-icon="icon: trash" style="float: right; margin-left: 15px;"></a>
                            <a :href="'articles/' + articles[2].id"  uk-icon="icon: pencil" style="float: right;"></a>
                        </div>
                        <h1 class="uk-card-title">{{ articles[2].title }}</h1>
                        <div class="uk-child-width-1-2" uk-grid style="margin-top: 10px;">
                            <p>author: user</p>
                            <p>status: wiki</p>
                        </div>
                        <hr>
                        <p>{{ articles[2].summary }} ...</p>
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
      alert(JSON.stringify(response.data));
      this.articles = [];
      this.articles = response.data;

      // 記事が３つ未満の場合は空のデータをarticlesに入れる
      if (this.articles.length < 3) {
        for ( let i = 0; i < 3; i++ ) {
          this.articles.push({
            id: 0,
            name: 'guest',
            title: 'No data',
            summary: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
          })
        }
      }
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
