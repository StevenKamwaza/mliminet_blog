
<?php 
    session_start();
    include '../conn.php';
?>


<div id="profile" class="row">
		
        <div id="pro2" class="col-xs-2">
            <?php
     
    
    
               $username=$_SESSION['id'];
    
    
               if(isset($_POST['submit']))
    
                   {
            $name=$_FILES['myfile']['name'];
            $tmp_name=$_FILES['myfile']['tmp_name'];
        
        
        
        if($name)
        {
        $location="images/$name";
        move_uploaded_file($tmp_name,$location);	
            
        $query=$pdo-prepare("UPDATE advisor SET image='$location' WHERE id_advisor='$username'");
        //$query=$pdo->prepare("UPDATE  advisor SET image=?");
        //$query->bindValue(1,$location);
      
        $query-execute();
            
            
            header("Location: advisor.php");
            exit();
            
        }
        else 
            die("Please select a file");
    }
    
     
    
    echo "<br>";
    echo "
    
    <form action='advisorpro.php' method='post' enctype='multipart/form-data'>
        
    <input type='file' name='myfile'>
    <input type='submit' name='submit' value='Change Your pic'>
    </form>
    ";
    ?></div