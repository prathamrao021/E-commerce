<?php
  #echo $_COOKIE['User'];
  if (!(isset($_COOKIE["User"])))
  {
    header('Location: http://localhost/HTML%20Files/WTProject/Login.php');
  }
?>