<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .space{
       padding:50px; 
    }
    .table-container{
        width:80%;
        margin:0 auto;
    }
    .table-container td{
        padding:10px;
        font-size:20px;
        border:0px;
    }
    .table-container table,tr{
        border:0px;
    }
    .edit-button-row a{
        text-decoration:none;
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
    <!-- login header start -->
    <?php include "profile-update-header.php" ?>
    <!-- login header end -->

<!--  -->
<!-- php for fetch image & username start-->
<?php
    include 'connection.php';
    session_start();
?>
<?php
    $userprofile = $_SESSION['user_name'];
    $query = "SELECT * FROM loginfo WHERE username='$userprofile'";
    $data = mysqli_query($conector, $query);
    $result = mysqli_fetch_assoc($data);
?>
<!-- php for fetch image & username end-->
<div class="space"></div>
        <div class="table-container">
            <table >
                <tr>
                    <td>First Name</td>
                    <td>:</td>
                    <td><?php echo $result['fisrtname'];?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td>:</td>
                    <td><?php echo $result['lastname'];?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><?php echo $result['username'];?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?php echo $result['email'];?></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><?php echo $result['password'];?></td>
                </tr>
                <tr>
                    <td>Picture</td>
                    <td>:</td>
                    <td><img src='<?php echo $result['picsource'];?>' height="100px" width="100px"></td>
                </tr>
                <tr class="edit-button-row">
                    <td colspan="3"><a href="profile_update.php?fn=$result[fisrtname]">Edit Information</a></td>
                </tr>
            </table>
        </div>
    <div class="space"></div>
    <!-- footer start -->
    <?php include "footerarea.php" ?>
    <!-- footer end -->
</body>
</html>