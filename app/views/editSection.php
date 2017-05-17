<!-- start add section -->
<div class="main-settings">
	<h3>Section Page</h3>
	<form action="" method="post">
		<h1>edit section</h1>
		<div class="form-group">
		  <label for="section_name">Titel</label>
		  <input type="text" class="form-control" id="section_name" name="section_name" placeholder="Add the title Here Please..."
		  value="<?php echo $editRows['section_name'];?>">
		</div>
		<div class="form-group">
			<label for="sectionStatus">section statuse</label>
			<select name="sectionStatus" id="sectionStatus" class="form-control">
				<option value="active" <?php if($editRows['sectionStatus'] == 'active'){echo 'selected';}else{echo '';} ?> >Active</option>
				<option value="disactive" <?php if($editRows['sectionStatus'] == 'disactive'){echo 'selected';}else{echo '';} ?> >Disactive</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sectionLocation">section location</label>
			<select name="sectionLocation" id="sectionLocation" class="form-control">
				<option value="side" <?php if($editRows['sectionLocation'] == 'side'){echo 'selected';}else{echo '';} ?>>Side</option>
				<option value="body" <?php if($editRows['sectionLocation'] == 'body'){echo 'selected';}else{echo '';} ?>>Body</option>
			</select>
		</div>
		<div class="form-group">
			<label for="sec_desc">section description</label>
			<textarea name="sec_desc" id="sec_desc" class="form-control" placeholder="Write the section description here..."><?php echo $editRows['sec_desc'];?></textarea>
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="update" class="btn btn-info" />
			<input type="reset"  value="clear" class="btn btn-warning pull-right" />
		</div>
	</form>

</div>
<!-- end add section -->
