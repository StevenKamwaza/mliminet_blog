


<?php
session_start();
include 'menubar.php';
include '../conn.php';

if(isset($_SESSION['logged_in'])){
    //already loggin
    session_destroy();



    
    
}else {
    //login
  
    if (isset($_POST['useremail'], $_POST['userpassword'])) {
        //define variables
        $email= htmlspecialchars($_POST['useremail']);
        $password=htmlspecialchars(md5(md5($_POST['userpassword'])));
        $usertype=null;
        if (isset($_POST['usertype'])) {
            # code...
            $usertype=$_POST['usertype'];
        }
        
        if (empty($email) or empty($password) or empty($usertype)) {
            $error="please fill all field";
        }
        if ($usertype==0) {
           
            $query=$pdo->prepare("SELECT * FROM farmer WHERE farmer_email=? AND password_farmer=?");
            $query->bindValue(1,$email);
            $query->bindValue(2,$password);
            $query->execute();
            $id_advisor=$query->fetchColumn();
 
            //$query->bindColumn('=id_advisor', $id_advisor);
           // echo "$id_advisor";
            
            
            $num =$query->rowCount();
            if ($num==1) {
                //users details are collect
                $_SESSION['logged_in']=true;
                $_SESSION["ademail"]=$email;
                $_SESSION['id']=$id_advisor;
                
                header('Location: farmer.php');
                exit();
            }else {
                //incorrect details
                  
                $error= "Incorrect details";
            }
            
        }
       if ($usertype==1) {
           
           $query=$pdo->prepare("SELECT * FROM advisor WHERE email=? AND password_advisor=?");
           $query->bindValue(1,$email);
           $query->bindValue(2,$password);
           $query->execute();
           $id_advisor=$query->fetchColumn();

           //$query->bindColumn('=id_advisor', $id_advisor);
          // echo "$id_advisor";
           
           
           $num =$query->rowCount();
           if ($num==1) {
               //users details are collect
               $_SESSION['logged_in']=true;
               $_SESSION["ademail"]=$email;
               $_SESSION['id']=$id_advisor;
               
               header('Location: advisor.php');
               exit();
           }else {
               //incorrect details
                 
               $error= "Incorrect details";
           }
           
       }
      
    }
}
?>
  
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="signup.css">
<body>
    <center class="loginbox ">
        <?php if (isset($display_error)) {
            ?>
                <h1 class="text-danger"><?php echo ($display_error); ?></h1>
            <?php
        } ?>
        <img src="images/01.png" alt="" srcset="">
        <h1 class="lead">Login</h1>
        <small class="lead text-warning"><i><?php if (isset($error)) {
            # code...
            echo($error);
        }?></i></small>
        <form action="index.php" method="post" autocomplete="off">
        
            <div>
                <input type="email" class="mt-2" name="useremail" class="form-control" id="" placeholder="Email"><br> 
                <input type="password" name="userpassword" class="mt-2" placeholder="Password">
            </div>
            <span>
                <i>
                    Farmer <input type="radio" name="usertype"  value="0"/>
                </i>
            </span>
            <span>
                <i>
                    Advisor <input type="radio" name="usertype"  value="1"/>
                </i>
            </span>
            <div>
                <input type="submit" value="Login" class="button fit btn uniform" size="2rem">
                <a href="signup.php" class="button fit btn uniform bg-white">SignUp</a> <br>
                <a href="../index.php" class="lead text-white mt-3"><i> Back Home </i></a>
            </div>
        </form>
    </center>
</body>
</html>