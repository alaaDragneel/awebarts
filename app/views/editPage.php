<!-- start add section
`page_id`, `page_name`, `page_content`, `page_status`, `page_visits`, `section_id`, `page_image`, `page_date`
-->
<div class="main-settings">
	<form action="" method="post" enctype="multipart/form-data">
		<h1>edit page section</h1>
		<input type="hidden" name="userName" value="<?php echo $_SESSION['userName'];?>" />
		<div class="form-group">
		  <label for="page_name">name</label>
		  <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Add the name Here Please..." value="<?php echo $editRows['page_name'];?>">
		</div>

		<div class="form-group">
			<label for="page_content">page description</label>
			<textarea name="page_content" id="page_content" class="form-control" placeholder="Write the page description here..."><?php echo $editRows['page_content'];?></textarea>
		</div>

		<div class="form-group">
			<label for="page_status">page statuse</label>
			<select name="page_status" id="page_status" class="form-control">
				<option value="active" <?php if($editRows['page_status'] == 'active'){echo 'selected';}else{echo '';} ?>>Active</option>
				<option value="disactive" <?php if($editRows['page_status'] == 'disactive'){echo 'selected';}else{echo '';} ?>>Disactive</option>
			</select>
		</div>

		<div class="form-group">
			<label for="section_id">section name</label>
			<select name="section_id" id="section_id" class="form-control">
				<?php
					foreach($rows as $row){
						echo '<option value="' . $row['section_id'] . '"';
							if($editRows['section_id'] == $row['section_id']){echo 'selected';}else{echo '';}
						echo' >' . $row['section_name'] . '</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label for="page_image">page image</label>
			<input type="file" name="page_image[]" id="page_image" class="form-control" multiple/>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="update" class="btn btn-info" />
			<input type="reset"  value="clear" class="btn btn-warning pull-right" />
		</div>
	</form>

</div>
<!-- end add section -->
