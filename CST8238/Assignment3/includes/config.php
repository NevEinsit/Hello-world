<?php

$host = "localhost";
$username = "zpcraftc_paintingportal";
$password = "paintingportal";
$database = "zpcraftc_paintingportal";

$con = mysqli_connect($host, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
