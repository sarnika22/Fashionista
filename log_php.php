<?php
  include("index.php");

  define("DB_HOST","localhost");
  define("DB_USER","root");
  define("DB_PASSWORD","");
  define("DB_DATABASE","fashionista");

  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

  extract($_POST);
  $query = "INSERT INTO `userlogin` (`id`, `username`, `paswd`) VALUES ('"."','".$uname."', '".$pwd."')";
  $result = $mysqli->query($query);
  if(!$result)
  {
    echo "Something went wrong".$mysqli->err;
  }
  $mysqli->close();
?>