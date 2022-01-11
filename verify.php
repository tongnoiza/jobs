<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
$sql;
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);

foreach ($conn->query($save) as $row) {
    if ($row['name'] == $name) {
    
$_SESSION['name'] = $row['name'];
header("location: verify.php");

    } 
}   



?>