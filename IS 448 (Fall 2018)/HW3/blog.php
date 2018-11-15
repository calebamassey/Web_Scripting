<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css"/>
<title> Blog View </title>
</head>

<body>
<p>

<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "cmassey1", "cmassey1", "cmassey1");

if (mysqli_connect_errno())
	exit("Error - could not connect to MySQL");

$blogtitle = $_GET['title']; 
$blogpost = $_GET['post'];
$blogtag = $_GET['tag'];

$constructed_query = "INSERT INTO blog_entries (title, post, tag) value ('$blogtitle', '$blogpost', '$blogtag')";

$result = mysqli_query($db, $constructed_query);

mysqli_close($db);
?>

<div>

<h1>Blog Entries </h1> <br> <br>

<div id=blog>
<?php
$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "cmassey1", "cmassey1", "cmassey1");

$sql_select = "SELECT title, post, tag FROM blog_entries";

$all_blogs = mysqli_query($db, $sql_select);

if(mysqli_num_rows($all_blogs) > 0){
	while( $row = mysqli_fetch_row($all_blogs)){
		echo nl2br($row[0]."\r\n");
		echo nl2br($row[1]."\r\n"); 
		echo nl2br($row[2]."\r\n \r\n");
	}
	mysqli_free_result($all_blogs);
}

mysqli_close($db);
?>
</div>

<a href="https://swe.umbc.edu/~cmassey1/is448/0613-cmassey1-HW3/Create_Post.html">Enter another blog post</a>
</div>

</p>
</body>
</html>