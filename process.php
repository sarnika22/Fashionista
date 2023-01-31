<?php

    include("config.php");

    extract($_POST);
    $query = "INSERT INTO `contact` (`id`, `username`, `email`, `subject`, `message`) VALUES ('"."','".$uname."', '".$email."', '".$subject."', '".$msg."')";
    $result = $mysqli->query($query);
    if(!$result)
    {
        echo "Something went wrong".$mysqli->err;
    }
    echo "<center><h5>Thank you for submitting!!!</h5></center>";
    $mysqli->close();
?>

