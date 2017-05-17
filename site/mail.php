<?php
	if(isset($_POST['mail'])){
		$to = $siteInfo['site_email'];
		$from = @$_POST['email'];

		$subject = "Email From: " . @$_POST['email'];
		$subjectRe = "Email to: alaa_dragneel" . @$_POST['email'];

		$message = @$_POST['message'];
		$message2 = 'thanke you fucker for the contact we will replay soon ';
		$message2 .= @$_POST['message'];

		$send = mail($to, $subject, $message);

		$sendTo = mail($from, $subjectRe, $message2);
		if($send == TRUE && $sendTo == TRUE){
			echo 'Done';
		}
	}

?>
<div id="send">
	<form action="" method="post">
		<input placeholder="write your name here!" name="name" type="text">
		<input placeholder="write your email here!" name="email" type="text">
		<textarea placeholder="write your message" name="message"></textarea><br>
		<input type="submit" name="mail" value="send message">
	</form>
</div>
