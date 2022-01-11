<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'];
$n = $_POST['name'];
$p = $_POST['password'];
$ad = $_POST['address'];


$update="UPDATE name_list SET name = '$n', password= '$p', address = '$ad' WHERE id = $id";

if($conn->query($update)) header("location: main.php");





?>