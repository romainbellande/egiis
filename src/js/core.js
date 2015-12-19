// ==== CORE ==== //

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page
;(function($){
  $(function(){
    // Insert jQuery code here!
    if (window.matchMedia("(min-width: 768px)").matches) {
  /* La largeur minimum de l'affichage est 620 px inclus */
  $('#menu-header li a').scrollomatic({
    offset: 130
  });
    } else {
      /* L'affichage est inférieur à 620px de large */
      $('#menu-header li a').scrollomatic();
    }


  });
}(jQuery));
