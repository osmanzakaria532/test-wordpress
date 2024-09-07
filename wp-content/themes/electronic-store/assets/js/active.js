(function($) {
    "use strict";
    if ($.fn.menumaker) {
        let menuArgs = {
            title: "Menu", // The text of the button which toggles the menu
            breakpoint: 767, // The breakpoint for switching to the mobile view
            format: "multitoggle" // It takes three values: dropdown for a simple toggle menu, select for select list menu, multitoggle for a menu where each submenu can be toggled separately
        };
        let cssmenu = $("#cssmenu").menumaker(menuArgs);
        var siteNavigation = $('#cssmenu').children('ul');
        siteNavigation.find('a').on('focus blur', function() {
            let parentEl = $(this).parents('.menu-item, .page_item');
            let menufocus = parentEl.toggleClass('focus');
            if (parentEl.hasClass('focus')) {
                parentEl.children('.sub-menu').css('display', 'block');
                parentEl.children('.submenu-button').addClass('submenu-opened');
            }
        });
    }
    $('.scrooltotop').click(function() {
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false;
    });
    $('.contact-form').parents('.entry-content').addClass('contact-form-parent');
    $('table').addClass('table-bordered table').wrap('<div class="table-responsive"></div>');
    $('.shop_table').removeClass('table-bordered');
    $('.navigation.pagination').addClass('Page navigation example');
    $('.navigation.pagination div.nav-links').wrapInner('<ul class="pagination"></ul>');
    $('div.nav-links ul.pagination * ').wrap('<li class="page-item"></li>');
    $('p.wp-block-tag-cloud a').removeAttr('style');
    /* search template script*/
    $('.search-icon-wrapper a').on('click', function(event) {
        event.stopPropagation();
        event.preventDefault();
        $('.popup-search-template-area').toggleClass('visible');
        $('.widget_search input').focus();
    });
    $('.search-template-content-area-inner .container').on('click', function(event) {
        event.stopPropagation();
    });
    $('.popup-search-template-area').on('click', function() {
        $(this).removeClass('visible');
    });
    $('.search-template-hide-button a').on('click', function(event) {
        event.stopPropagation();
        event.preventDefault();
        $('.popup-search-template-area').removeClass('visible');
    });
    // end mobile scripT
})(jQuery);

function babMasonryLayout() {
    if (typeof jQuery.fn.masonry !== 'undefined') {
        var grid = jQuery('.masonry_active').imagesLoaded(function() {
            grid.masonry({
                itemSelector: '.blog-grid-layout',
            });
        });
    }
}

jQuery(window).on('load', function() {
    var $ = jQuery;
    $('#preloader-wrapper').fadeOut('slow', function() {
        $(this).remove();
    });
    // On before slide change
    $('.scrooltotop').css('display', 'none');
    babMasonryLayout();
});
jQuery(document).ready(function() {
    var $ = jQuery;
    $('#preloader-wrapper').fadeOut('slow', function() {
        $(this).remove();
    });
    // On before slide change
    $('.scrooltotop').css('display', 'none');
    babMasonryLayout();
});

jQuery(window).on('scroll', function() {
    var $ = jQuery;
    var topspace = $(this).scrollTop();
    if (topspace > 300) {
        $('.scrooltotop').css('display', 'block');
    } else {
        $('.scrooltotop').css('display', 'none');
    }
    babMasonryLayout();
});