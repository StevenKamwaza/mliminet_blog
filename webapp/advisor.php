<?php
session_start();
$key=$_SESSION['id'];
echo $key;
echo $_SESSION["ademail"];
include '../conn.php';

$msg =8;

if ($_SESSION['logged_in']) {
    # code...
    if (isset($_POST['title'])){
       

        $title= $_POST['title'];
        $subtitle=$_POST['subtitle'];
        $post =$_POST['article'];
        $id=$_POST['id'];

        $image =$_FILES['file']['name'];
        $target_dir="images/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
         // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");


        //checking if it is not empty 
        if (empty($title) or empty($subtitle) or empty($post)) {
            # code...
            $error="<i class=\"text-warning\">Please fill all the Field<i>";
        } else {
            $data = $pdo->prepare("INSERT INTO homearticles (title,subtitle,image,post,id_advisor) VALUES (?,?,?,?,?)");
            $data->bindValue(1,$title);
            $data->bindValue(2,$subtitle);
            $data->bindValue(3,$image);
            $data->bindValue(4,$post);
            $data->bindValue(5,$id);
            $data->execute();

            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$image);

        }
        
    }
    else {
        $error="fill all fields";
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
    <link rel="stylessheet" href="..css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="indexFooter.css">
	
    <title>Mlimi net</title>
    <link href="/mliminet/images/banana.jpg" rel="icon" type="image/png" />
	
</head>
<body class="bg-dark">
	<div class="bg-success menu-bar ">
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
                    <a class="nav-link text-white" href="chat.php"><b class="text-danger"><?php echo $msg ?></b><img src="msg.ico" alt="" srcset=""><i>MESSAGES</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">AGROBUSINESS </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="advisorpro.php"><img src="images/01.png"  alt="" srcset="">My Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="logout.php"><img src="images/01.png"  alt="" srcset="">Logout</a>
                </li>
            </ul>
        </div>
	</div>  


    <section>
    <div class="row">
                <div class="col">
                    <div class="card bg-secondary">
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
    </section>

    <!--post a article-->
    <?php 
    
       
    ?>
    <section>
        
        <div class="form-control bg-success mt-3" >
            <center><h1 class="lead text-white">Post Article</h1></center>
            <form action="advisor.php" method="post" class="" enctype='multipart/form-data'>
                <?php if (isset($error)) {
                    # code...?>
                    <i class="text-danger">
                        <?php echo $error;?>
                    </i><?php
                } ?>
                <div class="mt-1">
                    <input type="text" class="form-control" width="30%" name="title" placeholder=">>>>>Headline">
                </div>
                <div >
                <small class="form-control mt-1">Enter image file
                    <input type="file"  name="file" class="form-control">
                </small>
                
                <div class="mt-1">
                    <input type="hidden" name="id" value="<?php echo $key;?>" >
                    <textarea type="text" class="form-control" name="subtitle" placeholder=">>>>Sub Headline"></textarea>
                </div>
                <div class="mt-1">
                    <textarea name="article" class="form-control" cols="" rows="3" placeholder=">>>>Article"></textarea>
                </div>
                <div class="mt-1">
                   <center>
                        <input type="submit" class="btn fit bg-primary">
                   </center>
                </div>

            </form>
        </div>
        <!--Answer questions on the article-->
    </section>

    


</body>
</html>
<?php


    
}
else{
    header("Location: index.php");
    exit();
}
?>
?>