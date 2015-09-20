<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
//check login
if(isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["password"]))
{
	
}



?>
<form id="mailinfo" action="submitmailer.php" method="post">
<div>Subject:<input name="subject" type="text"></div>

<div>Message:<br><textarea name="message"></textarea></div>
<div>Recipients (Please separate entries by commas):<br><textarea name="recipients"></textarea></div>

<div><input type="submit"></div>
</form>
</body>
</html>