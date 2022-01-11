<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$servername;dbname=register", $username, $password);
$sql;
$conn->exec("SET CHARACTER SET utf8");
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ERRMODE_EXCEPTION);
$sql = "SELECT * FROM `name_list`";
$id = @$_GET['editdata'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <br>
    <div class="container">
       
  
<div class="form-group">


</div>

                
                  
               <br>
                            <div class='row'>
                            <div class=' d-flex justify-content-center'><h1>แก้ไขข้อมูล</h1> </div>
                                <div class="col-md-4"></div>   <div class='card'>
                    <div class='card-body'>
                            <div class=' d-flex justify-content-center'>
                     
                            <?php
                            foreach ($conn->query($sql) as $row) {
                                if ($row['id'] == $id) {
                                    echo "
                                    <div class='col-md-3'>
                                    <form action='editdata.php' method='post'>

                                <input type='text' placeholer='แก้ไขชื่อ' class='form-control' value=" . $row['id'] . " name='id'>   <br>  
                                <input type='text' placeholer='แก้ไขชื่อ' class='form-control' value=" . $row['name'] . " name='name'>   <br>   
                                <input type='text' placeholer='แก้ไขชื่อ' class='form-control' value=" . $row['password'] . " name='password'>   <br>   
                                <input type='text' placeholer='แก้ไขชื่อ' class='form-control' value=" . $row['address'] . " name='address' >   <br>   

                                <input type='submit' value='แก้ไข' class='form-control'>
                                </form>
                            </div></div>";
                                }
                            }
                            ?>
</div>

</div>      </div>      </div>
                   
                


</body>

</html>