<?php 
//including database connection file
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM customers ORDER BY id ASC"); //using mysql query instead
if(!$result) die ("Database fetch failed: ".mysqli_error($mysqli));
session_start();

session_destroy();
header("Location: index.php");
?>