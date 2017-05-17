<h3>banners</h3>
<!-- start display banners
	`banner_id`, `banner_name`, `banner_url`, `status`, `Date`, `createdBy`
--><?php if($rowsBanners > 0){?>
<table class="table table-bordered table-striped table-hover table-responsive sectionTable">
	<tr>
		<th>#ID</th>
		<th>banner Name</th>
		<th>Statuse</th>
		<th>banner Url</th>
		<th>type</th>
		<th>Date</th>
		<th><i class="fa fa-user"></i> Created By</th>
		<th><i class="fa fa-edit"></i> Actions</th>
	</tr>
	<?php
		foreach($rowsBanners as $rowsBanner){?>
			<tr>
				<td><?php echo $rowsBanner['banner_id']?></td>
				<td class="desc"><?php echo $rowsBanner['banner_name']?></td>
				<td><?php echo $rowsBanner['status']?></td>
				<td class="desc"><?php echo $rowsBanner['banner_url']?></td>
				<td><?php echo $rowsBanner['type']?></td>
				<td><?php echo $rowsBanner['Date']?></td>
				<td><?php echo $rowsBanner['createdBy']?></td>
				<td>
					<a href="?page=Banners&action=delete&id=<?php echo $rowsBanner['banner_id']?>" class="btn btn-danger btn-block confirm"><i class="fa fa-close"></i> Delete</a>
				</td>
			</tr>
<?php } 	}else{echo '<div class="alert alert-warning" style="position: absolute; top: 55%; left: 50%;">no data to show</div>';}?>
</table>
<!-- end display section -->
