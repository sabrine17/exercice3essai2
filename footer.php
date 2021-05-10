<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme4w4
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="widget-footer">

			<?php if(is_active_sidebar('footer-1')): ?>
				<?php dynamic_sidebar('footer-1'); ?>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			<?php endif ?>
		
		<h2> Collège de maisonneuve </h2>
		<h2> 3800 rue Sherbrooke Est </h2>
		<iframe class="gmaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2793.973181379659!2d-73.55548818445818!3d45.550865035677475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bf5bacbeffd%3A0x68ff300997eff5c!2sColl%C3%A8ge%20de%20Maisonneuve!5e0!3m2!1sfr!2sca!4v1620603117052!5m2!1sfr!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
