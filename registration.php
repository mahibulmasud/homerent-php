<?php include "headerarea.php" ?>


    <style>
        .reg-main{
            text-align:center;
            padding-top:50px;
            padding-bottom:50px;
            background: rgb(32,181,95);
            background: linear-gradient(90deg, rgba(32,181,95,1) 1%, rgba(49,57,110,1) 99%);
        }
        /* .reg-main h1{
            padding:10px;
            background-color:green;
            width:40%;
            margin:0 auto;
        } */
        .reg-main input[type=text]{
            padding:10px 20px;
            font-size:18px;
        }
        .reg-main input[type=email]{
            padding:10px 20px;
            font-size:18px;
        }
        .reg-main input[type=password]{
            padding:10px 20px;
            font-size:18px;
        }
        .reg-main input[type=submit]{
            cursor: pointer;
            font-size:20px;
            padding:10px 20px;
            border:0px;
            background:#FFCA2C;
            color:white;
            border-radius:5px;
        }
        /* input file upoad design */
        .custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Select some files';
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}
    </style>

<body>


        <!-- form start -->
        <div class="reg-main">
        <div class="registration-form-div">
        <h1>Registration</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" name="firstname" placeholder="Fisrt Name" id=""><br><br>
                <input type="text" name="lastname" placeholder="Last Name" id=""><br><br>
                <input type="text" name="username" placeholder="Username" id=""><br><br>
                <input type="email" name="email" placeholder="email" id=""><br><br>
                <!-- <input type="file" name="picsource" value="upload" id=""><br><br> -->
                <input type="password" placeholder="password" name="password" id=""><br><br>
                <input type="file" name="uploadfile" class="custom-file-input"><br><br>
                <!-- <input type="file" name="uploadfile" id=""><br><br> -->
                <input type="submit" name="submit" value="submit">
            </form>
            <?php include "registration_process.php" ?>

        </div>
            
        </div>
       

        <!-- form end -->

        <?php include "footerarea.php" ?>
</body>

