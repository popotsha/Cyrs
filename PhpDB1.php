<?php
// database connection code

// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','parfum');

// get the post records

$txtEmail = $_POST['exampleInputEmail'];
$txtPhone = $_POST['exampleInputPassword'];
$sql = "SELECT  `email`, `passw` FROM `users` WHERE email = '$txtEmail' and passw = '$txtPhone'";
$result = $con->query($sql);

if ($txtEmail === 'admin@gmail.com' && $txtPhone === 'admin') {
  // output data of each row
  //http_response_code(418);
  echo "<script>  window.location.href='http://localhost/cyrs/1.php'; alert('Вы авторизованны как админ');</script>";
}

if ($result->num_rows > 0) {
  // output data of each row
  //http_response_code(418);
  echo "<script>  window.location.href='http://localhost/cyrs/cyrs.html'; alert('Вы авторизованны');</script>";

} else {
    echo "<script>  window.location.href='http://localhost/cyrs/cyrs.html'; alert('Аккаунт не найден');</script>";
}
$con->close();
?>