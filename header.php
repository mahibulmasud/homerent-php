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
        .nav-main-a:hover{
            color:#FDE953;
        }
        .nav-main div:nth-of-type(1) {flex-grow: 9;}
        .nav-main div:nth-of-type(2) {flex-grow: 1;display: flex; align-items: center;}
        .nav-main div:nth-of-type(3) {flex-grow: 1;display: flex; align-items: center;}
        .nav-main div:nth-of-type(4) {flex-grow: 1;display: flex; align-items: center;}
        .image-div img{
            margin: 10px 0px;
        }
        /* header style end */
    </style>


     <!-- header html start-->

     <header>
        <div class="container nav-main">
            <div class="image-div"><img src="images/logo.png" alt=""></div>
            <div><a href="home.php">Home</a></div>
            <div><a href="login.php">Login</a></div>
            <div><a href="registration.php">Registration</a></div>
        </div>
         
    </header>

    <!-- header html end-->
