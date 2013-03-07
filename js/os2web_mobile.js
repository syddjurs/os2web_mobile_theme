(function ($) {
  Drupal.behaviors.exampleModule = {
    attach: function (context, settings) {
      $('[class*=pane-menu-block]').not('.no-toggle').find('h4').each(function(){
        $(this).append('<i class="icon-chevron-down pull-right"></i>');
        $(this).wrap('<span class="btn btn-block btn-mini menu-toggle" />');
      });

      $('.menu-toggle').bind('click', function(event){
        $(this).parent().find('.menu-name-menu-indholdsmenu').toggle();
        $(this).parent().find('i').toggleClass('icon-chevron-down').toggleClass('icon-chevron-up');
      });
      
      $('.menu-name-menu-indholdsmenu').hide();

      $('[class*=views_slideshow_controls_text_]').addClass('btn');
    }
  };
}(jQuery));
