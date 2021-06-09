<?php

function setMessage($conn){
    if(isset($_POST['messageSubmit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO contact (name, email, phone,date, message) VALUES ('$name','$email','$phone','$date','$message')";
        $result = $conn ->query($sql);
    }
}