<ul class="c-portfolio">


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

    <li class="c-portfolio__item">
        <a href="#" class="c-portfolio__link">
            <?php the_title('<h2 class="c-portfolio__title">','</h2>'); ?>
        </a>
    </li>

<?php endwhile; ?>

</ul>
