<?php
  include("login.php");

  define("DB_HOST","localhost");
  define("DB_USER","root");
  define("DB_PASSWORD","");
  define("DB_DATABASE","fashionista");

  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

  extract($_POST);
  $query = "INSERT INTO `usersign` (`id`, `username`, `email`, `paswd`) VALUES ('"."','".$uname."', '".$mail."', '".$pwd."')";
  $result = $mysqli->query($query);
  if(!$result)
  {
    echo "Something went wrong".$mysqli->err;
  }
  $mysqli->close();
?>