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
		<h2>Bacharel em Design</h2>
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
<ul id="scroll">
	<li class="course center">	
		<section class="page-top center">
			<div class="photo">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/jonas/jonas.png" width="300" height="360">
			</div>
			<div class="video">
				<iframe width="640" height="360" src="http://www.youtube.com/embed/C5mnU2JelWs?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="clear"></div>

			<a class="center" href="#"><p>Mais informa&ccedil;&otilde;es do curso</p></a>
		</section>
		<section class="page-hide">
			<div class="information">
				<h3>Infoma&ccedil;&otilde;es</h3>
			</div>
			<div class="what-is">
				<h3>O que &eacute; a profiss&atilde;o:</h3>
			</div>
			<div class="course-in">
				<h3>"Nome do curso" na FATEA</h3>
			</div>
			<div class="labs">
				<h3>Laborat&oacute;rios utilizados</h3>
			</div>
			<div class="projects">
				<h3>A&ccedil;&otilde;es e projetos de extens&atilde;o</h3>
			</div>
			<div class="clear"></div>
		</section>
	</li>
	<li class="course center">	
		<section class="page-top center">
			<div class="photo">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/jonas/jonas2.png" width="300" height="360">
			</div>
			<div class="video">
				<iframe width="640" height="360" src="http://www.youtube.com/embed/C5mnU2JelWs?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>

			<div class="clear"></div>

			<a class="center" href="#"><p>Mais informa&ccedil;&otilde;es do curso</p></a>
		</section>
		<section class="page-hide">
			<div class="occupation">

			</div>
			<div class="opportunities">

			</div>
			<div class="course-in">

			</div>
			<div class="labs">

			</div>
			<div class="projects">

			</div>
			<div class="events">

			</div>
			<div class="clear"></div>
		</section>
	</li>
</ul>
<?php get_footer(); ?>
