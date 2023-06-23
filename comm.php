<?php
// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','parfum');

// get the post records

$txtEmail = $_POST['email'];
$txtPhone = $_POST['comment'];

// database insert SQL code
$sql = "INSERT INTO `comm` (`id`, `email`, `comm`) VALUES (NULL, '$txtEmail', '$txtPhone');";

// insert in database 
$rs = mysqli_query($con, $sql);
//if($rs)
//{
//	echo "Contact Records Inserted";
//}
header('Location: http://localhost/cyrs/cyrs.html');
$con->close();
?>