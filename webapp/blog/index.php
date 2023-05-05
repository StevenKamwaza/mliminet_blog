<?php
    session_start();
    if ($_SESSION['logged_in']) {
        # code...
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mliminet Blog</title>
    </head>
    <body>
        <h1>Mlimi net blog</h1>
        <code>Under construction</code>
    </body>
    </html>
    <?php
    } 
    else {
        session_start();
        $_SESSION['error']=true;
        header("Location: error.php");
        exit();
    }
    ?>