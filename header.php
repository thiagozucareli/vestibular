<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title( '|', true, 'right' );?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php
			/* We add some JavaScript to pages with the comment form
			 * to support sites with threaded comments (when in use).
			 */
			if ( is_singular() && get_option( 'thread_comments' ) )
				wp_enqueue_script( 'comment-reply' );

			/* Always have wp_head() just before the closing </head>
			 * tag of your theme, or you will break many plugins, which
			 * generally use this hook to add elements to <head> such
			 * as styles, scripts, and meta tags.
			 */
			wp_head();
		?>
	</head>
	<body>
	<section id="header">
		<div id="courses-button">
			<a href="#">Cursos</a>
			<!-- <ul id="courses-list">
				<li id="course">
				</li>
			</ul> -->
		</div>
		<div id="signup-button">
			<a href="#">Inscreva-se</a>
		</div>
		<div class="clear"></div>
	</section>
	<section id="name">
		<div class="center">
			<h2>Bacharel em Design</h2>
		</div>
	</section>
	<section id="slide-button">
		<div id="previous">
			<a href="#"></a>
		</div>
		<div id="next">
			<a href="#"></a>
		</div>
	</section>