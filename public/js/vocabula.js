var vm = new Vue({
  el: "#vocabula",
  data:function () {
    return {
      relatedWords: []
    }
  },
  mounted: function () {
    var pathname= location.pathname;
    var searchId = pathname.split("/");

    axios.post('/api/words/' + searchId[3],{

    }).then((response) => {
      this.relatedWords = response.data;
    }).catch((response) => {

      console.log(response);
    })
  },

  methods: {
   wordDelete: function (id) {
     axios.delete('/api/delwords/' + id)
     .then(() => {
       this.wordIndex;
     }).catch((response) => {
       console.log(response);
     });
   }
  }
})
