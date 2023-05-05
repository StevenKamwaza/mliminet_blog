<?php
session_start();

if ($_SESSION['logged_in']) {
    //if user is logged in
    $id= $_SESSION['id'];
   include "../conn.php";
   $profile =new Data;
   // $id =$_GET['id'];
    $data =$profile->FarmerProfile($id);  
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
	<div class="bg-dark menu-bar ">
        <nav class="navbar navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="#"><img src="images/logo.png" width="40px" class="logo" alt="" srcset=""></a>
		<a href="" class="navbar-brand nav-item text-white">MLIMI-NET</a>
     <ul class="navbar-nav ml-auto text-justify">
       <li class="nav-item ">
          <a class="nav-link text-white" href="#">PROFILE<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="farmer.php">BACK</a>
      </li>
               
     </ul>
        
	</div>
<!--short list of farmer profile-->

    
    <div class="container pl-0">
        <div class="col">
            <div class="row">
              <table>
                 <tr>
                    <td> profile pic </td>
                    <td><img src="users/<?php echo $data['image'] ?>" alt="" srcset=""></td>
                </tr>
                <tr>
                    <th>First Name: </th>
                    <td><code><?php echo $data['firstname'] ?></code></td>
                </tr>
                <tr>
                    <td>Last Name: </td>
                    <td><code><?php echo $data['surname'] ?></code></td>
                </tr>
                <tr>
                    <td>Field Name: </td>
                    <td><code><?php echo $data['field'] ?></code></td>
                </tr>
                <tr>
                    <td>Location : </td>
                    <td><code><?php 
                          if (isset($data['location'])) {
                            echo $data['location'];
                          } else {
                            echo("None");
                          }
                          ?>
                        </code>
                    </td>
                </tr>
                    <tr><td><a href="editfama.php">Change Details</a></td></tr>
              </table>
            </div>
        </div>
    </div>

  
</body>
</html>
