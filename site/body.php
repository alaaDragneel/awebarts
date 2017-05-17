<div id="latestprojects">
	<h1>latest projects:</h1>
	<?php
		foreach($pageDisplay as $page){?>
			<div class="project">
				<img height="100" src="<?php echo UPLOADS.$page['page_image']; ?>" width="140">
				<h2><?php echo $page['page_name']; ?></h2>
				<p><?php echo substr($page['page_content'], 0, 100); ?>...</p>
				<a href="?page=page&id=<?php echo $page['page_id']; ?>">read more&gt;&gt;</a>
			</div>
	<?php }?>
</div>
