<?php
include "connection.php";
    if(isset($_POST['submit'])){

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
        $query = "UPDATE loginfo SET firstname ='$fname',lastname='$lname',email='$eml', password='$pass' picsource='$folder' WHERE username='$user'";
        $data = mysqli_query($conector,$query);
    
        if($data){
            echo "<h1>data updated successfully</h1>";
        }else{
            echo "<h1>failed</h1>";
        }
    }
?>