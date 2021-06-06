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

function getComment($conn){
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn,$sql);
    while($row =$result-> fetch_assoc()){
            echo"<div class='commentBox'><p>'";
            echo $row['UserID'];
            echo "<br>";
            echo $row['Date'];
            echo "<br>";
            echo $row['message'];
        echo "</p></div>";
    }
    
    
}