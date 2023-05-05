
<?php


include 'conn.php';

$data = new Data;
//$posts=$data->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
   	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="indexFooter.css">
	
    <title>Mlimi net</title>
    <link href="/mliminet/images/banana.jpg" rel="icon" type="image/png" />
</head>
<body class="bg-dark">
    <header>
        <?php

            include 'menubar.php'
        ?>
    </header>
    <section id="banner" class=" warpper">
        
        <div class="container">
				<center>
                    <div class="text">
                        <h2 class="text-white">Bwalo la alimi ndi a malonda</h2>
                        <p class="lead text-white"><i>learn, apply,and share experiences</i></p>
                        <br><br><br><br>
                    </div>

                    <div class="divi pt-4">
                        <br><br>
                         <div class="m-5 p-5">
                             <a href="webapp"><button class="button fit btn ml-3 text-white"><i><h4>Get Started...</h4></i></button></a>                            
                         </div>
                    </div>
                </center>
        </div>
    </section>

    <!--latest trended news-->
    <section class="bg-success mt-2">
       <center>
            
            <div class="row">
                <div class="col">
                    <div class="card bg-success">
                        <div class="card-header">
                            <h3 class=" text-white align-center fz-3">General post for ulimi wabwino</h3>
                        </div>
                        <ul class="nav navbar">
                            
                            <li>
                            <img src="images/rice.jpg" alt="" srcset="">
                            </li>
                            <li>
                                <h1 class="lead">Apples</h1>
                                <p class="lead text-white">Ulime wa ma apples</p>
                                <img src="images/apple.jpg" width="40rem" alt="" srcset="">
                                
                            </li>
                            <li>
                                <img src="images/mushroom.jpg" width="40rem" alt="" srcset="">
                                
                            </li>
                        
                        </ul>
                        
                    </div>
                </div>
            </div>
       </center>

    </section>

    <!--footer sectiom-->
    <section>

       <?php
        include 'footer.php';
       ?>
    </section>
</body>
</html>