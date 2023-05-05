    <?php
    session_start();
        if (isset($_SESSION['logged_in'])) {
            echo ($_SESSION['id']);
            include "../conn.php";
            $id =$_SESSION['id'];
            $profile =new Data;
            // $id =$_GET['id'];
            $data =$profile->FarmerProfile($id); 
            //print_r($data); UPDATE products SET quantity = quantity - 100 WHERE name = 'Pen Red'
            if (isset($_POST['firstname'])) {
                $firstname= $_POST['firstname'];
                $lastname= $_POST['surname'];
                $field= $_POST['field'];
                $location =$_POST['location'];
                $email =$_POST['farmer_email'];
                
                $query=$pdo->prepare("UPDATE `farmer` SET ,`farmer_email`=$email,`firstname`=$firstname,`surname`=$lastname,`field`=$field,`location`=$location, WHERE `id_farmer`=$id");
                //$query->bindValue(1,$id);
                //  $query=$pdo->prepare("UPDATE farmer SET field = '$field' WHERE farmer_id = '$id'") ;            
                $query->execute();
                
                if ($query->rowCount()>0) {
                    # code...
                    echo("hello");
                }
                // header('Location: farmprof.php');
                // exit();

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
<body class="">
    <!--Nav BAr-->
	<div class="bg-dark menu-bar ">
        <nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="images/logo.png" width="40px" class="logo" alt="" srcset=""></a>
		<a href="" class="navbar-brand nav-item text-white">MLIMI-NET || CHANGE PROFILE DETAILS</a>
        <ul class="navbar-nav ml-auto text-justify">
        
        <li class="nav-item">
            <a class="nav-link text-white" href="farmer.php">BACK</a>
        </li>
                
        </ul>
        
	</div>


            <center>
                <div>
                    <form action="editfama.php" method="post" class="">
                       First Name: <input type="text" name="firstname" class="mt-1 " value="<?php echo $data['firstname']?>" placeholder="Firstname" /><br>
                       Surname: <input type="text" name="surname" class="mt-1 " value="<?php echo $data['surname']?>" placeholder="Surname"/><br>
                       Field:  <input type="text" name="field" class="mt-1 "value="<?php echo $data['field']?>"  placeholder="Enter Field"/><br>
                        Location: <input type="text" name="location" class="mt-1 "value="<?php echo $data['location']?>" placeholder="Enter Location"/><br>
                        Email Address: <input type="email" name="farmer_email" class="mt-1 " value="<?php echo $data['farmer_email']?>" placeholder="Enter your Email Address"><br>       
                        <input type="submit" value="Change Now" class="mt-1 btn fit bg-success ">
                    </form>
                </div>
            </center>
        <?php
        } else {
            echo ("please logging");
        }
        
    ?>

</body>
</html>