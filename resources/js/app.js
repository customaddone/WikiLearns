require('./bootstrap');

// Vueファイルからテンプレートをインポートする
import HomeTop from './components/HomeTop.vue'
import HomeArticles from './components/HomeArticles.vue'
import HomeSearch from './components/HomeSearch.vue'
import HomeVocabula from './components/HomeVocabula.vue'

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
      path: '/search/:id',
      name: 'search',
      component: {
        template: '<div>タイトルはです</div>',
      }
    }
  ]
})

var app = new Vue({
  el: "#homeView",
  router: router
})
