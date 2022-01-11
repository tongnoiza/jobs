<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
$_SESSION['way']=1;
?>
<head>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container ">
        <br><br>
        <form action="savedata.php" method="POST">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">ชื่อของท่าน</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <div class="form-floating  mb-3">
                        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">รหัสผ่าน</label>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-3">
                    <div class="form-floating mb-1">
                        <textarea name="detail" id="address" cols="15" rows="5" placeholder="name@example.com" class="form-control" required></textarea>
                        <label for="address">ที่อยู่</label>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4"> </div>
                <div class="col-md-1">
                    <input type="submit" class="form-control active" value="เพิ่มข้อมูล">
                </div>
                <div class="col-md-2"style="text-align: center;"><a href="main.php" class="form-control" style="text-decoration: none;" >กลับหน้าหลัก</a></div>
            </div>
        </form>
    </div>
</body>

</html>