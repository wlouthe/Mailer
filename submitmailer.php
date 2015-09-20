<html>
	<body>
		<?php
			echo $_POST["subject"];
			echo $_POST["message"];
			echo $_POST["recipients"];
		?>
		<a href="./mailer.php">Send Another?</a>
	</body>
</html>