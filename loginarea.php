<?php include "headerarea.php" ?>


    <style>
        .login-page-background-div{
            width: 100%;
            height: 100vh;
            display: grid;
            align-items: center;
            background: rgb(32,181,95);
            background: linear-gradient(90deg, rgba(32,181,95,1) 1%, rgba(49,57,110,1) 99%);
        }
        .login-card-maindiv{
            width: 70%;
            margin: 0 auto;
            display: grid;
            justify-content: center;
            align-items: center;
            grid-template-columns: 6fr 6fr;
            border: 1px solid white;
            border-radius:10px;
            padding: 70px;
        }
        .login-card-firstchilddiv{
            display: grid;
            justify-content: center;
            align-items: center;
        }
    </style>

<body>
    <div class="login-page-background-div">
            <div class="login-card-maindiv">
                <div class="login-card-firstchilddiv">
                    <!-- image part -->
                    <img src="images/loginpage.png" alt="">
                </div>
                <div class="login-card-secondchilddiv">
                    <!-- user login part -->
                    <div class="text-center">
                            <h1>User Login</h1>

                            <form action="login_process.php" method="post">
                            <div class="mt-4">
                                <i class="fa fa-user"></i>
                                <input type="text" name="username" placeholder="Username" value="name">
                                <span class="span2"></span>
                            </div>
                            <div class="mt-3">
                                <i class="fa fa-lock"></i>
                                <input type="password" name="password" placeholder="Password" value="pass">

                            </div>
                            <div class="mt-2">
                                <input class="btn btn-warning mt-3 mb-3" type="submit" name="submit" value="Sign in">
                            </div>
                            </form>


                    </div>
                </div>
            </div>
    </div>
</body>


<?php include "footerarea.php" ?>