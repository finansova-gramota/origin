<?php
/**
 * The template for displaying Archive pages.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>



<?php //while( have_posts() ): the_post(); ?>

	<div class="homepage-author"><?php echo wpautop(get_post(4)->post_content); ?></div>
<!--	<div class="homepage-author">--><?php //consulting_thinkup_input_blogtext(); ?><!--</div>-->
<?php //endwhile; ?>


<?php get_footer() ?>