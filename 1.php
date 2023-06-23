<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aroma Butik</title>
  <link href="1.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col" style ="padding: 5%">
  <h2>Список пользователей</h2>
  <?php
  $conn = mysqli_connect('localhost', 'root', 'root','parfum');
  if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM users";
  if($result = mysqli_query($conn, $sql)){
      echo "<table><tr><th>Email</th><th>Password</th><th></th></tr>";
      foreach($result as $row){
          echo "<tr>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["passw"] . "</td>";
              echo "<td><form action='delete.php' method='post'>
                          <input type='hidden' name='id' value='" . $row["id"] . "' />
                          <input type='submit' value='Удалить'>
                     </form></td>";
          echo "</tr>";
      }
      echo "</table>";
  mysqli_free_result($result);
  } else{
      echo "Ошибка: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>
  </div>
  <div class="col" style ="padding: 5%">
  <h2>Список товаров</h2>
    <?php
  $conn = mysqli_connect('localhost', 'root', 'root','parfum');
  if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM tovary";
  if($result = mysqli_query($conn, $sql)){
      echo "<table><tr><th>Духи</th><th>Фото</th><th>Фото</th><th>Количество</th><th></th></tr>";
      foreach($result as $row){
          echo "<tr>";
              echo "<td>" . $row["dyxi"] . "</td>";
              echo "<td>" . $row["photo"] . "</td>";
              echo "<td>" . $row["kol"] . "</td>";
              echo "<td><form action='delete1.php' method='post'>
                          <input type='hidden' name='id' value='" . $row["id"] . "' />
                          <input type='submit' value='Удалить'>
                     </form></td>";
          echo "</tr>";
      }
      echo "</table>";
  mysqli_free_result($result);
  } else{
      echo "Ошибка: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>
  </div>
  <div class="col" style ="padding: 5%">
  <h2>Список комментариев</h2>
    <?php
  $conn = mysqli_connect('localhost', 'root', 'root','parfum');
  if (!$conn) {
    die("Ошибка: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM comm";
  if($result = mysqli_query($conn, $sql)){
      echo "<table><tr><th>Email</th><th>Comment</th><th></th></tr>";
      foreach($result as $row){
          echo "<tr>";
              echo "<td>" . $row["email"] . "</td>";
              echo "<td>" . $row["comm"] . "</td>";
              echo "<td><form action='delete2.php' method='post'>
                          <input type='hidden' name='id' value='" . $row["id"] . "' />
                          <input type='submit' value='Удалить'>
                     </form></td>";
          echo "</tr>";
      }
      echo "</table>";
  mysqli_free_result($result);
  } else{
      echo "Ошибка: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>
  </div>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>