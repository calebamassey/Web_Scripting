<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="form_proc.css"/>
<title> Guest Book </title>
</head>

<body>
<p>

<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "cmassey1", "cmassey1", "cmassey1");

if (mysqli_connect_errno())
	exit("Error - could not connect to MySQL");

$commentname = htmlspecialchars($_POST['name']);
$commentvalue = htmlspecialchars($_POST['comments']);
$commentphone = htmlspecialchars($_POST['phone']);

$commentname = mysqli_realescape_string($db, $commentname);
$commentvalue = mysqli_real_escape_string($db, $commentvalue);
$commentphone = mysqli_real_escape_string($db, $commentphone);


echo $commentname;
echo $commentvalue;
echo $commentphone;

$constructed_query = "INSERT INTO guestbook (username, comment_text, phone_number) value ('$commentname', '$commentvalue', '$commentphone')";

$result = mysqli_query($db, $constructed_query);

mysqli_close($db);
?>

</p>
</body>
</html>