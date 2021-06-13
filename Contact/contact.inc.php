<?php

function setMessage($conn){ // Eisagogi mhnhmatos xrhsth sthn vash dedomenon gia eksetash.
    if(isset($_POST['messageSubmit'])){
        $name = $_POST['name'];//arxikopoihsh metavlitwn
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $message = $_POST['message'];

        if(empty($name) || empty($email) || empty($phone) || empty($date) ||empty($message) )//elegxos gia tixon kena pedia sthn forma
        {
            header('location:index.php?error=FillAllBoxesC');//an yparxoun kena simeia epistrefei sigkekrimeno error
        }
        else //an den ypaxoun kena
        {
            //eisagogh tou minimatos sthn vash dedomenwn 
            $sql = "INSERT INTO contact (name, email, phone,date, message) VALUES ('$name','$email','$phone','$date','$message')";
            $result = $conn ->query($sql);
            header('location:index.php?ThanksForContactingUs');
        }
    }
}
?>