<?php

function isUsernameAvailable($conn,$username){// synarthsh anazhthshs username sthn vash dedomenwn (xrisi sql gia anazhthsh)
    $sql="SELECT username FROM users WHERE username LIKE '$username'";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    $str=$row['username'];
    if (empty($str)){
        return true;//boolean return gia apotelsma anazhthshs
    }
    return false;
}
function isEmailAvailable($conn,$email){//idia logikh me thn synarthsh gia to username apla gia to email tou xristi
    $sql="SELECT email FROM users WHERE email LIKE '$email'";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    $str=$row['email'];
    if (empty($str)){
        return true;
    }
    return false;
}
function getLogin($conn){//synarthsh epiteyksis syndeshs toy xrhsth sto site
    if(isset($_POST['loginSubmit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($username) || empty($password)){//elegxos tyxwn kenon pediwn kai epistrofh sxetikou minimatos
            header("Location: ./index.php?error=FillAllBoxesL");
            exit();

        }

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn -> query($sql);
        if(mysqli_num_rows($result)==1){//elegxos apotelesmatos
            if($row = mysqli_fetch_assoc($result)){//apotelesma (pinakas xristh) sthn metavlith row
                $_SESSION['id'] = $row['id'];//anathetoume to id tou xristh sto session ths efarmoghs 
                header("Location: ./index.php? loginsuccess");//epistrofh sxetikou mynhmatos
                exit();
            }

        } else{//epistrofh mynimatos an den ginei to authentication
            header("Location: ./index.php?error=loginfailed");
            exit();
        }
    }
    
}
function userLogoff(){//sunarthsh aposyndeshs
    if(isset($_POST['logoffSubmit'])){
        session_start();//gia par endexomeno ksekinaei ksana to session
        session_destroy();//kai katastrefete
        header("Location: index.php");//kai adeiazoume to header
        exit();

    }
}

function setUser($conn){//sinarthsh eggrafhs xristh
    if(isset($_POST['signupSubmit'])){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(empty($email) || empty($email) || empty($email)){// elegxos kenwn shmeiwn kai epistrofh sxetikou minimatos
            header("Location: ./index.php?error=FillAllBoxes");
            exit();
        }

        if(isUsernameAvailable($conn,$username)){//elegxos me sinartish an yparxei to username
            if(isEmailAvailable($conn,$email)){//an den yparxei to username elexoume an exei eggrafei to email
                $sql = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
        
                $result = $conn ->query($sql);
                header("Location: ./index.php? UserRegister");//se periptosh pou einai username kai email diathesima kataxoroume ton xristh
                exit();
            }
            else{
                header("Location: ./index.php?error=EmailTaken");//mynhma an yparxei kataxorimeno email
                exit();
            }

        }else{
            header("Location: ./index.php?error=UsernameTaken");//minima gia thn mh diathesimothta tou username
            exit();
        }
    }
}
function getUsernameByID($conn){//epistrofh tou username ths parousas sindesis
    $number=$_SESSION['id'];
    $sql= "SELECT username FROM users WHERE id= $number";
    $result = $conn ->query($sql);
    $row = mysqli_fetch_assoc($result);
    return $row['username'];
}


?>