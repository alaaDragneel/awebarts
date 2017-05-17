<!-- start add section
`page_id`, `page_name`, `page_content`, `page_status`, `page_visits`, `section_id`, `page_image`, `page_date`
-->
<div class="main-settings">
	<form action="" method="post" enctype="multipart/form-data">
		<h1>Add page section</h1>
		<input type="hidden" name="userName" value="<?php echo $_SESSION['userName'];?>" />
		<div class="form-group">
		  <label for="page_name">name</label>
		  <input type="text" class="form-control" id="page_name" name="page_name" placeholder="Add the name Here Please...">
		</div>

		<div class="form-group">
			<label for="page_content">page description</label>
			<textarea name="page_content" id="page_content" class="form-control" placeholder="Write the page description here..."></textarea>
		</div>

		<div class="form-group">
			<label for="page_status">page statuse</label>
			<select name="page_status" id="page_status" class="form-control">
				<option value="">---------- Select the status ----------</option>
				<option value="active">Active</option>
				<option value="disactive">Disactive</option>
			</select>
		</div>

		<div class="form-group">
			<label for="section_id">section name</label>
			<select name="section_id" id="section_id" class="form-control">
				<option value="">---------- Select the section name ----------</option>
				<?php
					foreach($rows as $row){
						echo '<option value="' . $row['section_id'] . '">' . $row['section_name'] . '</option>';
					}
				?>
			</select>
		</div>

		<div class="form-group">
			<label for="page_image">page image</label>
			<input type="file" name="page_image[]" id="page_image" class="form-control" multiple/>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="add" class="btn btn-success" />
			<input type="reset"  value="clear" class="btn btn-warning pull-right" />
		</div>
	</form>

</div>
<!-- end add section -->
