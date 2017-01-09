<ul class="c-portfolio" data-portfolio >


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

    <li class="c-portfolio__item" data-portfolio-item >
        <a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="c-portfolio__link" data-post-link >

            <?php the_title('<h2 class="c-portfolio__title">','</h2>'); ?>

            <video autoplay loop class="c-portfolio__video" muted data-video>
                <?php
                    $thumbnail = get_field('video');
                    if($thumbnail) :
                ?>
                    <source src="<?php echo $thumbnail; ?>" type="video/mp4">
                <?php endif;?>

                <?php /*
                    <p>
                      Sorry but your browser doesn't support HTML5 video.
                      You can <a href="<?php echo $thumbnail; ?>">Download</a> the video instead.
                    </p>
                */ ?>

            </video>

        </a>
    </li>

<?php endwhile; ?>

</ul>
