<?php

    $host="localhost";
    $user="root";
    $password="";
    $db="users";
    
	$conn=mysqli_connect($host,$user, $password,$db);

    	if($conn===false){
     	  die("connection error    ".mysqli_connect_error());  //This will change to abord
    	}
?>