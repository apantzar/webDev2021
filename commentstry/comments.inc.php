<?php


function setComment($conn){
    if(isset($_POST['commentSubmit'])){
        $UserID = $_POST['UserID'];
        $Date = $_POST['Date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO comments (UserID, Date, message) VALUES ('$UserID','$Date','$message')";
        $result = $conn ->query($sql);
    }
    


}