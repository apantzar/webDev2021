<?php

function getLogin($conn){
    if(isset($_POST['loginSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn -> query($sql);
        if(mysqli_num_rows($result)==1){
            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $row['id'];
                header("Location: ./index.php? loginsuccess");
                exit();
            }

        } else{
            header("Location: ./index.php? loginfailed");
            exit();
        }
    }
    
}

function userLogoff(){
    if(isset($_POST['logoffSubmit'])){
        session_start();
        session_destroy();
        header("Location: index.php");
        exit();

    }
}

function setUser($conn){
    if(isset($_POST['signupSubmit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        

        
        $sql = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
        
        $result = $conn ->query($sql);
    }
}


?>