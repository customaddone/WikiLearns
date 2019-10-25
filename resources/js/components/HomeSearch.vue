<template>
    <div class="uk-section-primary uk-section-xsmall uk-container">
        <div class="uk-margin">
            <div>

                <!-- タイトル -->
                <h1 class="uk-text-center uk-text-primary" style="font-size: 30px; font-family: 'Pacifico', cursive;">
                   ~Search~
                </h1>

                <!-- 検索ボタン -->
                <div class="uk-search uk-search-default"style="width: 100%;">
                    <a href="" uk-search-icon></a>
                    <input class="uk-search-input " type="search"
                        v-model="searchword" placeholder="Search...">
                </div>

            </div>

            <!-- uk-card-primary 青色カード表示　-->
            <!-- 検索結果表示 -->
            <div v-for="(searchResult, index) in searchResults" v-bind:key="index">
                <div v-if="searchResult" style="padding: 5px 5px;">
                    <!-- toの前の「:」を忘れない -->
                    <router-link  :to="{ name : 'search', params: { title: searchResult.title } }">
                        <div class="uk-card uk-card-header uk-card-primary uk-width-1-2@m uk-border-rounded "
                            style="height: 200px; border: solid 1px #fff;">
                            <!-- 検索結果見出し -->
                            <p><strong>{{ searchResult.title }}</strong></p>
                            <!-- 検索結果本文 -->
                            <div v-html="searchResult.snippet"></div>
                        </div>
                    </router-link>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
  data: function () {
    return {
      searchResults: [{}, {}, {}],
      usersshow: "",
      searchword: "",
    }

  },
  watch: {
    searchword: function(newSearch) {

      // usersを空にするとResultが空になる
      if (newSearch == "") {
        this.searchResults = [{}, {},　{}];
      }

      axios.get("/api/homeSearch/" + newSearch)
           .then((response) => {
             for(var i = 0; i < 3; i++) {
             // ３つだけ取って配列に入れる
             if (this.searchResults.length < 3) {
               this.searchResults.push(response.data.query.search[i]);
              } else {
                this.searchResults.shift();
                this.searchResults.push(response.data.query.search[i]);
              }
            }})
            .catch(response => console.log(response));
      }
   },
}
</script>
