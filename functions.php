<?php 
	add_action('wp_enqueue_scripts', function(){
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-caroufredsel', get_stylesheet_directory_uri().'/js/lib/jquery.carouFredSel-5.6.4-packed.js', array('jquery') );
		if(is_page_template('page-course.php')){
			wp_enqueue_script('courses', get_stylesheet_directory_uri().'/js/course.js', array('jquery-caroufredsel') );
		}
	});

 ?>