<?php
    session_start();
    $_SESSION['arr'][]=$_SERVER['PHP_SELF'];
 ?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
 </head>
 <body>
    <form action="two.php" method="POST">
        <label>Набеерите ваше имя:</label>
        <input type="text" name="name" > 
        <input type="submit" value="Дальше">
    </form>
 </body>
 </html>   
