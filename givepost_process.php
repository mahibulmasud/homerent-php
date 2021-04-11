<?php
    include ("connection.php");
    error_reporting(0);
if(isset($_POST['submit'])){
    $loc = $_POST['location'];
    $bdrm = $_POST['bedroom'];
    $bthrm = $_POST['bathroom'];
    $blcny = $_POST['belcony'];
    $price = $_POST['price'];
    $des = $_POST['description'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phn = $_POST['phone'];
    // for pic upload start
    $filename =  $_FILES["pictureuploadfile"]["name"];
    $tempname = $_FILES["pictureuploadfile"]["tmp_name"];
    $folder = "rentpictures/".$filename;
    move_uploaded_file($tempname,$folder);
    // for pic upload end
    

    $query = "INSERT INTO rentinfo VALUES ('$loc','$bdrm','$bthrm','$blcny','$price','$des','$folder','$name','$email','$phn')";
    $data = mysqli_query($conector,$query);
    
    if($data){
        echo "<p style='color:green'>data inserted successfully</p>";
    }
}
?>