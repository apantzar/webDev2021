<?php
    date_default_timezone_set('Europe/Athens');
    include'dbh.inc.php';
    include'comments.inc.php';
    session_start();
    
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<?php
    echo"<form method='POST' action = '".getLogin($conn)."'>
            <input type='text' name='username'>
            <input type='password' name = 'password'>
            <button type='submit' name='loginSubmit'>Login</button>
        </form>";

    echo"<form method='POST' action = '".userLogoff()."'>
        <button type='submit' name='logoffSubmit'>Logout</button>
    </form>";

    if(isset($_SESSION['id'])){
        echo" you are in!";
    }
    else{
        echo "you are not in";
    }
    ?>
    <br><br>

   <?php 
   echo "<form method ='POST' action= '".setComment($conn)."'>
    <input type='hidden' name='UserID' value='Anonymous'>
    <input type='hidden' name='Date' value='".date('Y-m-d H:i:s')."'>
    <textarea name='message'></textarea>
    <button name='commentSubmit' type = 'Submit'>Comment</button>
    </form>";
    getComment($conn);

    ?>


</body>
</html>