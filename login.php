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
            <form action="verify.php.php" method="POST">
                <div class="form-group d-flex justify-content-center ">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control col-xl-4" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">ชื่อของท่าน</label>

                        <br>
                        <div class="form-floating  mb-3">
                            <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">รหัสผ่าน</label>
                            <br>
                        </div>

                   
                        <div class="row">
                            <div class=" justify-content-center form-group d-flex">
                                <input type="submit" class="form-control active" value="login">&nbsp;
                                <a href="register.php" class="form-control"  style="text-decoration: none;">register</a>
                            </div>

                        </div>
            </form>

        </div>
        </div>

    </center>
    </div>
</body>

</html>