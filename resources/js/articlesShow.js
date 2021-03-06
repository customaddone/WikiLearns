var vm = new Vue({
  el: '#articlesShow',
  data:function () {
    return {

      /* mount時にwikiの記事を引っ張ってくるためのquery */
      article: "",
      articleDetail: "",
      showquery: {
        format: 'json',
        action: 'parse',
        origin: '*',
        page: "",
      },
      showDetailQuery: {
        format: 'json',
        action: 'query',
        prop: 'extracts',
        origin: '*',
        titles: "",
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
    this.showDetailQuery.titles = this.showquery.page;

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
    axios.get(this.url, {params: this.showDetailQuery})
         .then((response) => {
            var keyId = Object.keys(response.data.query.pages)
            this.articleDetail = response.data.query.pages[keyId].extract
            .replace(/<.+?>/g, "")
            .slice(0, 120);
         })
    .catch(response => console.log(response));

  /*  axios.get('/api/user?api_token=xVIgyVhqvSHV9HKR9o8BtLwM05ua97Lx2b75q2ouMkT4iqHI9uYQGkbl6Ms4')
         .then((response) => {
           alert(JSON.stringify(response.data))
         }).catch(response => console.log(response)); */
  },

  methods: {
    /* ボタンで単語検索モード、ハイライトモード、標準モードを切り替えて、touchstart,
       touchmove, clickの挙動を変える */
    switchKeyDictValue: function () {
      if (this.switchFunctionKey % 3 == 1) {
        this.switchFunctionKey = 0;
      } else {
        this.switchFunctionKey = 1;
      }
    },
    switchKeyHighlightValue: function () {
      if (this.switchFunctionKey % 3 == 2) {
        this.switchFunctionKey = 0
      } else {
        this.switchFunctionKey = 2
      }
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
         // wikiの記事のaリンクを消す replaceは非破壊的メソッド

         article: this.article
         .replace(/<a[\s\S]*?>/g, '')
         .replace(/<\/a>/g, ''),

         summary: this.articleDetail,
         status: 'wiki',

       }).then((response) => {
         alert('インポートしました！！')
       }).catch(function (error) {

         console.log(error);

       });
     }
  },
})
