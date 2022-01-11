<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
$sql;
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
$d=@$_GET['del'];
$del ="DELETE FROM `name_list` WHERE id =$d";

if($conn->query($del)){
header("location: main.php");
}

$conn =null;
?>