<div class="sidebar">
	<?php
		foreach($sideDisplay as $side){

	?>
			<div class="side">
				<div class=" side_head">
					<h1><?php echo $side['section_name'];?></h1>
				</div>
				<div class="side_body">
					<ul>
				<?php
					$tableName = "pages";
					$section_id = $side['section_id'];
					$pagesDisplay = new Display('pages');
					$pages = $pagesDisplay->getEditById('section_id', $section_id, 'fetchAll', 'ORDER BY page_id DESC ');
					if($pages > 0){
						foreach($pages as $page){?>
							<li><a href="?page=page&id=<?php echo $page['page_id']; ?>"><?php echo $page['page_name'];?></a></li>

					<?php } } else {echo '<li class="alert alert-danger" style="background: none; border: none;">There Are No Pages In This Section yet</li>'; }?>
					</ul>
				</div>
			</div>
	<?php }?>
	<div class="side">
		<div class=" side_head">
			<h1>newsletter</h1>
		</div>
		<div class="side_body">
			<form>
				<input placeholder=" write your name here!" type="text"><br>
				<input placeholder="wtite your email here!" type="text"><br>
				<input type="submit" value="subscibe">
			</form>
		</div>
	</div>
</div>
