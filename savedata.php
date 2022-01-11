<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
$sql;
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['detail'];

$save = "SELECT * FROM `name_list`";
foreach ($conn->query($save) as $row) {
    if ($row['name'] == $name) {
        $_SESSION['have'] = "มีผู้ใช้นี้แล้ว";
        header("location: register.php");
    } 
}   
$hashpass = sha1($password);
  $sql = "INSERT INTO `name_list` (`id`, `name`, `password`, `address`) VALUES (NULL, '$name', '$hashpass', '$address')";
  if($conn->query($sql)){
      header("location: main.php");
  }


$sql =null;
