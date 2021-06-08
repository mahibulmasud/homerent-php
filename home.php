<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Home Rent</title>
    <style>
        .home-banner-img{
            position: relative;
            width:100%;
            height: 70vh;
        }
        .home-banner-img img{
            width:100%;
            height:100%;
            filter: brightness(0.6);
        }
        .banner-text h1{
            color:white;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .ads{
            background:#1c1c1ce8;
        }
    </style>
</head>
<body>
    <?php include "headerarea.php" ?>

    <div class="home-banner-img" >
        <img src="images/banner.jpg" alt="">
        <div class="banner-text">
             <h1>FIND THE BEST HOUSE NEAR YOU</h1>
        </div>
    </div>
    <div class="ads">
    <?php include "displaypost.php" ?>
    </div>
    
    <?php include "footerarea.php" ?>
</body>
</html>