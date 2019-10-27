<template>
<!-- uk-container 横にpadding uk-section 縦にpadding -->
    <div class="uk-section-primary uk-section-xsmall uk-container">
        <div class="uk-margin">

            <!-- タイトル -->
            <h1 class="uk-text-center uk-text-primary " style="font-size: 30px;
                font-family: 'Pacifico', cursive;">
                ~Articles~
            </h1>

            <!-- TopHit -->
            <p class='uk-text-lead'>・Top Hit</p>
            <div class="uk-first-column">
                <div class="uk-card uk-card-default uk-margin uk-border-rounded" style="border: solid 1px #fff;">
                    <div class="uk-card-header uk-section-primary">
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
                    <div class="uk-card-body uk-section-primary">
                        <p>智ちに働けば角かどが立つ。情じょうに棹さおさせば流される。意地を通とおせば窮屈きゅうくつだ。とかくに人の世は住みにくい。</p>
                    </div>
                    <div class="uk-card-footer uk-section-primary">
                        <a class="uk-button uk-button-text" href="#">Read More</a>
                    </div>
                </div>
            </div>

            <!-- 各記事 -->
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
                            <a v-on:click="articleDelete(articles[0].id)" href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                        </div>
                        <a :href="'articles/' + articles[0].id" class="uk-width-3-4">
                            <h2 class="uk-h3">{{ articles[0].title}}</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="uk-width-medium-1-3 uk-row-first">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-4">
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                            <a v-on:click="articleDelete(articles[1].id)" href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                        </div>
                        <a :href="'articles/' + articles[1].id" class="uk-width-3-4">
                            <h2 class="uk-h3">{{ articles[1].title}}</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="uk-width-medium-1-3 uk-row-first">
                    <div class="uk-grid uk-grid-small">
                        <div class="uk-width-1-4">
                            <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                            <a v-on:click="articleDelete(articles[2].id)" href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                            </a>
                        </div>
                        <a :href="'articles/' + articles[2].id" class="uk-width-3-4">
                            <h2 class="uk-h3">{{ articles[2].title}}</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </a>
                    </div>
                </div>
                <hr>
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
      if (this.articles.length < 3) {
        for ( let i = 0; i < (3 - this.articles.length); i++ ) {
          this.articles.push({ id: 0, title: 'No data', })
        }
      }
    })
  },
  methods : {

    articleDelete: function (articleId) {
      confirm('are you sure?');

      axios.delete('api/del/' + articleId)
      .then(() => {
        alert('削除しました!');
      }).catch((response) => {
        console.log(response);
      });
    }
  }
}
</script>
