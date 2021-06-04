<?php 
    $host="localhost";
    $user="root";
    $password="";
    $db="users";


    $data=mysqli_connect($host,$user, $password,$db);

    if($data===false){
       die("connection error");  //This will change to abord
    }


    if($_SERVER["REQUEST_METHOD"]=="POST"){


        $username = $_POST["username"];
        $password = $_POST["password"];

    }


?>