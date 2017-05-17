<!-- start display section -->
<div class="displaySections">
	<h3 class="pull-right"><a href="?page=Pages&action=add">Add New page</a></h3>
	<div class="clearfix"></div>
</div>
<?php if($rows > 0){?>
<table class="table table-bordered table-striped table-hover table-responsive sectionTable">
	<tr>
		<th>#ID</th>
		<th>name</th>
		<th class="desc">Description</th>
		<th>image</th>
		<th>Status</th>
		<th>Section</th>
		<th>Date</th>
		<th><i class="fa fa-user"></i> By</th>
		<th><i class="fa fa-edit"></i> Actions</th>
	</tr>
	<?php
		foreach($rows as $row){//`page_name`, `page_content`, `page_status`, `page_visits`, `page_status`, `page_image`, `page_date
			// get the sectionIds
			$sectionId = $row['section_id'];
			//choose the section name
			$display = new Display('sections');
			//get the sections name for the display
			$sectionsName = $display->getEditById('section_id', $sectionId);
		?>
	<tr>
		<td><?php echo $row['page_id']?></td>
		<td><?php echo $row['page_name']?></td>
		<td class="desc"><?php echo $row['page_content']?></td>
		<td><img src="resources/uploads/<?php echo $row['page_image']?>" alt="image"/></td>
		<td><?php echo $row['page_status']?></td>
		<td><?php echo $sectionsName['section_name']?></td>
		<td><?php echo $row['page_date']?></td>
		<td><?php echo $row['userName']?></td>
		<td>
			<a href="?page=Pages&action=edit&id=<?php echo $row['page_id']?>" class="btn btn-info btn-block"><i class="fa fa-edit"></i> Edit</a>
			<a href="?page=Pages&action=delete&id=<?php echo $row['page_id']?>" class="btn btn-danger btn-block confirm"><i class="fa fa-close"></i> Delete</a>
		</td>
	</tr>
	<?php } 	}else{echo '<div class="alert alert-warning" style="position: absolute; top: 55%; left: 50%;">no data to show</div>';}?>
</table>
<!-- end display section -->
