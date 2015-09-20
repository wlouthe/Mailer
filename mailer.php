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
<form id="mailinfo" action="submitmailer.php">
<div>Subject:<input id="subject" type="text"></div>
<div>Message:<br><textarea id="message"></textarea></div>
<div>Recipients (Please separate entries by commas):<br><textarea id="recipients"></textarea></div>

</form>
<?php
$subject = '';
$message = "";
$headers = 'From: team@loganthebogan.com';
$list = array("");

foreach($list as $to)
{
	mail($to,$subject,$message,$headers);
}
?>
</body>
</html>