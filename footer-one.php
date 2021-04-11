<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <style>
         /* footer stye start */
         footer{
             color:white;
            background-color: #1C1C1C;
            height: 35vh;
            display: grid;
            align-items: center;
        }
        .foot-main{
            color: white;
            display: grid;
            grid-template-columns: 3fr 1fr;
        }
        .foot-title-header{
            font-size: 30px;
            margin: 20px 0px;
        }
        .foot-description table tr td{
            padding: 5px;
        }
        .subscribe-table input[type=text]{
            padding:8px 10px;
            box-sizing: border-box;
            font-size: 20px;
            border: 0px;
        }
        button{
            background-color: #4CAF50;
            border: none;
            color: white;
            padding:8px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            cursor: pointer;
            margin-left: -2px;
        }
        .social-icon-table{
            margin-top: 20px;
        }
        .social-icon-table tr td{
            padding: 10px;
        }
        .social-icon-table i{
            color: white;
            font-size:30px;
        }
        
        /* footer stye end */
    </style>
    </style>
</head>
<body>
     <!-- footer start -->
     <footer>
        <div class="container foot-main">
            <div><h3 class="foot-title-header">Contact Us</h3></div>
            <div><h3 class="foot-title-header two">Stay In Touch</h3></div>
            <div class="foot-description">
                <table>
                    <tr>
                        <td><i class="fas fa-home"></i></td>
                        <td>555 South Manda Mugda Dhaka-1214.
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-envelope"></i></td>
                        <td>info@ourdomain.com
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-phone-alt"></i></td>
                        <td>+8801700112233
                        </td>
                    </tr>
                </table>
            </div>
            <div class="four">
                <table class="subscribe-table">
                    <tr>
                        <td><input type="text" name="" id=""></td>
                        <td><button type="submit"><i class="fas fa-check"></i></button></td>
                    </tr>
                </table>
                <table class="social-icon-table">
                    <tr>
                        <td><a href="#"><i class="fab fa-facebook"></i></a></td>
                        <td><a href="#"><i class="fab fa-twitter"></i></a></td>
                        <td><a href=""><i class="fab fa-instagram"></i></a></td>
                        <td><a href="#"><i class="fab fa-linkedin-in"></i></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>
    <!-- footer end -->
</body>
</html>