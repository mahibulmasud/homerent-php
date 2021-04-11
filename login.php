
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css code start -->
  <style>
   @import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
body{
	margin:0;
	padding: 0; 
	font-family: sans-serif;
}
header{
	background: url('images/login-background.jpg');
  background-position: center;
  background-size: cover;
	height: 80vh;
  background-blend-mode: soft-light;

}
.login-box{
	width: 280px;
	position: absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	color: #fff;
  background: black;
    padding: 40px 20px;
    border-radius: 10px;
}	
.login-box h1{
	float: left;
	font-size: 40px;
	
	margin-bottom: 40px;
	padding: 13px 0;
}
.text-box{
	width: 100%;
	overflow: hidden;
	font-size: 20px;
	padding: 8px 0;
	margin: 8px 0;
	

}
.text-box i{
	width: 26px;
	float: left;
	text-align: center;
}
.text-box input{
	border: none;
	outline: none;
	background: none;
	color:#fff;
	font-size: 18px;
	width: 80%;
	float: left;
	margin: 0 10px; 
}
.btn{
	outline: none;
	width: 100%;
	background: none;
	border: none; 
	color: #fff;
	padding: 5px ;
	font-size: 18px;
	cursor: pointer;
}
.span1{
	position: absolute;
    top:100px;
    left:0;
    width:109px;
    height: 6px;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
}
.span2{
    display: none;
    position: absolute;
    top:170px;
    left:0;
    width:100%;
    height: 3px;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
}
.span3{
	position: absolute;
    top:218px;
    left:0;
    width:100%;
    height: 3px;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
}

.btn-box{
	margin-top: 15px;
	position: relative;
	overflow: hidden;
	width: 100%;
	height: 40px;
	
}
.btn{
	position: absolute;
	width: 100%;
	padding: 10px;

}
.span_1{
	position: absolute;
    top:0;
    right:0;
    width:100%;
    height: 3px;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
      animation: anim1 2s linear infinite;
}
.span_2{
	position: absolute;
    bottom:0;
    right:0;
    width:3px;
    height: 100%;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
      animation: anim2 2s linear infinite;
}
.span_3{
	position: absolute;
   	bottom:0;
    left:0;
    width:100%;
    height: 3px;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
      animation: anim3 2s linear infinite;
}
.span_4{
	position: absolute;
   	top:0;
    left:0;
    width:3px;
    height: 100%;
    background: rgb(253,233,83);
background: linear-gradient(90deg, rgba(253,233,83,1) 0%, rgba(130,119,26,1) 46%, rgba(130,119,26,1) 57%, rgba(117,112,67,1) 67%, rgba(79,74,34,1) 84%);
    animation: anim4 2s linear infinite;
}
@keyframes anim1 {
    0%{
        transform: translateX(-100%);
    }
    100%{
        transform: translateX(100%);
    }
}
@keyframes anim2 {
    0%{
        transform: translateY(-100%);
    }
    100%{
        transform: translateY(100%);
    }
}
@keyframes anim3 {
    0%{
        transform: translateX(100%);
    }
    100%{
        transform: translateX(-100%);
    }
}
@keyframes anim4 {
    0%{
        transform: translateY(100%);
    }
    100%{
        transform: translateY(-100%);
    }
}
  </style>
  <!-- css code end -->
</head>
<body>
<?php include "header.php" ?>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aguafina+Script" />
<!-- html code start -->
  <div class="login-box">
    <h1>Login<span class="span1"></span></h1>
    <form action="login_process.php" method="post">
      <div class="text-box">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="Username" value="name">
        <span class="span2"></span>
      </div>
      <div class="text-box">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="Password" value="pass">

      </div>
      <div class="btn-box">
        <input class="btn" type="submit" name="submit" value="Sign in">
        <span class="span_1"></span>
        <span class="span_2"></span>
        <span class="span_3"></span>
        <span class="span_4"></span>  
      </div>
    </form>
  </div>
<!-- html code end -->
<?php include "footer-one.php" ?>
<?php include "footer.php" ?>
</body>
</html>



