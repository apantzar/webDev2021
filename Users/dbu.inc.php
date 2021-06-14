<?php

$conn = mysqli_connect('localhost','root','','users');//sindesi vashs dedomenwn me thn selida

if(!$conn){//an den epitefxthei sindesi thn termatizoume kai girname ton logo poy apetyxe h sindesi
    die("connection failed " .mysqli_connect_error);

}

?>