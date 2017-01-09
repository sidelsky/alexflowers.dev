<div class="c-hero">

    <div class="c-hero__action">

        <?php
            $hero_title = get_field('hero_title');
            if($hero_title) :
        ?>

        <h2 class="c-hero__title"><?php echo $hero_title; ?></h2>

        <?php endif; ?>

        <a href="#" class="c-hero__link">
            <svg class="icon c-hero__icon">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-down-chevron" viewBox="0 0 32 32"></use>
            </svg>
        </a>
    </div>

    <video autoplay loop class="c-hero__video" zcontrols muted>
        <?php
            $video = get_field('video');
            if($video) :
        ?>
            <source src="<?php echo $video; ?>" type="video/mp4">
        <?php endif;?>

    </video>
</div>
