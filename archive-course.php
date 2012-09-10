<?php
/*
Template Name: Course page
*/
?>
<?php get_header(); $i = 0;?>
<section id="header">
	<div id="courses-button">
		<a href="<?php bloginfo('url'); ?>"><p>Veja outros cursos</p></a>
	</div>
</section>
<section id="name">
	<div class="center">
		<h2><?php echo the_('type').' em '.get_the_title() ?></h2>
	</div>
</section>
<section id="slide-button">
		<a href="#<?php echo $posts[sizeof($posts)-1]->post_name ?>" id="previous">
			<div id="previous-arrow"></div>
			<div class="content-button">
				<div class="middle">
					<p><?php echo $posts[sizeof($posts)-1]->post_title ?></p>
				</div>
			</div>
		</a>
		<a href="#<?php echo $posts[1]->post_name ?>" id="next">
			<div id="next-arrow"></div>
			<div class="content-button">
				<div class="middle">
					<p><?php echo $posts[1]->post_title ?></p>
				</div>
			</div>
		</a>
</section>
<ul id="scroll">
	<?php while(have_posts()): the_post(); ?>
		<li class="course center" title="<?php echo the_('type').' em '.get_the_title() ?>" id="<?php echo $post->post_name ?>">	
			<section class="page-top center">
				<div class="photo">
					<img src="<?php the_('guy_photo') ?>">
				</div>
				<div class="video">
					<?php the_video_or_thumbnail() ?>
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
			<div class="navigation" style="display:'none';">
				<?php 
					$previous = $i > 0 ? $posts[$i-1] : $posts[sizeof($posts)-1];
					$next = $i < sizeof($posts)-1 ? $posts[$i+1] : $posts[0];
				?>
				<a href="#<?php echo $previous->post_name ?>" class="previous"><?php echo $previous->post_title ?></a>
				<a href="#<?php echo $next->post_name ?>" class="next"><?php echo $next->post_title ?></a>
			</div>
		</li>
	<?php $i++ ; endwhile ?>
</ul>
<?php get_footer(); ?>
