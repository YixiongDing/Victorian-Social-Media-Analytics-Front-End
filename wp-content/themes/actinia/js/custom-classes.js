(function($) {
    $('.entry-header:not(:has(.entry-title))').addClass('actinia-empty-header');
    
    $('body:not(:has(.widget-area-1))').addClass('actinia-no-sidebar');
    
    $('body').has('.site-description').addClass('actinia-has-tagline');
    
    if ( $('.main-navigation').has("ul").length == 0 ) {
        $('body').addClass('no-menu');
    }
    
    if ($('body').hasClass('navbar-side') && $('.main-navigation').has("ul").length == 0 && ($('body').hasClass('actinia-no-sidebar'))) {
        $('body').removeClass('navbar-side');
    }
    
    if ($('body').hasClass('no-menu') && $('body').hasClass('navbar-side')) {
        $('body').removeClass('navbar-side');
    }
    
})(jQuery);