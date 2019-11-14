var vm = new Vue({
  el: "#vocabula",
  data:function () {
    return {
      relatedWords: [],
      switchFunctionKey: 0,

      translatingWord: "",
      selectedText: "使い方",
      searchWordId: "",
      translated: "「単語検索」のボタンで表示切り替え、範囲指定＋適当なところをタッチで単語検索",
      editMean: "",

      isActive: [true, false, false, false, false, false],
      nowHighlightColor: "#FF89FF",
      highlightColor: ["#FF89FF", "#89DB89", "#90AFEE", "	#C8AAF2", "#8BDEDE", "#FF9999"],

    }
  },

  mounted: function () {
    this.wordIndex();
  },

  methods: {
   wordIndex: function () {
     var pathname= location.pathname;
     var searchId = pathname.split("/");

     axios.post('/api/words/' + searchId[3],{

     }).then((response) => {
       this.relatedWords = response.data;
     }).catch((response) => {

       console.log(response);
     })
   },

   registerWord: function () {
     var pathname= location.pathname;
     var searchId = pathname.split("/");

     axios.post('/api/words/add',{
       article_id: searchId[3],
       word: this.translatingWord,
       mean: this.translated,
       status: 0,
     }).then((response) => {
       alert('登録しました！！');
       this.wordIndex();
     }).catch((response) => {

       console.log(response);
     })
   },
   wordEdit: function (id, mean) {
     axios.post('/api/editwords/' + id, {
       mean: mean,
     })
     .then(() => {
       this.wordIndex();
     }).catch((response) => {
       console.log(response);
     });
   },
   wordDelete: function (id) {
     axios.delete('/api/delwords/' + id)
     .then(() => {
       this.wordIndex();
     }).catch((response) => {
       console.log(response);
     });
   },

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

   searchWordFunction: function(event) {

     if (window.getSelection().toString() !== "") {
       this.selectedText = window.getSelection().toString();
       this.translatingWord = this.selectedText;
       var seeWord = this.selectedText;
     }

     var translateCut = function() {

       var endword = ['ing', 'es', 's', 'ed', 'd'];

       for(var i = 0; i < endword.length; i++){

         var pattern = new RegExp('^(.+)' + endword[i] + '$');
         var searchWord = seeWord.match(pattern);
         if (searchWord) {
           var cuttedWord = searchWord[0].replace(pattern, '$1');
           return cuttedWord;

         }
       }

       return seeWord;
     }

     this.researchAxios(this.translatingWord).catch(() => {
       this.researchAxios(translateCut()).catch(() => {
         this.translated = "検索に一致する項目はありませんでした...";
       })
     })


   },

   researchAxios: function (word) {
     return new Promise((resolve, reject) => {
       axios.get("/api/data/" + word)
            .then((response) => {

              var searchId = response.data.match(/(\d{6})/);
              this.searchWordId = searchId[0]

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
   selected: function() {

       var userSelection =window.getSelection();
       var rangeObject = userSelection.getRangeAt(0);
       var span = document.createElement("span");
       rangeObject.surroundContents(span);
       span.style.backgroundColor = this.nowHighlightColor;

    },
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

      this.isActive = [false, false, false, false, false, false];
      this.isActive[number] = true;
      this.nowHighlightColor = this.highlightColor[number]
    },

    inportButton: function () {
      this.inportArticleButton = !this.inportArticleButton;
    },

  }
})
