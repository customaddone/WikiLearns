require('./bootstrap');

Vue.component('home-articles', require('./components/HomeArticles.vue').default);

const app = new Vue({
    el: '#homeView'
});
