<?php
    include ("connection.php");
    error_reporting(0);


    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $user = $_POST['username'];
    $eml = $_POST['email'];
    $pass = $_POST['password'];
    // for pic upload start
    $filename =  $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "userpicture/".$filename;
    move_uploaded_file($tempname,$folder);
    // for pic upload end

    $query = "INSERT INTO loginfo VALUES ('$fname','$lname','$user','$eml','$pass','$folder')";
    $data = mysqli_query($conector,$query);
    
    if($data){
        echo "<h1>data inserted</h1>";
    }
?>