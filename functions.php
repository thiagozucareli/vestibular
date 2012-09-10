<?php 
	function get_the($field){
		global $post, $post_object ;
		if($post->post_type == 'page') 
			return get_post_meta($post->ID, $field, true); 
		if (empty($post_object) || $post_object->ID != $post->ID){
			$post_type = $post->post_type ; 
			$class = '\\FateaVestibular\\' . ucfirst($post_type) ;
			$post_object = new $class($post) ;
		}
		return $post_object->$field ;

	}
	function the_($field){
		echo get_the($field) ;
	}

	function the_page_description(){
		global $post_type ;
		$page = get_posts(array('post_type' => 'page', 'pagename' => get_post_type_object($post_type)->rewrite['slug'])) ; 
		if(! empty($page)) echo $page[0]->post_content ;
	}
 ?>