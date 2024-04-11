<?php
session_start();
include("includes/config.php");
$_SESSION['login']= false;
date_default_timezone_set('America/New_York');
$dbConnection = mysqli_connect($host, $username, $password);
mysqli_select_db($dbConnection, $database);
$timestamp = date('Y-m-d H:i:s');
$temp_email = $_SESSION["emailid"];
$sqlQuery = "UPDATE userlog SET status=0, logout='$timestamp' WHERE status=1 AND userEmail='$temp_email'";
mysqli_query($dbConnection, $sqlQuery);
$_SESSION["userid"] = "";
$_SESSION["fullname"] = "";
$_SESSION["emailid"] = "";
$_SESSION["contactno"] = "";
$_SESSION["billingaddress"] = "";
$_SESSION["password"] = "";
$_SESSION["shippingaddress"] = "";
$_SESSION['shopping_cart'] = array();
mysqli_close($dbConnection);


?>
<script language="javascript">
document.location="index.php";
</script>
