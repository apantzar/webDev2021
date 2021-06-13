<?php

function getLogin($conn){
    echo '<script>console.log("I am in getLogin");</script>';
    $admin='admin';
    if(isset($_POST['loginSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
       

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn -> query($sql);
        if(mysqli_num_rows($result)==1){
            if($row = mysqli_fetch_assoc($result)){
                //session_start();//afto kanonika sthn arxh tou site gia na mhn ginete logg off
                if($row["userType"]==$admin){
                    $_SESSION["username"]=$username;
                    $_SESSION['status'] = $admin;
                    header("location: ./adminPage.php");
                }else{
                    $_SESSION['id'] = $row['id'];
                   header("Location: ./index.php? loginsuccess");
                 exit(); 
                }
               
            }

        } else{
            header("Location: ./index.php? loginfailed");
            exit();
        }
    }
    
}


function iAmTheAdmin(){

    echo '<script>console.log("I am in iAmTheAdmin");</script>';

    if($_SERVER["REQUEST_METHOD"]=="POST"){


        $username = $_POST["username"];
        $password = $_POST["password"];


        $sql_query = "select * from login where username= '".$username."' AND password= '".$password."'";
        $result = mysqli_query($data, $sql_query);
        $row=mysqli_fetch_array($result);

        if($row["userType"]=="admin"){
            $_SESSION["username"]=$username;
            $_SESSION['status'] = true;
            
            header("location:adminPage.php");
        }else{
            echo "My admin knows the password :)";
        }


    }
}

function userLogoff(){
    $byeAdmin="bye";
    if(isset($_POST['logoffSubmit'])){
        session_start();
        session_destroy();
        header("Location: ../index.php");
        $_SESSION['status'] = $byeAdmin;
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
function getUsernameByID($conn){
    $number=$_SESSION['id'];
    $sql= "SELECT username FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['username'];
}


function getUserRoleByID($conn){
    $number=$_SESSION['id'];
    $sql= "SELECT userType FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['userType'];
}
function getUserEmailByID($conn){
    $number=$_SESSION['id'];
    $sql= "SELECT email FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['email'];
}
function getUserPassdispByID($conn){
    $number=$_SESSION['id'];
    $sql= "SELECT password FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    $string=$row['password'];
    return "$string[0]*****$string[-1]";
}
function getUserPassByID($conn){
    $number=$_SESSION['id'];
    $sql= "SELECT password FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    $string=$row['password'];
    return $string;
}

function setEmail($conn){
    if(isset($_POST['setEmail'])){
        $email = $_POST['email'];
        if(empty($email)){
            header("Location: index.php");
            exit();
        }
        if(isEmailAvailable($conn,$email)){
            $id=$_SESSION['id'];
            $username=getUsernameByID($conn);
            $pass=getUserPassByID($conn);

            
            $sql = "DELETE FROM users WHERE id = $id";
            $result = $conn ->query($sql);
            $sql = "INSERT INTO users (id,username,password,email) VALUES ('$id','$username','$pass','$email')";
            $result = $conn ->query($sql);
            header("Location: index.php");
        }else{
            header("Location: ./changee.php?error=EmailExists ");
        }

    }
}

function setUsername($conn){
    if(isset($_POST['setUsername'])){
        $username = $_POST['username'];
        if(empty($username)){
            header("Location: index.php");
            exit();
        }
        if(isUsernameAvailable($conn,$username)){
            $id=$_SESSION['id'];
            $email=getUserEmailByID($conn);
            $pass=getUserPassByID($conn);

            
            $sql = "DELETE FROM users WHERE id = $id";
            $result = $conn ->query($sql);
            $sql = "INSERT INTO users (id,username,password,email) VALUES ('$id','$username','$pass','$email')";
            $result = $conn ->query($sql);
            header("Location: index.php");
        }
        else{
            header("Location: ./changeu.php?error=UsernameExists ");
        }

    }
}

function setPass($conn){
    if(isset($_POST['password'])){
        $pass = $_POST['password'];
        if(empty($pass)){
            header("Location: index.php");
            exit();
        }
        $id=$_SESSION['id'];
        $username=getUsernameByID($conn);
        $email=getUserEmailByID($conn);

        
        $sql = "DELETE FROM users WHERE id = $id";
        $result = $conn ->query($sql);
        $sql = "INSERT INTO users (id,username,password,email) VALUES ('$id','$username','$pass','$email')";
        $result = $conn ->query($sql);
        header("Location: index.php");
    }
}

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
?>