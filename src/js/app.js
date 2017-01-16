/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */

"use strict";
var $ = require('jquery');

//Require our modules
//EXAMPLE
//require('./sample');


//Require our modules
/*------------------------------------*\
	portfolio
\*------------------------------------*/
var $portfolio = $('[data-portfolio]');

    if ($portfolio.length) {
        var Portfolio = require('./magic-door');
        $portfolio.each(function(i, elem) {
          new Portfolio($(elem));
        });
    }


//require('./thumb-video-hover');

require('./scroll-to');

require('./mobile-navigation');

//TO GET THEME PATH use site_data.themePath
