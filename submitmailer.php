<html>
	<body>
		<?php
			//print_r($_POST);
			echo "Subject:<br>".$_POST["subject"]."<br>";
			echo "Message:<br>".$_POST["message"]."<br>";
			//echo $_POST["recipients"];
			$mylist = preg_replace('/\s+/', '', $_POST["recipients"]);
			$list = explode(",",$mylist);
			echo "<br>Recipients Expanded:<br>";
			print_r($list);
			//*
			$subject = $_POST["subject"];
			$message = $_POST["message"];
			
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$headers .= 'From: LogantheBogan Team <team@loganthebogan.com>';
			//$list = array("");

			foreach($list as $to)
			{
				mail($to,$subject,$message,$headers);
			}
			//*/
		?>
		<a href="./mailer.php">Send Another?</a>
	</body>
</html>