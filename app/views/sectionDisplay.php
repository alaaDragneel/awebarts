<!-- start display section -->
<div class="displaySections">
	<h3 class="pull-right"><a href="?page=sections&action=add">Add New Section</a></h3>
	<div class="clearfix"></div>
</div>
<?php if($rows > 0){?>
<table class="table table-bordered table-striped table-hover table-responsive sectionTable">
	<tr>
		<th>#ID</th>
		<th>Titel</th>
		<th>Description</th>
		<th>Statuse</th>
		<th>Location</th>
		<th>Date</th>
		<th><i class="fa fa-user"></i> Created By</th>
		<th><i class="fa fa-edit"></i> Actions</th>
	</tr>
	<?php
		foreach($rows as $row){?>
	<tr>
		<td><?php echo $row['section_id']?></td>
		<td><?php echo $row['section_name']?></td>
		<td><?php echo $row['sec_desc']?></td>
		<td><?php echo $row['sectionStatus']?></td>
		<td><?php echo $row['sectionLocation']?></td>
		<td><?php echo $row['sec_date']?></td>
		<td><?php echo $row['userName']?></td>
		<td>
			<a href="?page=sections&action=edit&id=<?php echo $row['section_id']?>" class="btn btn-info btn-block"><i class="fa fa-edit"></i> Edit</a>
			<a href="?page=sections&action=delete&id=<?php echo $row['section_id']?>" class="btn btn-danger btn-block confirm"><i class="fa fa-close"></i> Delete</a>
		</td>
	</tr>
	<?php } 	}else{echo '<div class="alert alert-warning" style="position: absolute; top: 55%; left: 50%;">no data to show</div>';}?>
</table>
<!-- end display section -->
