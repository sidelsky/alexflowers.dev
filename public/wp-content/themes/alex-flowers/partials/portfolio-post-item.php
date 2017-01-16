<?php
	if(!function_exists('wp_head')) {

        function getWPContent() {
			// Gets all the Wordpress goodies.
            define('WP_USE_THEMES', false);
            $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
            $wpLoad = require_once( $parse_uri[0] . 'wp-load.php' );

        }

        getWPContent();

        // Current post ID
				$postId = $_POST['id'];
				
				// Get Slug and pass to magic-door
				$post = get_post($_POST['id']);

				global $post;
				$post_slug = $post->post_name;

				// Convert PHP variable into one that can be accessed in jQuery
				echo '<script>';
				echo 'var post_slug = ' . json_encode($post_slug) . ';';
				echo '</script>';

			//Query the database
	        $args = array(
	            'post_type' => 'portfolio',
	            'p' => $postId,
	        );
	        $loop = new WP_Query( $args );

		}

    if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();

    ?>

    <!--BEGIN #magic-door-wrap-->
    <div class="c-single-portfolio post-<?php the_ID(); ?>">

        <!--CLOSE Close button -->
            <?php include('close.php'); ?>
        <!--CLOSE Close button -->

        <div class="c-single-portfolio__video-container">
            <?php
                $fullVideo = get_field('video');
            ?>

            <?php /*
                <iframe src="https://player.vimeo.com/video/<?php echo $fullVideo; ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            */ ?>

            <video autoplay loop class="c-single-portfolio__video" id="fullVideo" data-jacket>
                <source src="<?php echo $fullVideo; ?>" type="video/mp4">
            </video>

            <div class="o-video_controls">
	            <button onclick="document.getElementById('fullVideo').play()" class="o-video_controls__button play" data-play >
                    <span class="visuallyhidden">Play</span>
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-play" viewBox="0 0 32 32"></use>
                    </svg>
                </button>

	            <button onclick="document.getElementById('fullVideo').pause()" class="o-video_controls__button pause" data-pause >
                    <span class="visuallyhidden">Pause</span>
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-pause" viewBox="0 0 32 32"></use>
                    </svg>
                </button>

                <button onclick="document.getElementById('fullVideo').volume-=0.1" class="o-video_controls__button volume-down" data-volume-down>
                    <span class="visuallyhidden">Decrease Volume</span>
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-minus" viewBox="0 0 32 32"></use>
                    </svg>
                </button>

	            <button onclick="document.getElementById('fullVideo').volume+=0.1" class="o-video_controls__button volume-up" data-volume-up>
                    <span class="visuallyhidden">Increase Volume </span>
                    <svg class="icon">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-plus" viewBox="0 0 32 32"></use>
                    </svg>
                </button>

			</div>

        </div>


    <!--END #magic-door-wrap-->
    </div>

    <?php endwhile; endif; ?>
