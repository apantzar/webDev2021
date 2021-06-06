<?php

$conn = mysqli_connect('localhost','root','','comments');

if(!$conn){
    die("connection failed " .mysqli_connect_error);

}