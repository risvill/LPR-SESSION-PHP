<?php
 session_start();
 $_SESSION['arr'][]=$_SERVER['PHP_SELF'];
 if(isset($_POST)){  
    $_SESSION['age']=$_POST['age'];
 }
 echo "Данные о вас"."<br>"."Имя:" . $_SESSION['name']."<BR>".
      "Фамилия:".$_SESSION['surname']."<BR>".
      "Возраст:"." ".$_SESSION['age']."<BR>";
 if(isset($_SESSION['arr'])) {
  print '<h3> Список посещенных страниц</h3>';
  print '<ol>';
  foreach($_SESSION['arr'] as $array){
    echo '<li>C:\OpenServer\domains\homework'.$array.'</li><br>';
  }
  print '</ol>';
 }
?>