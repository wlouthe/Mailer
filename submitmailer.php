<html>
	<body>
		<?php
			echo $_POST["subject"];
			echo $_POST["message"];
			echo $_POST["recipients"];
			/*
			$subject = '';
			$message = "";
			$headers = 'From: team@loganthebogan.com';
			$list = array("");

			foreach($list as $to)
			{
				mail($to,$subject,$message,$headers);
			}
			//*/
		?>
		<a href="./mailer.php">Send Another?</a>
	</body>
</html>