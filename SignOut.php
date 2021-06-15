<?php 

//Log out admin
    $byeAdmin='bye';
    session_start();
    session_destroy();
    header("location:index.php"); //Moves admin to home
    $_SESSION['status'] = $byeAdmin;
    exit(); //closes this session
?>