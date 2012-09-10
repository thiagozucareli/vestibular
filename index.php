<?php
/*
 * @package WordPress
 * @subpackage Vestibular
 */
?>

<?php get_header(); ?>
	
	<?php get_template_part('menu', 'course'); ?>

	<section id="content-home">
			<div class="photo">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/jonas/jonas.png" width="300" height="360">
			</div>
			<div class="video">
				<iframe width="640" height="360" src="http://www.youtube.com/embed/C5mnU2JelWs?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="clear"></div>
		</section>

<?php get_footer(); ?>
