<section id="pages" style='display:none;'>
	<?php $pages = get_pages(); ?>
	<?php foreach ($pages as $page): ?>
		<div class="page" id="<?php echo $page->post_name ?>">
			<h2><?php echo $page->post_title ?></h2>
			<p><?php echo $page->post_content ?></p>
		</div>
	<?php endforeach ?>
</section>