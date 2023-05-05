<?php

session_start();
$key=$_SESSION['id'];
// echo $key;
// echo $_SESSION["ademail"];
include '../conn.php';



// echo $_SESSION['id'];
//new data object of data from advisor
//checking if the user is looged in or not
if ($_SESSION['logged_in']) {
    # code...
     
    $post = new Data;
    $posts=$post->fetch();
    //print_r($posts);
  
    $msg =8;

    // echo "Mwaloga adala";

    ?>
    
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
   	<script src="js/skel-layers.min.js"></script>
	<script src="js/init.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <!-- <link rel="stylesheet" href="fam.css"> -->
    <link rel="stylesheet" href="../indexFooter.css">
	
    <title>Mlimi net</title>
    <link href="/mliminet/images/banana.jpg" rel="icon" type="image/png" />
	
</head>
<body class="bg-secondary">
	<div class="bg-dark menu-bar lead">
        <nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="images/logo.png" class="logo" alt="" srcset=""></a>
		<a href="" class="navbar-brand nav-item text-white">MLIMI-NET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto text-justify">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="#">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href=""><b class="text-danger"><?php echo $msg ?></b><img src="msg.ico" alt="" srcset=""><i>MESSAGES</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active" href="blog">MARKET COMMUNITY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="farmprof.php"><img src="<?php $location?>"  alt="" srcset="">PROFILE</a>
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php">LOGOUT</a>
                </li>
            </ul>
        </div>
	</div>  






    <div class="container pl-0">
        <div class="col">
            <div class="row">
                <?php foreach ($posts as $keypost) {
                   ?>
                   <div class="card link-item  m-1" style="width: 18rem;">
                    <img class="card-img-top" src="images/<?php echo $keypost['image']?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $keypost['title']?></h5>
                        <p class="card-text"><?php echo $keypost['subtitle']?>.</p>
                    </div>
                
                    <div class="card-body">
                        <i class="card-link text-success"><small class="text-primary">By</small> <?php echo $keypost['firstname'].' '.$keypost['surname']?></i>
                        <a href='articles.php?id=<?php echo $keypost['id']; ?>' class="card-link">Readmore</a>
                    </div>
                    
                </div>
                <?php
                }?>
                

               
            
            </div>
        </div>
    </div>

    
   
    


    <!--read articles -->
    <section>
    <!--ask questions/ comment-->
    </section>
    <?php include '../footer.php' ?>
</body>
</html>
    
<?php
} else {

    
    echo $display_error;
    header("Location: index.php");
    $display_error = "Kindly log in here please to access that page!!";
    exit($display_error);
}


?>




