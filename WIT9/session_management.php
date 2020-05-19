<?php
    session_start();

    if(isset($_SESSION['counter'])){
         $_SESSION['counter'] += 1;
    }else{
        $_SESSION['counter'] = 1;
    }

    $msg = "You have visited this page " .$_SESSION['counter'];
    $msg .= " times in this session";           
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <center>
            <h1>Session Management in PHP</h1>
            <p style='width: 70%'>
                A session is a way to store information (in variables) to be used across multiple pages.
                Unlike a cookie, the information is not stored on the users computer.    
                eg. this program uses sessions to maintain count of visits by user.
            </p>
            <?php 
                echo $msg
            ?>
        </center>
    </body>
</html>