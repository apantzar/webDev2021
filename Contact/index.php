
<?php
    include 'dbm.inc.php';
    include 'contact.inc.php';
    include 'userFunctions.php';
    date_default_timezone_set('Europe/Athens');  
    ob_start();
    session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>Marine Life • Contact us</title>
	<link rel="stylesheet" type="text/css" href="try.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../Menu/Menu.css">
	<link rel="stylesheet" href="../Footer/Footer.css">
	<link rel="stylesheet" type="text/css" href="../sign.css">
    <?php
        if(isset($_SESSION['id'])){
            echo"<link rel='stylesheet' type='text/css' href='../Menu/Menu.css'>";
        }else{
            echo"<link rel='stylesheet' type='text/css' href='../Menu/LoginMenu.css'>";
        }
    ?>
    <style>
        .alert
        {
            position:relative;
            z-index: 1000;
            top:11vh;
            color:red;
            
        }
    </style>
</head>
<body>
	<header>
    <?php
    if(isset($_SESSION['id'])){
        echo"<!-- Page Navigator -->
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
                    <li><a href='../Users/' id='signBtn' class='nav-links nav-links-Button'>".getUsernameByID($conn)."</a></li>
                </ul>
            </nav>
        </div>
        <!-- ------------------------------------------------------------------------------------- -->";
        
    }else{
        echo"<!-- Page Navigator -->
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
                    <li><a href='#' id='signBtn' class='nav-links nav-links-Button'>Sign-In</a></li>
                </ul>
            </nav>
        </div>
        <!-- ------------------------------------------------------------------------------------- -->




        
        <!--This is for popup (Sign-In)----->

            <div class='popup'>
                <div class='popup-content'>
                <form method='POST' action = '".getLogin($conn)."'>
                    <input type='text' placeholder='Username' name='username' style='margin-left:95px;margin-top:-20px;'>
                    <input type='password' placeholder='Password' name='password' style='margin-top:-5px;'>
                    <!--<a href='#' class ='nav-links nav-links-Button'>Sign-In</a>-->
                    <button class='signBtnStyle' id='Sign-In' type='Submit' name='loginSubmit'>Sign-In</button>
                    </form>
                    <button id='closeBtn' class='close' >x</button>";
                    if(isset($_GET['error'])){
                        if($_GET['error']=='loginfailed'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 20px;'>*Wrong Credentials!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        elseif($_GET['error']=='FillAllBoxesL'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 20px;'>*Fill All Boxes!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px;  font-family: 'Comfortaa',sans-serif;'>You don't have an account?</h1>";
                        }
                        else{
                            echo"<h1 style='font-size: 10px; margin-top: 45px; padding-left:155px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </h1>";
                        }
                    }
                    else{
                        echo"<h1 style='font-size: 10px; margin-top: 45px; padding-left:155px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </h1>";
                    }
                    echo"<button class='registerBtn' id='SignUp' style='display: table-cell; vertical-align: middle; height: 10%; line-height: 2.5%; ' >Sign-Up</button>
                </div>
            </div>
            </form>

        <!--THIS IS FOR SIGN UP-->

                <div class='popupSignUp'>
                <div class='Sign-Up-content'>
                <form method='POST' action = '".setUser($conn)."'>
                    <input type='email' placeholder='Email' name='email' style='margin-left:95px;margin-top:-20px;'>
                    <input type='text'  placeholder='Username' name='username' style='margin-top:-5px; margin-bottom=20px' >
                    <input type='password'  placeholder='Password' name='password' style='margin-left:95px;margin-top:-5px;'>
                    <button class='registerBtn' id='SignUp'  type='Submit' name='signupSubmit' style='top: 190px; color: #fff; background: #0074a9; border: 1px solid #fff;;'>Sign-Up</button>
                    </form>
                    <button id='close' class='close' >x</button>";
                    if(isset($_GET['error'])){
                        if($_GET['error']=='FillAllBoxes'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 10px;'>*Fill All Boxes!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        elseif($_GET['error']=='EmailTaken'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 10px;'>*Email Already Registered!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        elseif($_GET['error']=='UsernameTaken'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 10px;'>*This Username Exists!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        else{
                            echo"<h1 style='font-size: 10px; margin-top: 30px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                    }
                    else{
                        echo"<h1 style='font-size: 10px; margin-top: 30px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                    }
                    
                    echo"<button class='signBtnStyle' id='signBtn2' style='display: table-cell; background: #fff;border: 1px solid #0074a9; vertical-align: middle;color:#0074a9 ; height: 10%; top: 270px; line-height: 2.5%; '>Sign-In</button>
                    
                </div>
            </div>

        <script>

            //Sign in
            document.getElementById('signBtn').addEventListener('click', function(){
                document.querySelector('.popup').style.display = 'flex';
                console.log('I am in') //TESTING
            })


            
        //sign-In inside 
        document.getElementById('signBtn2').addEventListener('click', function(){
            document.querySelector('.popup').style.display = 'flex';
            document.querySelector('.popupSignUp').style.display = 'none';
            console.log('I am in') //TESTING


        })


            //Sign up
            document.getElementById('SignUp').addEventListener('click', function(){
                document.querySelector('.popupSignUp').style.display = 'flex';
                document.querySelector('.popup').style.display = 'none';
            })

            //Close button
            
            document.querySelector('.close').addEventListener('click', function(){
                document.querySelector('.popup').style.display = 'none';
                console.log('I am in') //TESTING
            })

            document.getElementById('close').addEventListener('click', function(){
                console.log('I am in') //TESTING
                document.querySelector('.popupSignUp').style.display = 'none';
                
            })

            
        </script>";
    }
    ?>
    <?php
        if(isset($_GET['error'])){
            if($_GET['error']=='FillAllBoxes' || $_GET['error']=='EmailTaken' ||$_GET['error']=='UsernameTaken' ){
                echo"<script>
                        document.querySelector('.popupSignUp').style.display = 'flex';
                        document.querySelector('.popup').style.display = 'none';
                    </script>"; 

            }
            elseif($_GET['error']=='FillAllBoxesL' || $_GET['error']=='loginfailed'){
                echo"<script>
                    document.querySelector('.popup').style.display = 'flex';
                    console.log('I am in') //TESTING
                </script>";
            }
        }
    ?>

		<!-- ----------------------------------------------------------------------- -->
		<script src="../Menu/Menu.js"></script>
	</header>
	<main>
		<!-- Buttons -->
		<div class="container">
			<div class="Buttons-Social">
				<div class="Social-Button">
                    <a href="https://www.facebook.com/Sea-The-Pollution-105774651733564" target="_blank">
					    <div class="Social-Icon"><img src="../Images/facebook-6062236.png"></div>
                        <span>Facebook</span>
                    </a>
					
				</div>
			</div>
			<div class="Buttons-Social">
				<div class="Social-Button">
                    <a href="https://instagram.com/sea_the_pollution?utm_medium=copy_link" target="_blank">
					    <div class="Social-Icon"><img src="../Images/instagram-6062238.png"></div>
                        <span>Instagram</span>
                    </a>
					
				</div>
			</div>
			<div class="Buttons-Social">
				<div class="Social-Button">
					<div class="Social-Icon"><img src="../Images/tel.png"></div>
					<span id="tel">2310 996000</span>
				</div>
			</div>
			<!-- ---------------------------------------- -->

            <?php
			
			echo"<div class='contact-box'>
					<div class='contact100-form-title' style='background-image: url(../Images/octavian-rosca-yX2V4hxo6Vs-unsplash.jpg);'>
						<span class='contact100-form-title-1'>
							Contact Us
						</span>
                        <hr>";
                        $Msg= "";
                        if($_GET['error']=="FillAllBoxesC")
                        {
                            $Msg='*Fill All Boxes';
                            echo'<div class="alert" >'.$Msg.'</div>';
        
                        }
					echo"</div>
					<form  method='POST' action = '".setMessage($conn)."'>

                        <!-- Writing -->
						<input type='text' class='field' name='name' placeholder='Your Name'>
						<input type='text' class='field' name='email' placeholder='Your Email'>
						<input type='number' class='field' name='phone' placeholder='Phone'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
						<textarea placeholder='Message' name='message' class='field'></textarea>
						<button class='btn' type='Submit' name='messageSubmit'>Send</button>
                        <!-- ----------------------------------- -->

					</form>
				</div>"
            ?>
			<div class="video-container">
				<div class="color-overlay"></div>
				<video autoplay loop muted>
					<source src="../Images/Jellyfish - 15324 (1).mp4" type="video/mp4">
				</video>
			</div>
		</div>
	</main>
	<!-- Footer -->
	<footer style="z-index: 1000; position: relative;">
        <div style="background-color: #111; padding-top: 4vh;"  class="footer-content">
            <h3 style="color: white;">SeaThePollution</h3>
            <p style="color: white;">A Site About Pollution In Oceans.</p>
            <div class="images-href">
                <a href="../" class="home-foot"><img src="../Images/ho.png" ></a>
                <a href="../Maps/" class="map-foot"><img src="../Images/ma.png" ></a>
                <a href="../" class="info-foot"><img src="../Images/if.png" ></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p style="color: white;">Copyright &copy;2021 SeaThePollution. Designed By <span> We-Love-Writing-Linux-Drivers-All-The-Time </p>
        </div>

    </footer>
	<!-- ------------------------------------------------------------------- -->
</body>
</html>