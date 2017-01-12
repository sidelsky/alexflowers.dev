<!-- START: Magic door -->
<?php include('magic-door.php'); ?>
<!-- END: Magic door -->


<div class="c-hero" data-hero id="hero">

    <div class="c-hero__action">

        <?php
            $hero_title = get_field('hero_title');
            if($hero_title) :
        ?>

        <h2 class="c-hero__title"><?php echo $hero_title; ?></h2>

        <?php endif; ?>

        <a href="#" class="c-hero__link" data-scroll-to>
            <svg class="icon c-hero__icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-down-chevron" viewBox="0 0 32 32"></use>
            </svg>
        </a>

    </div>

    <div class="c-jacket" data-jacket style="background-image: url('<?php the_post_thumbnail_url( "large" ); ?>')"></div>

    <?php
    // Check if is mobile
    $detect = new Mobile_Detect();

    if ($detect->isMobile()) : ?>

    <?php else : ?>

        <video autoplay loop class="c-hero__video video" zcontrols muted data-hero-video id="hero-video" >
            <?php
                $video = get_field('video');
                if($video) :
            ?>
                <source src="<?php echo $video; ?>" type="video/mp4">
            <?php endif;?>
        </video>

    <?php endif; ?>

</div>
