<?php

$servername = "localhost";
$username = "root";
$Parola = "";
$NumeBd = "form";
$con = mysqli_connect($servername,$username,$Parola,$NumeBd);

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>