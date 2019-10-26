<template>
<div>
    <!-- ナビバー componentにはvueで宣言した変数の値は渡されないっぽい -->
    <div class="uk-section-primary" style="width: 100%; border-bottom: dotted 2px #ffffff;">
        <div class="uk-container">
            <nav class="uk-navbar">
                <div class="uk-navbar-left">
                    <a href="../" uk-icon="icon: tag" class="uk-navbar-item uk-logo">
                    </a>
                </div>
                <div class="uk-navbar-center">
                    <a href="/" class="uk-navbar-item">
                    <div style="font-size: 30px; font-family: Droid Sans;
                        ">
                        WikiLearns
                    </div>
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <a uk-navbar-toggle-icon v-on:click="inportButton" class="uk-icon
                        uk-navbar-toggle-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20"
                          data-svg="navbar-toggle-icon">
                            <rect y="9" width="20" height="2"></rect>
                            <rect y="3" width="20" height="2"></rect>
                            <rect y="15" width="20" height="2"></rect>
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>

    <div class="showInportBox">
        <div v-if="inportArticleButton" class="uk-card uk-card-default uk-margin" style="width: 250px;">
            <div class="uk-card-media-top">
                <div class="uk-cover-container">
                </div>
                <div class="uk-card-body" style="padding: 5px;">
                    <a class="uk-card-title" v-on:click="inportArticle">インポート</a>
                    <p style="height: 105px; overflow: hidden;">{{ translated }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="uk-container">
        <!-- 単語検索結果を表示するカードを右上に設置 -->
        <div class="showTextBox">
            <div v-if="switchFunctionKey % 3 == 1" class="uk-card uk-card-default uk-margin" style="width: 250px;">
                <div class="uk-card-media-top">
                    <div class="uk-cover-container">
                    </div>
                    <div class="uk-card-body" style="padding: 5px;">
                        <h3 class="uk-card-title">{{ selectedText }}</h3>
                        <p style="height: 105px; overflow: hidden;">{{ translated }}</p>
                    </div>
                    <div class="uk-card-footer" style="padding: 5px 25px;"><a class="uk-text-muted" href="#">READ MORE</a></div>
                </div>
            </div>
        </div>

        <!-- ハイライトのカラー選択 -->
        <div class="showTextBox">
            <div v-if="switchFunctionKey % 3 == 2" class="uk-card uk-card-default uk-margin" style="width: 250px;">
                <div class="uk-card-media-top">
                    <div class="uk-cover-container">
                    </div>
                    <div class="uk-card-body" style="padding: 5px;">
                        <h3 class="uk-card-title">カラー選択</h3>
                        <div class="uk-grid-small uk-text-center" uk-grid
                            style="padding-left: 12px;">
                            <div>
                                <div v-bind:class="{ 'sample-active' : isActive[0] }" v-on:click="changeColor(0)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #FF89FF;　opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div v-bind:class="{ 'sample-active' : isActive[1] }" v-on:click="changeColor(1)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #89DB89; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div v-bind:class="{ 'sample-active' : isActive[2] }" v-on:click="changeColor(2)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #90AFEE; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div  v-bind:class="{ 'sample-active' : isActive[3] }" v-on:click="changeColor(3)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #C8AAF2; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div  v-bind:class="{ 'sample-active' : isActive[4] }" v-on:click="changeColor(4)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #8BDEDE; opacity: 0.3;"></div>
                            </div>
                            <div>
                                <div  v-bind:class="{ 'sample-active' : isActive[5] }" v-on:click="changeColor(5)"
                                    class="uk-card uk-card-default uk-card-body uk-border-rounded"
                                    style="background-color: #FF9999; opacity: 0.3;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p>右下のボタンでモードを切り替えてください</p>
        <p>単語検索モード：単語１wordを範囲指定して適当な場所を押すと検索結果が右上に出ます</p>
        <p>ハイライトモード：範囲指定して適当な場所を軽くタッチするとハイライトが付きます</p>
        <p>長押ししてハイライトの周りをグリグリするとして小さく指をずらすとハイライトが消えます（割と広範囲
        が消えます）</p>

        <!-- 単語モード、ハイライトモード、標準モードを切り替えるためのボタン -->
        <div class="showSwitchButton">
            <div v-if="switchFunctionKey % 3 == 0">
                <button @click="switchKeyValue" class="uk-button uk-button-muted">標準</button>
            </div>
            <div v-else-if="switchFunctionKey % 3 == 1">
                <button @click="switchKeyValue" class="uk-button uk-button-primary">単語検索</button>
            </div>
            <div v-else>
                <button @click="switchKeyValue" class="uk-button" style="backgroundColor: yellow;">ライト</button>
            </div>
        </div>

        <!-- wikiから引っ張ってくる記事 -->
        <!-- touchstart, touchmove, clickはボタンの押し具合によって挙動が変わる -->
        <div @select="selected" @touchstart="switchWordFunction" @touchmove='switchUnhighlight' @blur="selected" @keyup=
            "selected" @click="switchWordFunction">

            <div v-html="article"></div>
        </div>
    </div>
</div>
</template>

<script>
export default {
  data:function () {
    return {

      /* mount時にwikiの記事を引っ張ってくるためのquery */
      article: "",
      showquery: {
        format: 'json',
        action: 'parse',
        origin: '*',
        page: "",
      },
      url: "https://en.wikipedia.org/w/api.php",

      /* 単語検索モード、ハイライトモード、標準モードを切り替える際のキー */
      switchFunctionKey: 0,

      /*
        translatingWord 入力する単語
        selectedText 表示する単語カードのタイトル
        searchWordId axios1回目の通信で返ってきた記事のID
        translated 表示する単語カードの本文
      */
      translatingWord: "",
      selectedText: "使い方",
      searchWordId: "",
      translated: "「単語検索」のボタンで表示切り替え、範囲指定＋適当なところをタッチで単語検索",

      // ハイライトの色切り替えのためのスイッチ
      isActive: [true, false, false, false, false, false],
      // ハイライトの色
      nowHighlightColor: "#FF89FF",
      // ハイライトの色の配列
      highlightColor: ["#FF89FF", "#89DB89", "#90AFEE", "	#C8AAF2", "#8BDEDE", "#FF9999"],

      // 記事取り込み用スイッチ
      inportArticleButton: false,
    }
  },
  /* ページを開いた時に前のページからパスを受け取り、axiosでwikiの記事を引っ張ってくる */
  mounted: function () {

    /* 前のページからパス(wikiのページのタイトル)を受け取る */
    var pathname= location.pathname;
   var searchname = pathname.split("/");
   var underVarJoin = searchname[3].split("%20").join('_')
   this.showquery.page = (searchname.length == 4) ? encodeURI(underVarJoin) : "";

    /* axiosで記事を引っ張ってくる。その際、記事上のaリンクを加工する(./任意のタイトルでページを
       開けるように) */
    axios.get(this.url, {params: this.showquery})
         .then((response) => {
            this.article = response.data.parse.text["*"]
             .replace(
             /<a href="\/wiki\/((?!File:).*?)".*?>(.+?)<\/a>/g,
             '<a href="./$1">$2</a>')
             .replace(
             /<a href="\/w\/index.*?".*?>(.*?)<\/a>/g,
             '$1'
             )
             .replace(
             /<a href="((?=Help).*?)".*?>(.*?)<\/a>/g,
             '$2'
             );
         })
    .catch(response => console.log(response));
  },

  methods: {
    /* ボタンで単語検索モード、ハイライトモード、標準モードを切り替えて、touchstart,
       touchmove, clickの挙動を変える */
    switchKeyValue: function () {
      this.switchFunctionKey += 1
    },
    switchWordFunction: function () {

      if (this.switchFunctionKey % 3 == 1) {
         this.searchWordFunction();
      } else if (this.switchFunctionKey % 3 == 2) {
         this.selected();
      }

    },
    switchUnhighlight: function () {

      if (this.switchFunctionKey % 3 == 2) {
         this.unhighlight();
      }

    },

    /* 単語検索を行う */
    searchWordFunction: function(event) {

      /* 検索ワードが空であれば何もしない */
      if (window.getSelection().toString() !== "") {
        this.selectedText = window.getSelection().toString();
        this.translatingWord = this.selectedText;
        var seeWord = this.selectedText;
      }

      /* 選択した単語が名詞の複数形、動詞の過去形だった場合整形 */
      var translateCut = function() {

        /* 配列の中の要素が末尾にあれば切り取る */
        var endword = ['ing', 'es', 's', 'ed', 'd'];

        for(var i = 0; i < endword.length; i++){

          /* 配列の中の要素が末尾にあるか、配列の前から順に調べていく
             あれば末尾を切り取りfunctionの戻り値にしてループを抜ける */
          var pattern = new RegExp('^(.+)' + endword[i] + '$');
          var searchWord = seeWord.match(pattern);
          if (searchWord) {
            var cuttedWord = searchWord[0].replace(pattern, '$1');
            return cuttedWord;

          }
        }
        /* ヒットしなければ入力した語をそのまま返す */
        return seeWord;
      }

      /* まず入力された単語を検索する。無ければ、整形後の単語で検索
         それでも無ければ「検索に一致する項目は...」を表示 */
      this.researchAxios(this.translatingWord).catch(() => {
        this.researchAxios(translateCut()).catch(() => {
          this.translated = "検索に一致する項目はありませんでした...";
        })
      })


    },
    /* デ辞蔵を使って単語検索->ヒットすればIDを取得して単語のページを検索
       Guzzleを使ってクロスオリジン通信を行う */
    researchAxios: function (word) {
      return new Promise((resolve, reject) => {
        axios.get("/api/data/" + word)
             .then((response) => {

               /* 戻ってきたデータからIDを取得 */
               var searchId = response.data.match(/(\d{6})/);
               this.searchWordId = searchId[0]

               /* IDを用いて単語のページを検索 */
               axios.get("/api/datashow/" + this.searchWordId)
                    .then((response) => {

                      var means = response.data.match(/<div>(.*?)<\/div>/);
                      this.translated = means[1];
                      resolve();
                    })
                    .catch(response => console.log(response));
              })
              .catch((response) => {

                console.log(response);
                reject();

              });
          });
    },
    /* ハイライトを書く */
    selected: function() {

        var userSelection =window.getSelection();
        var rangeObject = userSelection.getRangeAt(0);
        var span = document.createElement("span");
        rangeObject.surroundContents(span);
        span.style.backgroundColor = this.nowHighlightColor;

     },
     /* ハイライトを外す */
     unhighlight: function() {

       var userSelection = window.getSelection();
       var startRangeObject = userSelection.getRangeAt(0).startContainer;
       var endRangeObject = userSelection.getRangeAt(0).endContainer;

       var child = startRangeObject
       while (child) {
         if (child.nodeName == "SPAN") {
           var insertChild = document.createTextNode(child.textContent);
           var spanPalent = child.parentNode;
           spanPalent.insertBefore(insertChild, child);
           child.parentNode.removeChild(child);
         }

         child = child.nextSibling;

       }
     },
     changeColor: function (number) {
       // 一旦全ての色をfalse（初期化）
       this.isActive = [false, false, false, false, false, false];
       // 右上のカードの表示変更
       this.isActive[number] = true;
       // ハイライトの色変更
       this.nowHighlightColor = this.highlightColor[number]
     },

     inportButton: function () {
       this.inportArticleButton = !this.inportArticleButton;
     },

     // wiki記事を取り込む
     inportArticle: function () {
       axios.post('/api/add',{
         title: this.showquery.page,
         userId: 1,
         // wikiの記事のaリンクを消す replaceは非破壊的メソッド
         article: this.article
         .replace(
         /<a.*?>(.+?)<\/a>/g,
         '$1'),
         status: 'wiki',
       }).then((response) => {
         alert('インポートしました！！')
       }).catch(function (error) {

       console.log(error.response.data);
     console.log(error.response.status);      // 例：400
     console.log(error.response.statusText);  // Bad Request
     console.log(error.response.headers);

       });
     }
  },
}
</script>
<style scoped>
</style>
