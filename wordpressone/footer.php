<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpressone
 */

 // Footer ACF Variables
 $facebook = get_field('social_media_facebook_url');
?>

	</div><!-- #content -->

	<footer>
		
		<div class="social">
			<!-- SOCIAL MEDIA ICONS -->
		<?php if($facebook != '') { ?>
			<a href="<?php echo $facebook['url']; ?>"><i class="fab fa-facebook-square"></i></a>
			<?php } ?>
		</div>
	

		<small>&copy; <?php bloginfo('name') ?></small>
	</footer><!-- #colophon -->
</div><!-- #page -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
