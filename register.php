<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin</title>
</head>

<body>
    <br><br><br>
    <center>
        <div class="container">
            <?php
            session_start();
            if(isset($_SESSION['have']))
            echo "<div class='alert alert-danger'>".$_SESSION['have']."</div>";
            
            ?>
            <form action="savedata.php" method="POST">
                <div class="form-group d-flex justify-content-center ">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control col-xl-4" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">ชื่อของท่าน</label>

                        <br>
                        <div class="form-floating  mb-3">
                            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">รหัสผ่าน</label>
                         
                        </div>
                        <div class="form-floating mb-1">
                            <textarea name="detail" id="address" cols="15" rows="5" placeholder="name@example.com" class="form-control" required></textarea>
                            <label for="address">ที่อยู่</label>
                        </div>         <br>
                        <div class="row">
                            <div class=" justify-content-center form-group d-flex">
                                <input type="submit" class="form-control active" value="register">&nbsp;
                               <a href="login.php" class="form-control active" style="text-decoration: none;">login</a>
                            </div>

                        </div>
</div>
        </div>
            </form>


        

    </center>
    </div>
</body>

</html>