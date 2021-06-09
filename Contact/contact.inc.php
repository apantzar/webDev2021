<?php

function setMessage($conn){
    if(isset($_POST['messageSubmit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name','$email','$phone','$message')";
        $result = $conn ->query($sql);
    }
}