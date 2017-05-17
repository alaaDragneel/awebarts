<!-- start add section -->
<div class="main-settings">
	<h3>Section Page</h3>
	<form action="" method="post">
		<h1>Add New section</h1>
		<input type="hidden" name="userName" value="<?php echo $_SESSION['userName'];?>" />
		<div class="form-group">
		  <label for="section_name">Titel</label>
		  <input type="text" class="form-control" id="section_name" name="section_name" placeholder="Add the title Here Please...">
		</div>
		<div class="form-group">
			<label for="sectionStatus">section statuse</label>
			<select name="sectionStatus" id="sectionStatus" class="form-control">
				<option value="">---------- Select the status ----------</option>
				<option value="active">Active</option>
				<option value="disactive">Disactive</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sectionLocation">section location</label>
			<select name="sectionLocation" id="sectionLocation" class="form-control">
				<option value="">---------- Select the Location ----------</option>
				<option value="side">Side</option>
				<option value="body">Body</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sec_desc">section description</label>
			<textarea name="sec_desc" id="sec_desc" class="form-control" placeholder="Write the section description here..."></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="add" class="btn btn-success" />
			<input type="reset"  value="clear" class="btn btn-warning pull-right" />
		</div>
	</form>

</div>
<!-- end add section -->
