/* global require */
/* global window */
/* global site_data */
/* jshint -W097 */

"use strict";
var $ = require('jquery');

//Require our modules
//EXAMPLE
//require('./sample');

/*------------------------------------*\
	Video thumbnail hover
\*------------------------------------*/
var $thumbnail = $('[data-portfolio]');
if ($thumbnail.length) {
    var Thumbnail = require('./thumb-video-hover');
    $thumbnail.each(function(i, elem) {
      new Thumbnail($(elem));
    });
}


//require('./thumb-video-hover');

//TO GET THEME PATH use site_data.themePath
