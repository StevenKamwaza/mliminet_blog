<?php
session_start();
include '../conn.php';
$query = "SELECT * FROM chat ORDER BY id DESC";
$run = $pdo-> query($query);
if (isset($_SESSION['logged_in'])) {
    # code...
   // echo "For the love programming trting impossibes \n ";
        echo $_SESSION["ademail"];


        if(isset($_POST['email'])){
            if (empty($_POST['email']) or empty($_POST['message'])) {
                $error ="Plese enter all details";
            } else {
                # code...
                
                $email = $_POST['email'];
                $message = $_POST['message'];
                $query = "INSERT INTO chat (email, message) VALUES ('$email','$message')";
                $run = $pdo -> query($query);

               

                if($run){
                    ?>
                    <audio src='audio/notification.mp3' hidden='true' autoplay='true'/>

                    <?php
                     header("Location: chat.php");
                     exit();
                }
            }
            
		}
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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="indexFooter.css">
	
    <title>Mlimi net</title>
    <link href="/mliminet/images/banana.jpg" rel="icon" type="image/png" />
	
</head>
<body class="bg-white">
	<div class="bg-dark menu-bar ">
        <nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="images/logo.png" width="40px" class="logo" alt="" srcset=""></a>
		<a href="" class="navbar-brand nav-item text-white">MLIMI-NET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                 
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto text-justify">
                <li class="nav-item ">
                    <a class="nav-link text-white" href="farmer">HOME<span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="">ABOUT US</a>
                </li>
            </ul>
        </div>
	</div>  


    <section class="messages">
        <div class="bg-secondary">
            <!--sent messages-->
            <center>
                <form action="chat.php" method="post" class="form-control m-6 p-4" width="300px">
                        <?php if (isset($error)) {
                            echo $error;
                        } ?>
                    <div class="form-control">
                        <input type="text" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-control">
                        <textarea type="text" name="message" class="form-control" placeholder="Message here"></textarea>
                    </div>
                    <div class="form-control">
                        <input type="submit" class="btn fit bg-success" value="Send Message">
                    </div>
                    
                </form>
            </center>
        </div>
        <div class="bg-dark">
            <!--selecting all messages from user-->
            <div class="name bg-primary">
                <?php      
                  
                    while ($row = $run->fetch_array()):
                ?>
            <div id="message">
                <img class="message-avatar" src="images/user.png" alt="">
                <a class="message-author" href="#"> <?php echo $row['name'];?> </a>
                <span class="message-date"> <?php echo formatDate($row['date']);?> </span>
                <span class="message-content"> <?php echo $row['message'];?> </span>
            </div>
            <?php endwhile; ?>
                <h4 class=" text-white">Che steve</h4>
                <p class="formo-control text-white">text</p>
            </div>
        </div>
    </section>
</body>
</html>


    <?php
} else {
    # code... $query=$pdo->prepare("SELECT * FROM farmer WHERE farmer_email=? AND password_farmer=?");
    echo "zoyesana sizabwino  <a href=\"index.php\">Login here</a> ";
}



?>
