<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package BPaz
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div id="copyright" class="container">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Site by <a href="" target="_blank" rel="nofollow">Melanie Rosenthal</a> &amp;
		<a href="https://twitter.com/bernix01" target="_blank" rel="nofollow">Guillermo Bernal</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>