<div class="c-portfolio" id="portfolio" data-portfolio >

    <?php
        $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => -1,
          'orderby' => 'post_date',
          'order' => 'DEC'
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
    ?>

    <div id="portfolio-<?php the_ID(); ?>" class="c-portfolio__item visible" data-portfolio-item >
        <a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="c-portfolio__link" data-post-link >

            <?php
            // Spinloader
            include('spinloader.php'); ?>

            <?php the_title('<h2 class="c-portfolio__title">','</h2>'); ?>

            <div class="c-jacket" data-jacket style="background-image: url('<?php the_post_thumbnail_url( "medium" ); ?>')"></div>


            <?php
            // Check if is mobile
            $detect = new Mobile_Detect();

        	if ($detect->isMobile()) : ?>

            <?php else : ?>

                <video width="800" height="600" loop muted preload class="c-portfolio__video video" data-video >
                    <?php
                        $thumbnail = get_field('thumbnail');
                        if($thumbnail) :
                    ?>
                        <source src="<?php echo $thumbnail; ?>" type="video/mp4">
                    <?php endif;?>

                          Sorry but your browser doesn't support HTML5 video.

                </video>

            <?php endif; ?>


        </a>
    </div>

<?php endwhile; ?>

</div>
