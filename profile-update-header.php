<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: arial;
        }
        /* header style start */
        *{margin:0;padding:0}
        header{
            background-color: #1C1C1C;
        }
        .container{
            width: 80%;
            margin: 0 auto;
        }
        .nav-main{
            display: flex;
        }
        .nav-main a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            transition:font-size;
            transition-duration:0.5s;
        }
        .nav-main a:hover{
            color:#FDE953;
            font-size:21px;
        }
        .nav-main div:nth-of-type(1) {flex-grow: 9;}
        .nav-main div:nth-of-type(2) {flex-grow: 0.5;display: flex; align-items: center;}
        .nav-main div:nth-of-type(3) {flex-grow: 0.5;display: flex; align-items: center;}
        .nav-main div:nth-of-type(4) {flex-grow: 0.5;display: flex; align-items: center;}
        /* .nav-main div:nth-of-type(5) {flex-grow: 0.5;display: flex; align-items: center;flex-direction:column;} */
        /* .nav-main div:nth-of-type(5) img{
            border-radius:50%;
            padding:3px 0px;
        } */
        .image-div img{
            margin: 10px 0px;
        }
        /* small{
            color: white;
        } */
        /* header style end */
    </style>

</head>
<body>
    <!-- header html start-->

    <header>
        <div class="container nav-main">

            <div class="image-div"><a href="loginhome.php"><img src="images/logo.png" alt=""></a></div>
            <div><a href="loginhome.php">Home</a></div>
            <div><a href="givepost.php">Post</a></div>
            <div><a href="logout.php">Logout</a></div>

        </div>
         
    </header>
    

    <!-- header html end-->
</body>
</html>
