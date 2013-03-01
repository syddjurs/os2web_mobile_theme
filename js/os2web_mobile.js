(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {
      $('[class*=pane-menu-block]').find('h5').each(function(){
        $(this).wrap('<span class="btn btn-block btn-mini menu-toggle" />');
      });

      $('.menu-toggle').bind('click', function(event){
        $(this).parent().find('.menu-name-menu-indholdsmenu').toggle();
        $(this).parent().find('i').toggleClass('icon-chevron-down').toggleClass('icon-chevron-up');
      });
      
      $('.menu-name-menu-indholdsmenu').hide();
    }
  };
}(jQuery));
