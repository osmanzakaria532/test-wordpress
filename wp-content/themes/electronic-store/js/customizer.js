/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
(function($) {
    // Site title and description.
    wp.customize('blogname', function(value) {
        value.bind(function(to) {
            $('.site-title a').text(to);
        });
    });
    wp.customize('blogdescription', function(value) {
        value.bind(function(to) {
            $('.site-description').text(to);
        });
    });

    wp.customize('background_color', function(value) {
        value.bind(function(to) {
            if ('#ffffff' === to) {
                $('body.home').removeClass('custom-background');
            } else {
                $('body.home').addClass('custom-background');
            }
        });
    });
    wp.customize('background_image', function(value) {
        value.bind(function(to) {
            if ('' === to || null === to || 'undefined' === to) {
                $('body.home').removeClass('custom-background');
            } else {
                $('body.home').addClass('custom-background');
            }
        });
    });
    // Header text color.
    wp.customize('header_textcolor', function(value) {
        value.bind(function(to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title a, .site-description').css({
                    'color': to
                });
            }
        });
    });


    /*Primary Color For Title Hover Border*/
    wp.customize('primary_bg_color', function(value) {

        // When the value changes.
        value.bind(function(newval) {
            // Generate the CSS.
            var cssContent = `.electronic-store-standard-post__post-title a h2, .electronic-store-standard-post__post-title a h3, ul.recent-post-widget li .recent-widget-content h2{
            	background-image: linear-gradient(to right, ${newval} 0%, ${newval} 100%)
            	}`;
            // Check if we already have a <style> in the <head> referencing this control.
            if (
                null === document.getElementById('kirki-postmessage-primary_bg_color') ||
                'undefined' === typeof document.getElementById('kirki-postmessage-primary_bg_color')
            ) {

                // Append the <style> to the <head>.
                jQuery('head').append('<style id="kirki-postmessage-primary_bg_color"></style>');
            }

            // Add the CSS to the <style> and append.
            jQuery('#kirki-postmessage-primary_bg_color').text(cssContent);
            jQuery('#kirki-postmessage-primary_bg_color').appendTo('head');
        });
    });

    wp.customize('header_container_custom_size', function(value) {

        value.bind(function(newval) {
            // Generate the CSS.
            var cssContent = `@media (min-width: 1200px) {
				#masthead .container.container-custom-size{
					width: ${newval}px;
					max-width: ${newval}px;
				}
			}`;
            if (
                null === document.getElementById('kirki-postmessage-header_container_custom_size') ||
                'undefined' === typeof document.getElementById('kirki-postmessage-header_container_custom_size')
            ) {
                // Append the <style> to the <head>.
                jQuery('head').append('<style id="kirki-postmessage-header_container_custom_size"></style>');
            }
            // Add the CSS to the <style> and append.
            jQuery('#kirki-postmessage-header_container_custom_size').text(cssContent);
            jQuery('#kirki-postmessage-header_container_custom_size').appendTo('head');
        });
    });

    wp.customize('container_custom_width', function(value) {

        value.bind(function(newval) {
            // Generate the CSS.
            var cssContent = `@media (min-width: 1300px) {
               .container{
                    width: ${newval}px;
                    max-width: ${newval}px;
                }
            }`;
            if (
                null === document.getElementById('kirki-postmessage-container_custom_width') ||
                'undefined' === typeof document.getElementById('kirki-postmessage-container_custom_width')
            ) {
                // Append the <style> to the <head>.
                jQuery('head').append('<style id="kirki-postmessage-container_custom_width"></style>');
            }
            // Add the CSS to the <style> and append.
            jQuery('#kirki-postmessage-container_custom_width').text(cssContent);
            jQuery('#kirki-postmessage-container_custom_width').appendTo('head');
        });
    });

    wp.customize('page_banner_custom_height', function(value) {

        value.bind(function(newval) {
        	var pagebannerExtraClass = '';
        	if ( newval == 200 ) {
			    pagebannerExtraClass = ' banner-custom-height banner-default-height';
			} else if ( newval > 200 ) {
			    pagebannerExtraClass = ' banner-custom-height banner-height-higher-than-200';
			} else {
			    pagebannerExtraClass = ' banner-custom-height banner-height-lower-than-200';
			}
            // Generate the CSS.
            var cssContent = `section.page-header-area{
					height: ${newval}px;
					max-height: ${newval}px;
				}`;
            // Check if we already have a <style> in the <head> referencing this control.
            if (
                null === document.getElementById('kirki-postmessage-page_banner_custom_height') ||
                'undefined' === typeof document.getElementById('kirki-postmessage-page_banner_custom_height')
            ) {

                // Append the <style> to the <head>.
                jQuery('head').append('<style id="kirki-postmessage-page_banner_custom_height"></style>');
            }

            // Add the CSS to the <style> and append.
            jQuery('section.page-header-area').addClass(pagebannerExtraClass);
            jQuery('#kirki-postmessage-page_banner_custom_height').text(cssContent);
            jQuery('#kirki-postmessage-page_banner_custom_height').appendTo('head');
        });
    });
    /*Home Page Banner Height*/
    wp.customize('home_banner_custom_height', function(value) {

        value.bind(function(newval) {
            // Generate the CSS.
            var cssContent = `.electronic-store-home-banner{
                    height: ${newval}px;
                    max-height: ${newval}px;
                }`;
            // Check if we already have a <style> in the <head> referencing this control.
            if (
                null === document.getElementById('kirki-postmessage-home_banner_custom_height') ||
                'undefined' === typeof document.getElementById('kirki-postmessage-home_banner_custom_height')
            ) {

                // Append the <style> to the <head>.
                jQuery('head').append('<style id="kirki-postmessage-home_banner_custom_height"></style>');
            }

            // Add the CSS to the <style> and append.
            jQuery('#kirki-postmessage-home_banner_custom_height').text(cssContent);
            jQuery('#kirki-postmessage-home_banner_custom_height').appendTo('head');
        });
    });

})(jQuery);