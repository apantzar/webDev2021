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
    while($row = mysqli_fetch_assoc($result)){
            echo"<div class='commentBox'><p>'";
            echo $row['UserID'];
            echo "<br>";
            echo $row['Date'];
            echo "<br>";
            echo $row['message'];
        echo "</p></div>";
    }
    
    
}

function getLogin($conn){
    if(isset($_POST['loginSubmit'])){
        $UserID = $_POST['UserID'];
        $pass = $_POST['pass']

        $sql = "SELECT * FROM user WHERE UserID = '$UserID' AND pass = '$pass'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $row['id']
                header("Location: index.php? loginsuccess");
                exit();
            }

        } else{
            header("Location: index.php? loginfailed");
            exit();
        }
    }
    
}

function userLogoff(){

}