<?php
/**
 * Home Page
 *
 * @package BPaz
 */

get_header(); ?>
<section id="primary" role="main" class="container">

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_header_image() ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->
<?php get_footer(); ?>
