<!-- php code goes here----------------------------------------------------------------- -->
<?php
    error_reporting(0);
    include 'connection.php';
   
    $query = "SELECT * FROM rentinfo";
    $data = mysqli_query($conector, $query);
    $total= mysqli_num_rows($data);


    if($total != 0)
    {
?>

<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
</head>
<style>
        .container{
            width:80%;
            margin:0 auto;
        }
        .content-main{
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap:20px 20px;
            color:black;
        }
        .content-main>div{
            box-shadow: 0px 0px 8px -5px grey;
            transition: box-shadow 1s;
        }
        .content-main>div:hover{
            box-shadow:0px 0px 28px 0px grey;
        }
        .content-main img{
            width:100%;
        }
        .header h1{
            text-align:center;
            margin-bottom:30px;
            color:black;
        }
        .card-main{
            position: relative;
            padding:10px;
            border-radius:5px;
        }
        .card-main h2{
            position: absolute;
            top:20px;
            right:20px;
        }
        .card-main .price{
            color:#FDE953;
        }
        .up-space{
            padding:50px 0px;
        }
        .fa-map-marker-alt{
            font-size:12px;
        }
        .card-footer{
            padding:15px 5px;
            background:#F7F7F7;
            border-radius: 10px;
            display:grid;
            grid-template-columns:1fr 1fr;
        }
        .card-footer .two{
            display:grid;
            justify-content:end;
        }
        .title-area{
            padding:20px 5px;
        }
        .title-area h3{
            padding-left:2px;
            color:#BD3521;
        }
        .card-main{
            border:border-box;
           
        }
        .card-main:hover{
            box-shadow:
        }
        
        .card-main td{
            padding: 0px 2px;
        }
        .card-main .img{
            width: 100%;
            height: 200px;
        }
    </style>
    <div class="up-space"></div>
    <div class="header"><h1>Recent Ads</h1></div>
    <!-- grid start -->
   
    <div class="content-main container">
    <?php
        while($result = mysqli_fetch_assoc($data))
        {
        ?>
            <!-- card start  -->
                <div class="card-main">
                    <?php echo "<img class='img' src='".$result['picture']."'>"; ?>
                    <h2 class=price><?php echo $result['price']; ?></h2>
                        <div class="title-area">
                            <h3>House rent</h3>
                            <table>
                                <tr>
                                    <td><i class="fas fa-map-marker-alt"></i></td>
                                <td><h6><?php echo $result['location']; ?></h6></td>
                                </tr>
                            </table>
                        </div>
                        <div class="card-footer">
                            <div>
                                <table>
                                    <tr>
                                        <td><i class="fas fa-bed"></i></td>
                                        <td><?php echo $result['bedroom']; ?></td>
                                        <td>Bedroom</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="two">
                                <table>
                                        <tr>
                                            <td><i class="fas fa-bath"></i></td>
                                            <td><?php echo $result['bathroom']; ?></td>
                                            <td>Bathroom</td>
                                        </tr>
                                </table>
                            </div>
                        </div>
                </div>
<?php
        }
    }
?>

    </div>   
    <div class="up-space"></div>


