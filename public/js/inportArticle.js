/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/showInportArticle.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/showInportArticle.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      /* mount時にwikiの記事を引っ張ってくるためのquery */
      article: "",

      /* インポートした記事のID */
      articleId: 0,

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
      inportArticleButton: false
    };
  },

  /* ページを開いた時に前のページからパスを受け取り、axiosでwikiの記事を引っ張ってくる */
  mounted: function mounted() {
    var _this = this;

    /* 前のページからパス(wikiのページのタイトル)を受け取る */
    var pathname = location.pathname;
    var searchname = pathname.split("/");
    this.articleId = searchname[2];
    /* axiosで記事を引っ張ってくる。その際、記事上のaリンクを加工する(./任意のタイトルでページを
       開けるように) */

    axios.get('/api/find/' + this.articleId).then(function (response) {
      _this.article = response.data.article;
    })["catch"](function (response) {
      return console.log(response);
    });
  },
  methods: {
    /* ボタンで単語検索モード、ハイライトモード、標準モードを切り替えて、touchstart,
       touchmove, clickの挙動を変える */
    switchKeyValue: function switchKeyValue() {
      this.switchFunctionKey += 1;
    },
    switchWordFunction: function switchWordFunction() {
      if (this.switchFunctionKey % 3 == 1) {
        this.searchWordFunction();
      } else if (this.switchFunctionKey % 3 == 2) {
        this.selected();
      }
    },
    switchUnhighlight: function switchUnhighlight() {
      if (this.switchFunctionKey % 3 == 2) {
        this.unhighlight();
      }
    },

    /* 単語検索を行う */
    searchWordFunction: function searchWordFunction(event) {
      var _this2 = this;

      /* 検索ワードが空であれば何もしない */
      if (window.getSelection().toString() !== "") {
        this.selectedText = window.getSelection().toString();
        this.translatingWord = this.selectedText;
        var seeWord = this.selectedText;
      }
      /* 選択した単語が名詞の複数形、動詞の過去形だった場合整形 */


      var translateCut = function translateCut() {
        /* 配列の中の要素が末尾にあれば切り取る */
        var endword = ['ing', 'es', 's', 'ed', 'd'];

        for (var i = 0; i < endword.length; i++) {
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
      };
      /* まず入力された単語を検索する。無ければ、整形後の単語で検索
         それでも無ければ「検索に一致する項目は...」を表示 */


      this.researchAxios(this.translatingWord)["catch"](function () {
        _this2.researchAxios(translateCut())["catch"](function () {
          _this2.translated = "検索に一致する項目はありませんでした...";
        });
      });
    },

    /* デ辞蔵を使って単語検索->ヒットすればIDを取得して単語のページを検索
       Guzzleを使ってクロスオリジン通信を行う */
    researchAxios: function researchAxios(word) {
      var _this3 = this;

      return new Promise(function (resolve, reject) {
        axios.get("/api/data/" + word).then(function (response) {
          /* 戻ってきたデータからIDを取得 */
          var searchId = response.data.match(/(\d{6})/);
          _this3.searchWordId = searchId[0];
          /* IDを用いて単語のページを検索 */

          axios.get("/api/datashow/" + _this3.searchWordId).then(function (response) {
            var means = response.data.match(/<div>(.*?)<\/div>/);
            _this3.translated = means[1];
            resolve();
          })["catch"](function (response) {
            return console.log(response);
          });
        })["catch"](function (response) {
          console.log(response);
          reject();
        });
      });
    },

    /* ハイライトを書く */
    selected: function selected() {
      var userSelection = window.getSelection();
      var rangeObject = userSelection.getRangeAt(0);
      var span = document.createElement("span");
      rangeObject.surroundContents(span);
      span.style.backgroundColor = this.nowHighlightColor;
    },

    /* ハイライトを外す */
    unhighlight: function unhighlight() {
      var userSelection = window.getSelection();
      var startRangeObject = userSelection.getRangeAt(0).startContainer;
      var endRangeObject = userSelection.getRangeAt(0).endContainer;
      var child = startRangeObject;

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
    changeColor: function changeColor(number) {
      // 一旦全ての色をfalse（初期化）
      this.isActive = [false, false, false, false, false, false]; // 右上のカードの表示変更

      this.isActive[number] = true; // ハイライトの色変更

      this.nowHighlightColor = this.highlightColor[number];
    },
    inportButton: function inportButton() {
      this.inportArticleButton = !this.inportArticleButton;
    },
    // wiki記事を取り込む
    editArticle: function editArticle() {
      // 現在のhtmlの文字列からナビ部分とボタンの文字列を削除
      this.nowpage = document.body.innerHTML.replace(/<div id="inport.+<div data-v-3916c6b8=\"\"><div data-v-3916c6b8=\"\">/, '').replace(/<script src="http.+cle.js"><\/script>/, '').replace(/<\/div><\/div><\/div><\/div>/, '').slice(0, -15); //絶対１５じゃないと思うんだけど

      axios.post('/api/edit', {
        id: this.articleId,
        article: this.nowpage
      }).then(function (response) {
        alert('編集しました！！');
      })["catch"](function (response) {
        console.log(response);
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/components/showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c(
      "div",
      {
        staticClass: "uk-section-primary",
        staticStyle: { width: "100%", "border-bottom": "dotted 2px #ffffff" }
      },
      [
        _c("div", { staticClass: "uk-container" }, [
          _c("nav", { staticClass: "uk-navbar" }, [
            _vm._m(0),
            _vm._v(" "),
            _vm._m(1),
            _vm._v(" "),
            _c("div", { staticClass: "uk-navbar-right" }, [
              _c(
                "a",
                {
                  staticClass:
                    "uk-icon\n                        uk-navbar-toggle-icon",
                  attrs: { "uk-navbar-toggle-icon": "" },
                  on: { click: _vm.inportButton }
                },
                [
                  _c(
                    "svg",
                    {
                      attrs: {
                        width: "20",
                        height: "20",
                        viewBox: "0 0 20 20",
                        "data-svg": "navbar-toggle-icon"
                      }
                    },
                    [
                      _c("rect", {
                        attrs: { y: "9", width: "20", height: "2" }
                      }),
                      _vm._v(" "),
                      _c("rect", {
                        attrs: { y: "3", width: "20", height: "2" }
                      }),
                      _vm._v(" "),
                      _c("rect", {
                        attrs: { y: "15", width: "20", height: "2" }
                      })
                    ]
                  )
                ]
              )
            ])
          ])
        ])
      ]
    ),
    _vm._v(" "),
    _c("div", { staticClass: "showInportBox" }, [
      _vm.inportArticleButton
        ? _c(
            "div",
            {
              staticClass: "uk-card uk-card-default uk-margin",
              staticStyle: { width: "250px" }
            },
            [
              _c("div", { staticClass: "uk-card-media-top" }, [
                _c("div", { staticClass: "uk-cover-container" }),
                _vm._v(" "),
                _c(
                  "div",
                  {
                    staticClass: "uk-card-body",
                    staticStyle: { padding: "5px" }
                  },
                  [
                    _c(
                      "a",
                      {
                        staticClass: "uk-card-title",
                        on: { click: _vm.editArticle }
                      },
                      [_vm._v("エディット")]
                    ),
                    _vm._v(" "),
                    _c(
                      "p",
                      { staticStyle: { height: "105px", overflow: "hidden" } },
                      [_vm._v(_vm._s(_vm.translated))]
                    )
                  ]
                )
              ])
            ]
          )
        : _vm._e()
    ]),
    _vm._v(" "),
    _c("div", { staticClass: "uk-container" }, [
      _c("div", { staticClass: "showTextBox" }, [
        _vm.switchFunctionKey % 3 == 1
          ? _c(
              "div",
              {
                staticClass: "uk-card uk-card-default uk-margin",
                staticStyle: { width: "250px" }
              },
              [
                _c("div", { staticClass: "uk-card-media-top" }, [
                  _c("div", { staticClass: "uk-cover-container" }),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass: "uk-card-body",
                      staticStyle: { padding: "5px" }
                    },
                    [
                      _c("h3", { staticClass: "uk-card-title" }, [
                        _vm._v(_vm._s(_vm.selectedText))
                      ]),
                      _vm._v(" "),
                      _c(
                        "p",
                        {
                          staticStyle: { height: "105px", overflow: "hidden" }
                        },
                        [_vm._v(_vm._s(_vm.translated))]
                      )
                    ]
                  ),
                  _vm._v(" "),
                  _vm._m(2)
                ])
              ]
            )
          : _vm._e()
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "showTextBox" }, [
        _vm.switchFunctionKey % 3 == 2
          ? _c(
              "div",
              {
                staticClass: "uk-card uk-card-default uk-margin",
                staticStyle: { width: "250px" }
              },
              [
                _c("div", { staticClass: "uk-card-media-top" }, [
                  _c("div", { staticClass: "uk-cover-container" }),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass: "uk-card-body",
                      staticStyle: { padding: "5px" }
                    },
                    [
                      _c("h3", { staticClass: "uk-card-title" }, [
                        _vm._v("カラー選択")
                      ]),
                      _vm._v(" "),
                      _c(
                        "div",
                        {
                          staticClass: "uk-grid-small uk-text-center",
                          staticStyle: { "padding-left": "12px" },
                          attrs: { "uk-grid": "" }
                        },
                        [
                          _c("div", [
                            _c("div", {
                              staticClass:
                                "uk-card uk-card-default uk-card-body uk-border-rounded",
                              class: { "sample-active": _vm.isActive[0] },
                              staticStyle: {
                                "background-color": "#FF89FF",
                                opacity: "0.3"
                              },
                              on: {
                                click: function($event) {
                                  return _vm.changeColor(0)
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", [
                            _c("div", {
                              staticClass:
                                "uk-card uk-card-default uk-card-body uk-border-rounded",
                              class: { "sample-active": _vm.isActive[1] },
                              staticStyle: {
                                "background-color": "#89DB89",
                                opacity: "0.3"
                              },
                              on: {
                                click: function($event) {
                                  return _vm.changeColor(1)
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", [
                            _c("div", {
                              staticClass:
                                "uk-card uk-card-default uk-card-body uk-border-rounded",
                              class: { "sample-active": _vm.isActive[2] },
                              staticStyle: {
                                "background-color": "#90AFEE",
                                opacity: "0.3"
                              },
                              on: {
                                click: function($event) {
                                  return _vm.changeColor(2)
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", [
                            _c("div", {
                              staticClass:
                                "uk-card uk-card-default uk-card-body uk-border-rounded",
                              class: { "sample-active": _vm.isActive[3] },
                              staticStyle: {
                                "background-color": "#C8AAF2",
                                opacity: "0.3"
                              },
                              on: {
                                click: function($event) {
                                  return _vm.changeColor(3)
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", [
                            _c("div", {
                              staticClass:
                                "uk-card uk-card-default uk-card-body uk-border-rounded",
                              class: { "sample-active": _vm.isActive[4] },
                              staticStyle: {
                                "background-color": "#8BDEDE",
                                opacity: "0.3"
                              },
                              on: {
                                click: function($event) {
                                  return _vm.changeColor(4)
                                }
                              }
                            })
                          ]),
                          _vm._v(" "),
                          _c("div", [
                            _c("div", {
                              staticClass:
                                "uk-card uk-card-default uk-card-body uk-border-rounded",
                              class: { "sample-active": _vm.isActive[5] },
                              staticStyle: {
                                "background-color": "#FF9999",
                                opacity: "0.3"
                              },
                              on: {
                                click: function($event) {
                                  return _vm.changeColor(5)
                                }
                              }
                            })
                          ])
                        ]
                      )
                    ]
                  )
                ])
              ]
            )
          : _vm._e()
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "showSwitchButton" }, [
        _vm.switchFunctionKey % 3 == 0
          ? _c("div", [
              _c(
                "button",
                {
                  staticClass: "uk-button uk-button-muted",
                  on: { click: _vm.switchKeyValue }
                },
                [_vm._v("標準")]
              )
            ])
          : _vm.switchFunctionKey % 3 == 1
          ? _c("div", [
              _c(
                "button",
                {
                  staticClass: "uk-button uk-button-primary",
                  on: { click: _vm.switchKeyValue }
                },
                [_vm._v("単語検索")]
              )
            ])
          : _c("div", [
              _c(
                "button",
                {
                  staticClass: "uk-button",
                  staticStyle: { backgroundColor: "yellow" },
                  on: { click: _vm.switchKeyValue }
                },
                [_vm._v("ライト")]
              )
            ])
      ]),
      _vm._v(" "),
      _c(
        "div",
        {
          on: {
            select: _vm.selected,
            touchstart: _vm.switchWordFunction,
            touchmove: _vm.switchUnhighlight,
            blur: _vm.selected,
            keyup: _vm.selected,
            click: _vm.switchWordFunction
          }
        },
        [_c("div", { domProps: { innerHTML: _vm._s(_vm.article) } })]
      )
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "uk-navbar-left" }, [
      _c("a", {
        staticClass: "uk-navbar-item uk-logo",
        attrs: { href: "../", "uk-icon": "icon: tag" }
      })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "uk-navbar-center" }, [
      _c("a", { staticClass: "uk-navbar-item", attrs: { href: "/" } }, [
        _c(
          "div",
          { staticStyle: { "font-size": "30px", "font-family": "Droid Sans" } },
          [_vm._v("WikiLearns")]
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "uk-card-footer", staticStyle: { padding: "5px 25px" } },
      [
        _c("a", { staticClass: "uk-text-muted", attrs: { href: "#" } }, [
          _vm._v("READ MORE")
        ])
      ]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/components/showInportArticle.vue":
/*!*******************************************************!*\
  !*** ./resources/js/components/showInportArticle.vue ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _showInportArticle_vue_vue_type_template_id_3916c6b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true& */ "./resources/js/components/showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true&");
/* harmony import */ var _showInportArticle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./showInportArticle.vue?vue&type=script&lang=js& */ "./resources/js/components/showInportArticle.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _showInportArticle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _showInportArticle_vue_vue_type_template_id_3916c6b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _showInportArticle_vue_vue_type_template_id_3916c6b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "3916c6b8",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/components/showInportArticle.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/components/showInportArticle.vue?vue&type=script&lang=js&":
/*!********************************************************************************!*\
  !*** ./resources/js/components/showInportArticle.vue?vue&type=script&lang=js& ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_showInportArticle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./showInportArticle.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/showInportArticle.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_showInportArticle_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/components/showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true&":
/*!**************************************************************************************************!*\
  !*** ./resources/js/components/showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true& ***!
  \**************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_showInportArticle_vue_vue_type_template_id_3916c6b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/components/showInportArticle.vue?vue&type=template&id=3916c6b8&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_showInportArticle_vue_vue_type_template_id_3916c6b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_showInportArticle_vue_vue_type_template_id_3916c6b8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./resources/js/inportArticle.js":
/*!***************************************!*\
  !*** ./resources/js/inportArticle.js ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

Vue.component('inport-article', __webpack_require__(/*! ./components/showInportArticle.vue */ "./resources/js/components/showInportArticle.vue")["default"]);
var articlesShow = new Vue({
  el: '#inportArticle'
});

/***/ }),

/***/ 2:
/*!*********************************************!*\
  !*** multi ./resources/js/inportArticle.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/resources/js/inportArticle.js */"./resources/js/inportArticle.js");


/***/ })

/******/ });