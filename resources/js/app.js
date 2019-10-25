require('./bootstrap');

// Vueファイルからテンプレートをインポートする
import HomeTop from './components/HomeTop.vue'
import HomeArticles from './components/HomeArticles.vue'
import HomeSearch from './components/HomeSearch.vue'
import HomeVocabula from './components/HomeVocabula.vue'
import ArticlesShow from './components/ArticlesShow.vue'

var router = new VueRouter({

  routes: [
    {
      path: '/',
      component: HomeTop
    },
    {
      path: '/articles',
      component: HomeArticles　// テンプレート名をcomponentにつける　
    },
    {
      path: '/search',
      component: HomeSearch
    },
    {
      path: '/vocabula',
      component: HomeVocabula
    },

    {
      path: '/search/:title?',
      name: 'search',
      component: ArticlesShow
    }
  ]
})

var app = new Vue({
  el: "#homeView",
  router: router
})
