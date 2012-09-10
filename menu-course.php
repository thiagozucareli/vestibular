<div id="menu-courses">
	<ul>
		<?php $courses = get_posts(array('post_type' => 'course', 'orderby' => 'post_title', 'order' => 'asc')) ?>
		<?php foreach ($courses as $course): ?>
			<li>
				<a href="<?php echo "cursos/#$course->post_name" ?>"><?php echo $course->post_title ?></a>
			</li>
		<?php endforeach ?>
	</ul>
</div>