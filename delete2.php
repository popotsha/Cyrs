<?php
if(isset($_POST["id"]))
{
    $conn = mysqli_connect('localhost', 'root', 'root','parfum');
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }
    $userid = mysqli_real_escape_string($conn, $_POST["id"]);
    $sql = "DELETE FROM comm WHERE id = '$userid'";
    if(mysqli_query($conn, $sql)){
         
        header("Location: 1.php");
    } else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);    
}
?>