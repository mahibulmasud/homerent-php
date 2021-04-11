<?php
    include ("connection.php");
    session_start();
?>
<?php
    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pwd = $_POST['password'];
        $query = "SELECT * FROM loginfo WHERE username='$user' && password='$pwd' ";
        $data = mysqli_query($conector,$query);
        $total = mysqli_num_rows($data);
        // echo $total;

        if($total == 1){
            // echo "Login Successful !";
            $_SESSION['user_name'] = $user;
            header("location:loginhome.php");
        }else{
            echo "
            <h3>try again</h3>
            ";
        }
    }
?>
