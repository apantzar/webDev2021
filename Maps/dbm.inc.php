<?php

$conn = mysqli_connect('localhost','root','','users');

if(!$conn){
    die("connection failed " .mysqli_connect_error);

}
?>