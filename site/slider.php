<div id="slider">
<?php
	foreach ($bannerDisplay as $banner) {?>
			<img src="<?php echo UPLOADS.$banner['banner_name']?>" style="background-repeat: no-repeat !important;">
<?php }?>
</div>
