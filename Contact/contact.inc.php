<?php

function setMessage($conn){
    if(isset($_POST['messageSubmit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        if(empty($name) || empty($email) || empty($phone) || empty($date) ||empty($message) )
        {
            header('location:index.php?error=FillAllBoxesC');
        }
        else
        {

            $sql = "INSERT INTO contact (name, email, phone,date, message) VALUES ('$name','$email','$phone','$date','$message')";
            $result = $conn ->query($sql);
            header('location:index.php?ThanksForContactingUs');
        }
    }
}