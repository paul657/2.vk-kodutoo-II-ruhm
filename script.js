(function(){
  "use strict";

  var Nimekiri = function(){
    // SINGLETON PATTERN (4 rida)
    if(Nimekiri.instance){
      return Nimekiri.instance;
    }
    Nimekiri.instance = this;


    //panen rakenduse tööle
    this.init();
  };

  //kõik moosipurgi funktsioonid tulevad siia sisse
  Nimekiri.prototype = {
    init: function(){
      console.log('rakendus käivitus');

    },

  };

  window.onload = function(){
    var app = new Nimekiri();
  };

})();
