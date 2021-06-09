<?php

$conn = mysqli_connect('localhost','root','','contact');

if(!$conn){
    die("Connection Failed : ".mysqli_connect_error);
}