<div id="menu-courses">
	<ul>
		<?php $courses = get_posts(array('post_type' => 'course', 'orderby' => 'title', 'order' => 'ASC')) ?>
		<?php foreach ($courses as $course): ?>
			<li>
				<a href="<?php echo "cursos/#$course->post_name" ?>"><?php echo $course->post_title ?></a>
			</li>
		<?php endforeach ?>
	</ul>
</div>