<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<div>

<head>
<link rel="stylesheet" type="text/css" href="StyleSheet_HW2.css"/>
<title> Problem 9.12 </title>
</head>

<?php
	if (isset($_GET["song"]) AND isset($_GET["composer"]) AND isset($_GET["artist"])) {
		$form = "/afs/umbc.edu/users/c/m/cmassey1/pub/text-files/form.txt";
		$txt = $_GET["song"]." - ".$_GET["composer"]." - ".$_GET["artist"]."\r\n"; 
		$open = fopen($form, "a+");
		fwrite($open, $txt);
		fclose($open);
		echo "Thank you for your submission. <br> <br>";
	}
	else {
		echo "Sorry, please put information in all the boxes.";
		exit();
	}
?>

<?php
	echo "Here is the current list of Favorite Songs: <br> <br>";
		$form = "/afs/umbc.edu/users/c/m/cmassey1/pub/text-files/form.txt";
		$open = fopen($form, "r");
		while (!feof($open)) {
			echo fgets($open) . "<br>";
		} 
		fclose($open);
		
?>

</div>

</body>
</html>