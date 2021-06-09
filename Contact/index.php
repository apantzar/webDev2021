<?php
    include 'dbm.inc.php';
    include 'contact.inc.php';
    date_default_timezone_set('Europe/Athens');


?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="try.css">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../Menu/Menu.css">
	<link rel="stylesheet" href="../Footer/Footer.css">
	<link rel="stylesheet" type="text/css" href="../sign.css">
</head>
<body>
	<header>
		<!-- Page Navigator -->
		<div class="nav-container">
            <nav class="navbar">
                <a href="../"><h1 id="navbar-logo">SeaThePollution</h1></a>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-menu">
                    <li><a href="../index.php" class="nav-links">Home</a></li>
                    <li><a href="../Maps/" class="nav-links">Map</a></li>
                    <li><a href="../Information/" class="nav-links">Information</a></li>
					<li><a href="../MarineLife/" class="nav-links">Marine Life</a></li>
                    <li><a href="../Contact/" class="nav-links">Contact Us</a></li>
                    <li><a href="#" id="signBtn"class="nav-links nav-links-Button">Sign-In</a></li>
                </ul>
            </nav>
        </div>

		              
       <!--This is for popup (Sign-In)-->

       <div class="popup">
        <div class="popup-content">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <!--<a href="#" class ="nav-links nav-links-Button">Sign-In</a>-->
            <button class="signBtnStyle" id="Sign-In">Sign-In</button>
            <button id="closeBtn" class="close" >x</button>
            <button class="registerBtn" id="SignUp" style="display: table-cell; vertical-align: middle; height: 10%; line-height: 2.5%; ">Sign-Up</button>
            <p style="word-spacing: 1px;font-size: 10px; font-family: 'Comfortaa',sans-serif; margin-top: 100px; text-align: center; color: black;">You don't have an account? </p>
        </div>
    </div>

     <!--THIS IS FOR SIGN UP-->
     <div class="popupSignUp">
        <div class="Sign-Up-content">
            <input type="email" placeholder="Email">
            <input type="text" placeholder="Username">
            <input type="password" placeholder="Password">
            <button id="close" class="close" >x</button>
            <p style="word-spacing: 1px;font-size: 10px; font-family: 'Comfortaa',sans-serif; margin-top: 80px; text-align: center; color: black;">You already have an account?</p>
            <button class="signBtnStyle" id="signBtn2" style="display: table-cell; background: #fff;border: 1px solid #0074a9; vertical-align: middle;color:#0074a9 ; height: 10%; top: 270px; line-height: 2.5%; ">Sign-In</button>
            <button class="registerBtn" id="SignUp" style="top: 190px; color: #fff; background: #0074a9; border: 1px solid #fff;;">Sign-Up</button>
        </div>
    </div>

    <script>
        //Sign in
        document.getElementById("signBtn").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popupSignUp").style.display = "none";
            console.log("I am in") //TESTING


        })


        //sign-In inside 
        document.getElementById("signBtn2").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popupSignUp").style.display = "none";
            console.log("I am in") //TESTING


        })

         //Sign up
         document.getElementById("SignUp").addEventListener("click", function(){
                document.querySelector(".popupSignUp").style.display = "flex";
                document.querySelector(".popup").style.display = "none";
            })

        //Close button

        document.querySelector(".close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
            console.log("I am in") //TESTING


        })

        document.getElementById("close").addEventListener("click", function(){
                console.log("I am in") //TESTING
                document.querySelector(".popupSignUp").style.display = "none";
                
            })

        
    </script>

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
					</div>
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