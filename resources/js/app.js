require('./bootstrap');

// テンプレートをインポートする
import HomeArticles from './components/HomeArticles.vue'
import HomeSearch from './components/HomeSearch.vue'
import HomeVocabula from './components/HomeVocabula.vue'

var router = new VueRouter({

  routes: [
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
  ]
})

var app = new Vue({
  el: "#homeView",
  router: router
})
