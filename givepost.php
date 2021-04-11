<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    .container{
        /* background:#1C1C1C; */
    }
    .up-space{
        margin:50px 0px;
    }
    .contact-details h2{
        text-align:center;
    }
    .form table tr td{
        padding:10px;
        font-size:20px;
    }
    .post-header-tag{
        text-align:center;
        color:#C23A25;
    }
    .submit{
        cursor: pointer;
        font-size:20px;
        padding:10px 20px;
        border:0px;
        background:#1C1C1C;
        color:white;
        border-radius:5px;
    }
    input[type=text]{
        padding:10px;
        font-size:15px;
    }
    </style>
</head>
<body>
        <!-- header start-->
   <?php include "login-header.php" ?>
    <!-- header end-->
    <div class="up-space"></div>
    
    <div class="container">

    <h1 class="post-header-tag">Rent Your Property</h1>

    <form class="form" action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Location</td>
            <td>:</td>
            <td><input type="text" name="location" id=""></td>
        </tr>
        <tr>
            <td>Bedroom</td>
            <td>:</td>
            <td><input type="text" name="bedroom" id=""></td>
        </tr>
        <tr>
            <td>Bathroom</td>
            <td>:</td>
            <td><input type="text" name="bathroom" id=""></td>
        </tr>
        <tr>
            <td>Belcony</td>
            <td>:</td>
            <td><input type="text" name="belcony" id=""></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>:</td>
            <td><input type="text" name="price" id=""></td>
        </tr>
        <tr>
            <td>Description</td>
            <td>:</td>
            <td><input type="text" name="description" id=""></td>
        </tr>
        <tr>
            <td>Picture</td>
            <td>:</td>
            <td><input type="file" name="pictureuploadfile" id=""></td>
        </tr>
        </table>

        <h1 class="post-header-tag">Contact Details</h1>

        <table>
        <tr>
            <td>Name</td>
            <td>:</td>
            <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
            <td>Mobile Number</td>
            <td>:</td>
            <td><input type="text" name="phone" id=""></td>
        </tr>
        <tr>
            <td colspan="3"><input class="submit" type="submit" name="submit" value="Submit"></td>
        </tr>
    </table>
    </form>
    <?php include "givepost_process.php" ?>
    </div>
    
   
    <div class="up-space"></div>

    <!-- footer php -->
    <?php include "footer-one.php" ?>
    <?php include "footer.php" ?>
    <!-- footer php -->

    
   
</body>
</html>