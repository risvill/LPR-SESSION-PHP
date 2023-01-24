<?php
    session_start();
    $_SESSION['arr'][]=$_SERVER['PHP_SELF'];
    if(isset($_POST)){
        $_SESSION['name']=$_POST['name'];
    }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
 </head>
 <body>  
   <form action="three.php" method="POST">
        <label>Введите фамилию:</label>
        <input type="text" name="surname" > 
        <input type="submit" value="Дальше">
    </form>
 </body>
 </html> 