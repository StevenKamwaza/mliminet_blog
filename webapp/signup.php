<?php

include "menubar.php";
include '../conn.php';




$usertype=null;
if (isset($_POST['usertype'])) {
    $usertype=$_POST['usertype'];
}


if ($usertype==0) {
    
    if (isset($_POST['email'])) {
        # code...
        echo "farmeraccount";
        
        $password=htmlspecialchars(md5(md5($_POST['password'])));
        $repassword=htmlspecialchars(md5(md5($_POST['repassword'])));
        $firstname=htmlspecialchars($_POST['firstname']);
        $surname=htmlspecialchars($_POST['surname']);
        $field=htmlspecialchars($_POST['field']);
        $location=htmlspecialchars($_POST['location']);
        $email=htmlspecialchars($_POST['email']);

        if (empty($repassword) or empty($password) or empty($firstname) or empty($surname) or empty($email)) {
            # code...
            $error ="Please Fill all fields";
        }
       
           //checking if the password is confirmed rigtly
        if ($password==$repassword) {
               
            //check if the account is already exist
            $query=$pdo->prepare("INSERT INTO farmer (farmer_email,firstname,surname,field,location,password_farmer) VALUES(?,?,?,?,?,?)");
            $query->bindValue(1,$email);
            $query->bindValue(2,$firstname);
            $query->bindValue(3,$surname);
            $query->bindValue(4,$field);
            $query->bindValue(5,$location);
            $query->bindValue(6,$password);
            $query->execute();
        
            header('Location: index.php');
            exit();
        }
        else {
               $error="Incorrect password confirmed!";
        }
        
        
    }
    else {
        ?>
        <center><h1 class="text-white">Welcome to Mliminet signup Page</h1></center>
        <?php
    }
}
if ($usertype==1) {
    
    if (isset($_POST['email'])) {
        # code...
        echo "advisoraccount";
        
        $password=htmlspecialchars(md5(md5($_POST['password'])));
        $repassword=htmlspecialchars(md5(md5($_POST['repassword'])));
        $firstname=htmlspecialchars($_POST['firstname']);
        $surname=htmlspecialchars($_POST['surname']);
        $field=htmlspecialchars($_POST['field']);
        
        $email=htmlspecialchars($_POST['email']);

        if (empty($repassword) or empty($password) or empty($firstname) or empty($surname) or empty($email)) {
            # code...
            $err ="Please Fill all fields";
        }
       
        /**
         * 
         * email
         * password_advisor
         * field
         
         */
           //checking if the password is confirmed rigtly
        if ($password==$repassword) {
               
            //check if the account is already exist
            $query=$pdo->prepare("INSERT INTO advisor (email,firstname,surname,field,password_advisor) VALUES(?,?,?,?,?)");
            $query->bindValue(1,$email);
            $query->bindValue(2,$firstname);
            $query->bindValue(3,$surname);
            $query->bindValue(4,$field);
            $query->bindValue(5,$password);
            
            $query->execute();
        
            header('Location: index.php');
            exit();
        }
        else {
               $err="Incorrect password confirmed!";
        }
        
        
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign.css">
</head>
<body >
    
    <center class="mt-3">
        <ul class="nav navbar">
            <li >
                
               
                <i></i>
                <div class="sighup">
                     
                    <form class="form1" action="signup.php" method="post">
                        <img src="images/02.png" width="40rem" alt="" srcset="">
                        <h4 class="text-white">Farmer Account</h4>
                        <small><i>(mlimi account)</i></small> <br>

                        <code><?php if (isset($error)) {
                            echo $error;
                        } ?>
                        </code><br>
                        <input type="text" name="firstname" class="mt-1" placeholder="First name"/><br>
                        <input type="text" name="surname" class="mt-1" placeholder="Surname"/><br>
                        <input type="text" name="field" class="mt-1" placeholder="chomwe mumalima"/><br>
                        <input type="text" name="location" class="mt-1" placeholder="Location"/><br>
                        <input type="email" name="email" class="mt-1" placeholder="email address"><br>       
                        <input type="password" name="password"class="mt-1" placeholder="password"><br>
                        <input type="password" name="repassword" class="mt-1" placeholder="confirm password"><br>
                        <input type="hidden" name="usertype" value="0"><br>
                        <input type="submit" value="Create" class="mt-1 btn fit bg-success">
                        <input type="reset" class="mt-1 btn bg-danger" value="Reset">
                    </form>
                </div>
            </li>
            <li>
            <div class="card link-item" style="width: 18rem;">
                <img class="card-img-top" src="images/rice.jpg" width="70rem" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            
                <div class="card-body">
                    <a href="../index.php" class="card-link">Home Page</a>
                    <a href="index.php" class="card-link">Login link</a>
                </div>
            </div>
            </li>
            <li>
                
                <i></i>
                <div class="sighup">
                    <form class="form2" action="signup.php" method="post">
                        <img src="images/01.png" width="40rem" alt="" srcset="">
                        <h4 class="text-white">Advisor Account</h4>
                        <small><i>(expertise/mlangizi account)</i></small> <br>
                        <i class="text-danger"><?php if (isset($err)) {
                            echo $err;
                        }?></i> <br>
                        <input type="text" name="firstname" class="mt-1" placeholder="First name"/><br>
                        <input type="text" name="surname" class="mt-1" placeholder="Surname"/><br>
                        <input type="text" name="field" class="mt-1" placeholder="chomwe mumalima"/><br>
                        <input type="email" name="email" class="mt-1" placeholder="email address"><br>       
                        <input type="password" name="password"class="mt-1" placeholder="password"><br>
                        <input type="password" name="repassword" class="mt-1" placeholder="confirm password">
                        <input type="hidden" name="usertype" value="1"><br>
                        <input type="submit" value="Create" class=" mt-1 btn fit bg-success">
                        <input type="reset" class="btn mt-1 bg-danger" value="Reset">
                    </form>
                </div>
            </li>
            
        </ul>

    </center>
</body>
</html>