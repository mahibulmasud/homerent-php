<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .reg-main{
            text-align:center;
            margin-top:50px;
            margin-bottom:50px;
        }
        .reg-main h1{
            margin:30px 0px;
        }
        .reg-main input[type=text]{
            padding:10px 20px;
            font-size:18px;
        }
        .reg-main input[type=email]{
            padding:10px 20px;
            font-size:18px;
        }
        .reg-main input[type=password]{
            padding:10px 20px;
            font-size:18px;
        }
        .reg-main input[type=submit]{
            cursor: pointer;
            font-size:20px;
            padding:10px 20px;
            border:0px;
            background:#1C1C1C;
            color:white;
            border-radius:5px;
        }
    </style>
</head>
<body>
    <?php include "header.php" ?>

        <!-- form start -->
        <div class="reg-main">
            <h1>Registration Form</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="firstname" placeholder="Fisrt Name" id=""><br><br>
                <input type="text" name="lastname" placeholder="Last Name" id=""><br><br>
                <input type="text" name="username" placeholder="Username" id=""><br><br>
                <input type="email" name="email" placeholder="email" id=""><br><br>
                <!-- <input type="file" name="picsource" value="upload" id=""><br><br> -->
                <input type="password" placeholder="password" name="password" id=""><br><br>
                <input type="file" name="uploadfile" id=""><br><br>
                <input type="submit" name="submit" value="submit">
            </form>
            <?php include "registration_process.php" ?>

        </div>
       

        <!-- form end -->

    <?php include "footer-one.php" ?>
    <?php include "footer.php" ?>
</body>
</html>
