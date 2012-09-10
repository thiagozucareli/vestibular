<?php
/*
Template Name: Course page
*/
?>
<?php get_header(); ?>
<section id="header">
	<div id="courses-button">
		<a href="#"><p>Veja outros cursos</p></a>
	</div>
</section>
<section id="name">
	<div class="center">
		<h2><?php the_title() ?></h2>
	</div>
</section>
<section id="slide-button">
		<a href="#" id="previous">
			<div id="previous-arrow"></div>
			<p>Bacharel em Biologia</p>
		</a>
		<a href="#" id="next">
			<div id="next-arrow"></div>
			<p>Bacharel em Emfermagem</p>
		</a>
</section>
<div id="scroll">
	<?php while(get_posts()): the_post(); ?>
		<div class="course center">	
			<section class="page-top center">
				<div class="photo">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/jonas/jonas.png" width="300" height="360">
				</div>
				<div class="video">
					<?php echo wp_oembed_get(get_the('video_url'), array('width' => 640, 'height' => 360)) ?>
				</div>

				<div class="clear"></div>

				<a class="center" href="#"><p>Mais informa&ccedil;&otilde;es do curso</p></a>
			</section>
			<section class="page-hide">
				<div class="information">
					<h3>Informações</h3>
					<p>
						<?php the_('periodicy') ?>
					</p>
					<p>
						<?php the_('spaces') ?> vagas
					</p>
					<p>
						<?php the_('period') ?>
					</p>
					<p>
						<?php the_('status') ?> (portarias etc)
					</p>
					<p>
						<?php the_('duration') ?> anos
					</p>
				</div>
				<div class="what-is">
					<h3>O que &eacute; a profiss&atilde;o:</h3>
					<?php the_('profession') ?>
				</div>
				<div class="course-in">
					<h3><?php the_title() ?> na FATEA</h3>
					<?php the_('about') ?>
				</div>
				<div class="labs">
					<h3>Laborat&oacute;rios utilizados</h3>
					<?php the_('labs') ?>
				</div>
				<div class="projects">
					<h3>A&ccedil;&otilde;es e projetos de extens&atilde;o</h3>
					<?php the_('projects') ?>
				</div>
				<div class="clear"></div>
			</section>
		</div>
	<?php endwhile ?>
</div>
<?php get_footer(); ?>
