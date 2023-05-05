<?php

    session_start();
    include "../conn.php";
    $dataItem =new Data;
    $id =$_GET['id'];
    $data =$dataItem->fetchData($id); 
   // print_r($data);
    //$dataComments=$dataItem->fetchComments($id);
    //print_r($dataComments);
    //number of comments
    //$numbers=$dataItem->numComments($id);

    if ($_SESSION['logged_in']) {
        ?>
        <?php include 'menubar.php'; ?> <br><br>
        <body class="bg-white p-3">
            <div class="card-header bg-dark">
                <h2 class="text-center   text-white text-justify"><?php echo $data['title'];?></h2>
                <center>
                    <figure ><img src="images/<?php echo $data['image'] ?>" alt="" srcset=""></figure>

                </center>
                <p class="lead jext-justify  text-white">
                <?php echo $data['post'];?>
                </p>
                <small class="text-center text-warning lead text-white">
                    <i class="ml-2">posted <?php   echo $data['time']; ?>
                    </i>
                </small>

                <p class="text-justfiy lead text-warning"><a href="farmer.php">&larr;Back</a></p>
            <div>
        </body>
        <?php
    } else {
        header("Location: index.php");
        exit();
    }
    
?>



