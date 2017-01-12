<?php

//http://79.170.40.171/alexflowers.com/

// update_option('siteurl','http://alexflowers.dev/');
// update_option('home','http://alexflowers.dev/');

// update_option('siteurl','http://79.170.40.171/alexflowers.com/');
// update_option('home','http://79.170.40.171/alexflowers.com/');




  //Wordpress reset (removes redundant scripts)
  require('functions/reset.php');

  //Enqueue scripts, styles etc.
  require('functions/enqueues.php');

  //Utilities
  require('functions/utilities.php');

  //Helper functions
  require('functions/helpers.php');

  //Project specific
  require('functions/project.php');

  //Hide user toolbar
  require('functions/remove-admin-bar.php');

  //Custom GF spinner
  require('functions/custom-form-spinner.php');

  //Move GF script to footer
  require('functions/gf-js-to-footer.php');

  //Redirect home
  //require('functions/redirect.php');


  //Custom Post Types
  require('functions/custom-post-types.php');

  //Custom Taxonomies
  //require('functions/custom-taxonomies.php');
?>
