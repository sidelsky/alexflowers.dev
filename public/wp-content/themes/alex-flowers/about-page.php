<?php
/*
	Template name: About template
*/

include("header.php"); ?>

	<section role="main" class="c-content">

        <h1 class="visuallyhidden">Alex offers a professional videography service.</h1>

		<?php if( have_rows('content') ) : ?>
		    <?php while ( have_rows('content') ) : the_row(); ?>

		        <?php
                // -----------------------
                // Copy content
                // -----------------------
                if( get_row_layout() == 'copy' ) :

                    $title = get_sub_field('title');
                    $leftContentCol = get_sub_field('copy_left_column');
                    $rightContentCol = get_sub_field('copy_right_column');
                    // String to lowercase
                    $lowerTitle = strtolower($title);
                    // String replace
                    $id = str_replace(" ", "_", $lowerTitle);

                    ?>
                    <article class="c-content__wrap c-content__wrap--<?php the_sub_field('background_color'); ?>" id="<?php echo $id; ?>">
                        <div class="c-content__inner">
                            <h2 class="c-content__title"><?php echo $title ?></h2>
                            <div class="c-content__column">
                                <?php echo $leftContentCol; ?>
                            </div>
                            <div class="c-content__column">
                                <?php echo $rightContentCol; ?>
                            </div>
                        </div>
                    </article>
		        <?php endif; ?>

                <?php
                // -----------------------
                // Blockquote content
                // -----------------------
                if( get_row_layout() == 'blockquote' ) :

                    $quote = get_sub_field('quote');
                    $cite = get_sub_field('cite');
                    $backgroundImage = get_sub_field('background_image');

                    ?>
                    <article class="c-content__wrap--blockquote-elem" style="background-image: url('<?php echo $backgroundImage['url']; ?>')">
                        <div class="c-content__column">
                            <svg class="icon c-content__icon">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-quote"></use>
                            </svg>
                            <blockquote class="c-content__blockquote">
                                <?php echo $quote; ?>
                            </blockquote>
                            <cite class="c-content__cite">
                                <?php echo $cite; ?>
                            </cite>
                        </div>
                    </article>

		        <?php endif; ?>

		    <?php endwhile; ?>
		<?php endif; ?>

	</section>

<?php include("footer.php"); ?>
