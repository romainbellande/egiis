// ==== CORE ==== //

// A simple wrapper for all your custom jQuery; everything in this file will be run on every page


;(function($){
  $(function(){
    // Insert jQuery code here!

      /* ------ CONTACT SELECT ------ */
      $('#subject-select').fancySelect();

$('#btn-see-more').on('click',function(){
  $('#see-more').removeClass('disactivate-see-more')
  $('#see-more').addClass('activate-see-more');
  $(this).hide();
  $('#btn-see-less').show();
});
$('#btn-see-less').on('click',function(){
  $('#see-more').removeClass('activate-see-more')
  $('#see-more').addClass('disactivate-see-more');
  $(this).hide();
  $('#btn-see-more').show();
});

enquire.register("screen and (max-width:768px)", {

    // OPTIONAL
    // If supplied, triggered when a media query matches.
    match : function() {
      $("#menu-header a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#menu-header a",
        scrollSpeed:800,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });
      $('#menu-header li a').on('click',function(){
        var menu = document.getElementById('responsive-menu'),
            header = document.getElementById('masthead');
        if (menu.className.indexOf( 'toggled' ) !== -1) {
          menu.className = menu.className.replace(' toggled', '');
          header.className = header.className.replace(' mobile-activate-menu', '');
          header.className += ' mobile-disactivate-menu';
        }
      });
      $("#header-shortcut,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#menu-header a",
        scrollSpeed:800,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });
    },

    // OPTIONAL
    // If supplied, triggered when the media query transitions
    // *from a matched state to an unmatched state*.
    unmatch : function() {

      $("#menu-header a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#menu-header a",
        scrollSpeed:800,
        offset:130,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });
      var menu = document.getElementById('responsive-menu'),
          header = document.getElementById('masthead');
      if (menu.className.indexOf( 'toggled' ) !== -1) {
        menu.className = menu.className.replace(' toggled', '');
        header.className = header.className.replace(' mobile-activate-menu', '');
        header.className += ' mobile-disactivate-menu';
      }
    },

    // OPTIONAL
    // If supplied, triggered once, when the handler is registered.
    setup : function() {},

    // OPTIONAL, defaults to false
    // If set to true, defers execution of the setup function
    // until the first time the media query is matched
    deferSetup : true,

    // OPTIONAL
    // If supplied, triggered when handler is unregistered.
    // Place cleanup code here
    destroy : function() {}

});

enquire.register("screen and (min-width:768px)", {

    // OPTIONAL
    // If supplied, triggered when a media query matches.
    match : function() {
      $("#menu-header a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#menu-header a",
        scrollSpeed:800,
        offset:130,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });
      var menu = document.getElementById('responsive-menu'),
          header = document.getElementById('masthead');
      if (menu.className.indexOf( 'toggled' ) !== -1) {
        menu.className = menu.className.replace(' toggled', '');
        header.className = header.className.replace(' mobile-activate-menu', '');
        header.className += ' mobile-disactivate-menu';
      }
    },

    // OPTIONAL
    // If supplied, triggered when the media query transitions
    // *from a matched state to an unmatched state*.
    unmatch : function() {
      $("#menu-header a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#menu-header a",
        scrollSpeed:800,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });
      $('#menu-header li a').on('click',function(){
        var menu = document.getElementById('responsive-menu'),
            header = document.getElementById('masthead');
        if (menu.className.indexOf( 'toggled' ) !== -1) {
          menu.className = menu.className.replace(' toggled', '');
          header.className = header.className.replace(' mobile-activate-menu', '');
          header.className += ' mobile-disactivate-menu';
        }
      });
      $("#menu-header a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
        highlightSelector:"#menu-header a",
        scrollSpeed:800,
        scrollEasing: "easeOutQuint",
        scrollingEasing: "easeOutQuint"
      });

    },

    // OPTIONAL
    // If supplied, triggered once, when the handler is registered.
    setup : function() {},

    // OPTIONAL, defaults to false
    // If set to true, defers execution of the setup function
    // until the first time the media query is matched
    deferSetup : true,

    // OPTIONAL
    // If supplied, triggered when handler is unregistered.
    // Place cleanup code here
    destroy : function() {}

  });
  /* ------ [ANIMATION] ------ */
  new WOW().init();

  });
}(jQuery));
