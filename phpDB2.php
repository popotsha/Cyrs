<?php
// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','parfum');
$result = mysgli_query($con, "SELECT * FROM 'users'");
$user = mysqli_fetch_assoc($result);
echo "$users";

?>