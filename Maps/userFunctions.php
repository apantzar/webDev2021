<?php

function isUsernameAvailable($conn,$username){
    $sql="SELECT username FROM users WHERE username LIKE '$username'";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    $str=$row['username'];
    if (empty($str)){
        return true;
    }
    return false;
}
function isEmailAvailable($conn,$email){
    $sql="SELECT email FROM users WHERE email LIKE '$email'";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    $str=$row['email'];
    if (empty($str)){
        return true;
    }
    return false;
}
function getLogin($conn){
    if(isset($_POST['loginSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){
            header("Location: ./index.php?error=FillAllBoxesL");
            exit();

        }

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn -> query($sql);
        if(mysqli_num_rows($result)==1){
            if($row = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $row['id'];
                header("Location: ./index.php? loginsuccess");
                exit();
            }

        } else{
            header("Location: ./index.php?error=loginfailed");
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

        if(empty($email) || empty($email) || empty($email)){
            header("Location: ./index.php?error=FillAllBoxes");
            exit();
        }

        if(isUsernameAvailable($conn,$username)){
            if(isEmailAvailable($conn,$email)){
                $sql = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
        
                $result = $conn ->query($sql);
                header("Location: ./index.php? UserRegister");
                exit();
            }
            else{
                header("Location: ./index.php?error=EmailTaken");
                exit();
            }

        }else{
            header("Location: ./index.php?error=UsernameTaken");
            exit();
        }
    }
}
function getUsernameByID($conn){
    $number=$_SESSION['id'];
    $sql= "SELECT username FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['username'];
}


?>