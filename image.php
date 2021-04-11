<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadfile" id="">
        <input type="submit" name="submit" value="Upload File">
    </form>
</body>
</html>
<?php
    $filename =  $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "student/".$filename;
    move_uploaded_file($tempname,$folder);
    echo "<img src='$folder' height='100px' width='100px'>";
?>
