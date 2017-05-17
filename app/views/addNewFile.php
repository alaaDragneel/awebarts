
<h3>Add New Image</h3>
<div class="main-settings">

	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label for="image">Choose image</label>
			<input type="file" name="image[]" id="image" class="form-control" multiple/>
		</div>
		<div class="form-group">
			<label for="type">Write type</label>
			<input type="text" name="type" id="type" class="form-control"/>
		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="Upload" class="btn btn-primary btn-block" />
		</div>
	</form>
</div>
