<?php 
	function get_the($field){
		global $post, $post_object ;
		
		if($post->post_type == 'page') 
			return get_post_meta($post->ID, $field, true); 

		$class = '\\FateaVestibular\\' . ucfirst($post->post_type) ;
		
		if (empty($post_object) || $post_object->ID != $post->ID){
			$post_object = new $class($post) ;
		}
		
		if($class::$fields[$field]['type'] == 'set') return $post_object->set($field);
		
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