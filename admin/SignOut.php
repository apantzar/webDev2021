<?php 

//For sighout & redirect to Home page
    $byeAdmin='bye';
    session_start();
    session_destroy();
    header("location: ../index.php");
    $_SESSION['status'] = $byeAdmin;
    exit();
?>