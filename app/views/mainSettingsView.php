<div class="main-settings">
	<h3>main settings</h3>
	<form action="" method="post">
		<input type="hidden" name="userName" value="<?php echo $_SESSION['userName'];?>" />
		<!--
			`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `home_panel`, `fb`, `tw`, `yt`, `rss`
		-->
		<div class="form-group">
			<label for="site_name">site name</label>
			<input type="text" class="form-control" id="site_name" name="site_name" placeholder="Write the site name here..." value="<?php echo $rows['site_name']?>" >
		</div>

		<div class="form-group">
			<label for="site_url">site url</label>
			<input type="text" class="form-control" id="site_url" name="site_url" placeholder="Write the site url here..." value="<?php echo $rows['site_url']?>">
		</div>

		<div class="form-group">
			<label for="site_desc">site description</label>
			<textarea name="site_desc" id="site_desc" class="form-control" placeholder="Write the site description here..."><?php echo $rows['site_desc']?></textarea>
		</div>

		<div class="form-group">
			<label for="site_tags">site tags</label>
			<textarea name="site_tags" id="site_tags" class="form-control"  placeholder="Write the site tags here..."><?php echo $rows['site_tags']?></textarea>
		</div>

		<div class="form-group">
			<label for="home_panel">home_panel</label>
			<textarea name="home_panel" id="home_panel" class="form-control"  placeholder="Write the home panel here..."><?php echo $rows['home_panel']?></textarea>
		</div>

		<div class="form-group">
			<label for="site_email">site email</label>
			<input type="email" class="form-control" name="site_email" id="site_email" placeholder="Write the site email here..." value="<?php echo $rows['site_email']?>">
		</div>

		<div class="form-group">
			<label for="fb">facebook</label>
			<input type="text" class="form-control" id="fb" name="fb" placeholder="Write the site facebook here..." value="<?php echo $rows['fb']?>">
		</div>

		<div class="form-group">
			<label for="tw">twitter</label>
			<input type="text" class="form-control" id="tw" name="tw" placeholder="Write the site twitter here..." value="<?php echo $rows['tw']?>">
		</div>

		<div class="form-group">
			<label for="yt">youtube</label>
			<input type="text" class="form-control" id="yt" name="yt" placeholder="Write the site youtube here..." value="<?php echo $rows['yt']?>">
		</div>

		<div class="form-group">
			<label for="rss">skype</label>
			<input type="text" class="form-control" id="rss" name="rss" placeholder="Write the site skype here..." value="<?php echo $rows['rss']?>">
		</div>

		<div class="form-group">
			<input type="submit" name="submit" value="update" class="btn btn-success" />
			<input type="reset"  value="clear" class="btn btn-warning pull-right" />
		</div>

	</form>
</div>
