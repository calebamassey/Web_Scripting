<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<div>

<head>
<link rel="stylesheet" type="text/css" href="StyleSheet_HW2.css"/>
<title> Problem 9.14 </title>
</head>

<?php
	if (isset($_GET["name"]) AND isset($_GET["number"])) {
		$name = $_GET["name"];
		$number = $_GET["number"];
		if(preg_match("/\d{3}\-\d{3}\-\d{4}/", $number)) {
			echo "Thank you for inputing your name " . $name . " and the phone number " . $number;
		}
		else {
			echo "You input the number ". $number ." your number input must be in the format ddd-ddd-dddd";
		}
		
	}
	else {
		echo "Sorry, please put information in all the boxes.";
		exit();
	}
?>

</div>

</body>
</html>