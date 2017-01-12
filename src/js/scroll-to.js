/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */


(function($) {

    "use strict";

    $.extend($.easing, {
        def: 'easeInOutQuart',
        easeInOutQuart: function(x, t, b, c, d) {
            if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
            return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
        }
    });

    var $heroBbutton = $('[data-scroll-to]'),
        $portfolioItems = $('[data-portfolio]'),
        speed = 700;

    $heroBbutton.on('click', scroll);

    function scroll(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $portfolioItems.offset().top
        }, speed, 'easeInOutQuart');


    }

}(jQuery));
