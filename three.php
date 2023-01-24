<?php
  session_start();
  $_SESSION['arr'][]=$_SERVER['PHP_SELF'];
  if(isset($_POST)){
    $_SESSION['surname']=$_POST['surname'];
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="four.php" method="POST">
        <label>Введите возраст:</label>
        <input type="text" name="age" > 
        <input type="submit" value="Дальше">
    </form >
</body>
</html>