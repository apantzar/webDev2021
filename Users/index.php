<?php
        date_default_timezone_set('Europe/Athens');
        include'dbu.inc.php';
        include'userFunctions.php';
        session_start();
        ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo getUsernameByID($conn); ?>
    </title>

    <link rel='stylesheet' type='text/css' href='menu.css'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="../Footer/Footer.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <header>

        <div class='nav-container'>
            <nav class='navbar'>
                <a href='../'><h1 id='navbar-logo'>SeaThePollution</h1></a>
                <div class='menu-toggle' id='mobile-menu'>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                </div>
                <ul class='nav-menu'>
                    <li><a href='../' class='nav-links'>Home</a></li>
                    <li><a href='../Maps' class='nav-links'>Map</a></li>
                    <li><a href='../Information' class='nav-links'>Information</a></li>
                    <li><a href='../MarineLife/' class='nav-links'>Marine Life</a></li>
                    <li><a href='../Contact/' class='nav-links'>Contact Us</a></li>
                    <li>
                    <?php 
                        echo"<form method='POST' action = '".userLogoff($conn)."'>
                        <button id='signBtn' name='logoffSubmit' class='nav-links nav-links-Button'>Log-Out</button>";
                    ?>
                    </li>
                </ul>
            </nav>
        </div>
        <script src="../Menu/Menu.js"></script>
    </header>
    <div class="box">
        <div class="card">
            <a href='./changeemail.php'class="change-email">email</a><br>
            <a href='./changeusername.php'class="change-username">username</a><br>
            <a href='./changepassword.php'class="change-password">password</a><br>
        </div>
    </div>