<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 *
 * @package BPaz
 */

get_header(); ?>

<section id="primary" role="main" class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

		<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_footer(); ?>
