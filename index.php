<?php
/*
 * @package WordPress
 * @subpackage Vestibular
 */
?>

<?php get_header(); ?>
	
	<?php get_template_part('menu', 'course'); ?>

	<section id="content-home">
		
		<div class="identity">
			<img class="tag"src="<?php echo get_stylesheet_directory_uri() ?>/images/fatea.png">
			<img class="slogan"src="<?php echo get_stylesheet_directory_uri() ?>/images/transforme.png">
		</div>
		<div class="video">
			<iframe width="640" height="360" src="http://www.youtube.com/embed/C5mnU2JelWs?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="photo-home">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/images/jonas.png" width="171" height="560">
		</div>

		<div class="clear"></div>
	</section>

<?php get_footer(); ?>
