<?php
// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','parfum');

// get the post records

$txtEmail = $_POST['exampleInputEmail1'];
$txtPhone = $_POST['exampleInputPassword1'];
// database insert SQL code
$sql = "INSERT INTO `users` (`id`, `email`, `passw`) VALUES (NULL, '$txtEmail', '$txtPhone');";
$sql1 = "SELECT email FROM users";
$f = true;
$result = mysqli_query($con, $sql1);
    foreach($result as $row){
        if($txtEmail === $row["email"]){
           echo "<script>  window.location.href='http://localhost/cyrs/cyrs.html'; alert('Этот аккаунт уже существует');</script>";
           $f = false;}
    }
// insert in database 
if($f){
    $rs = mysqli_query($con, $sql);
    echo "<script>  window.location.href='http://localhost/cyrs/cyrs.html'; alert('Вы зарегистрировались');</script>";
}
$con->close();
?>