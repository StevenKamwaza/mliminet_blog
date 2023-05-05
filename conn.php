<?php
//connection to database
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=mliminet'," "," ");
    } catch (PDOException $th) {
        include 'menubar.php';
        echo '<center> <h4 class="text-warning">Unable to connect to database server</h4></center>';
        exit();
    }




class Data{

    public function fetch(){
        global $pdo;

        $query=$pdo->prepare("SELECT * FROM homearticles,advisor WHERE advisor.id_advisor = homearticles.id_advisor ORDER BY time ASC");
        $query->execute();

         return $query->fetchAll();
        
    }
    // public function Author(){
    //     global $pdo;

    //     $query=$pdo->prepare("SELECT *  FROM advisor , homearticles WHERE advisor.id_advisor = homearticles.id_advisor");
    //     $query->execute();

    //      return $query->fetchAll();
        
   // }

    public function fetchFarmer($email,$password){
        global $pdo;

        $query=$pdo->prepare("SELECT * FROM farmer WHERE farmer_email=? AND password_farmer=?");
        $query->bindValue(1,$email);
        $query->bindValue(2,$password);
        $query->execute();

        return $query->fetch();
        
    }
    public function FarmerProfile($id){
        global $pdo;

        $query=$pdo->prepare("SELECT * FROM farmer WHERE id_farmer=?");
        $query->bindValue(1,$id);
        $query->execute();

         return $query->fetch();
        
    }
    public function fetchData($id){
        global $pdo;

        $query=$pdo->prepare("SELECT * FROM homearticles WHERE id=?");
        $query->bindValue(1,$id);
        $query->execute();

         return $query->fetch ();
        
    }

    public function fetchComments($id){
        global $pdo;

        $query=$pdo->prepare("SELECT * FROM postcomments WHERE id=? ORDER BY time DESC");
        $query->bindValue(1,$id);
        $query->execute();
        return $query->fetchAll();
        
    }
    public function numComments($id){
        global $pdo;

        $query=$pdo->prepare("SELECT count(*) AS 'number' FROM postcomments WHERE id=? ORDER BY time DESC");
        $query->bindValue(1,$id);
        $query->execute();
        return $query->fetch();
        
    }
}
?>