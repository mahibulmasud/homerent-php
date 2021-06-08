<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="header.css">
    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,900;1,100;1,200&display=swap" rel="stylesheet">
    <!-- fontawesome  icon link-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <style>
        *{margin:0;padding:0;outline:0;}
body{
    font-family: 'Poppins', sans-serif;
}
.header-container{
    width:90%;
    margin: 0 auto;
}


/* top header style start */
.topheader-section{
    background-color: #F7F7F7;
    height: 10vh;
    display: grid;
    align-items: center;
    font-weight: 500;
    color: #5a5a5a;
}
.topheadermaindiv{
    display: grid;
    grid-template-columns: 5fr 6fr;
}
.topheader-leftpart-table tr td{
    /* border:1px solid red; */
    padding:0px 5px;
}
.topheader-rightpart-table tr td{
    padding:0px 5px;
}
.topheadermaindiv-secondchilddiv{
    display: grid;
    justify-content: end;
}
/* top header style end */

/* header bottom style start  */
.headerbottom-maindiv{
    display: grid;
    grid-template-columns: 4fr 8fr;
    height: 12vh;
    align-items: center;

}
.headerbottom-maindiv .childtwo{
    display: grid;
    justify-content: end;
}
.headerbottom-maindiv .childtwo ul{
    list-style-type: none;
}
.headerbottom-maindiv ul li{
    float: left;
}
.headerbottom-maindiv .childtwo ul li a{
    text-decoration: none;
    padding: 20px 35px;
    font-weight: 500;
    font-size:20px;
    color: #3d3d3d;
    /* background-color: antiquewhite; */

}
.headerbottom-maindiv .childtwo ul li a:last-child{
    padding-right:0px;
}
/* header bottom style end  */
    </style>
</head>
<body>
    <!-- header start -->
    <header>
        <!-- header part 01 start -->
        <section class="topheader-section">
            <div class="topheadermaindiv header-container">
                <div>
                    <table class="topheader-leftpart-table">
                        <tr>
                            <td>FOLLOW US</td>
                            <td><i class="fab fa-instagram"></i></td>
                            <td><i class="fab fa-facebook-f"></i></td>
                            <td><i class="fab fa-twitter"></i></td>
                        </tr>
                    </table>
                </div>
                <div class="topheadermaindiv-secondchilddiv">
                    <table class="topheader-rightpart-table">
                        <tr>
                            <td><i class="fas fa-phone-square-alt"></i></td>
                            <td>CALL US - 01623 030020</td>
                            <!-- <td><i class="fas fa-address-book"></i></td>
                            <td>Login / Register</td> -->
                            <td><i class="fas fa-search"></i></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!-- header section 01 end -->
        <!-- header section 02 start -->
        <section>
            <div class="headerbottom-maindiv header-container">
                <div>
                    <img src="images/logo.png" alt="">
                </div>
                <div class="childtwo">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="registration.php">Submit ads</a></li>
                        <!-- <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li> -->
                        <li><a href="registration.php">SignUp</a></li>
                        <li><a href="loginarea.php">SignIn</a></li>
                        
                    </ul>
                </div>
            </div>
        </section>
        <!-- header section 02 end -->
    </header>
    <!-- header end -->
</body>
</html>