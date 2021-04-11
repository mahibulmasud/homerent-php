<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$conector = mysqli_connect($servername,$username,$password,$dbname);

if($conector){
    echo "";
}else{
    die("Connection failed because".mysqli_connect_error());
}
?>