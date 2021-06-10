<?php

    include 'dbm.inc.php';
    include 'userFunctions.php';
    session_start();
    ob_start();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 

    <header>
        

        <meta http-equiv="Content-Security-Policy"   content="frame-src https://docs.google.com;">
        <link rel="stylesheet" type="text/css" href="../Menu/Menu.css">
        <link rel="stylesheet" type="text/css" href="../Footer/Footer.css">
        <link rel="stylesheet" type="text/css" href="../sign.css">

        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" type="text/css" href="Maps.css">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    </header>


    <!--MAP POSITION STYLE-->
    <style>
        
        /*Map position  */
        #map {position: absolute; top:80px; bottom: 0%; left: 0%; right: 0%; z-index: -1;} 

        @media only screen and (max-width:500px) {
            /* For mobile phones: */
           
            #map{position:absolute; top:80px; bottom: 0%; left: 0%; right: 0% ;z-index :-1; }
            }




    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maps • SeaThePollution</title>
</head>
    <body>


        <header>
            
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
                        <li><a href="../" class="nav-links">Home</a></li>
                        <li><a href="../Maps" class="nav-links">Map</a></li>
                        <li><a href="../Information" class="nav-links">Information</a></li>
                        <li><a href="../MarineLife/" class="nav-links">Marine Life</a></li>
                        <li><a href="../Contact/" class="nav-links">Contact Us</a></li>
                        <li><a href="#" id="signBtn" class="nav-links nav-links-Button">Sign-In</a></li>
                    </ul>
                </nav>
            </div>


           

                 
       <!--This is for popup (Sign-In)-->

       <?php 
            echo"
            <div class='popup' >
                <div class='popup-content'>
                <form method='POST' action = '".getLogin($conn)."'>
                    <input type='text' placeholder='Username' name='username'>
                    <input type='password' placeholder='Password' name='password'>
                    <!--<a href='#' class ='nav-links nav-links-Button'>Sign-In</a>-->
                    <button class='signBtnStyle' id='Sign-In' type='Submit' name='loginSubmit'>Sign-In</button>
                    </form>
                    <button id='closeBtn' class='close' >x</button>
                    <button class='registerBtn' id='SignUp' style='display: table-cell; vertical-align: middle; height: 10%; line-height: 2.5%; ' >Sign-Up</button>
                    <p style='font-size: 10px; margin-top: 100px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </p>
                </div>
            </div>
            </form>";
            
        ?>
        

        <!--THIS IS FOR SIGN UP-->
        <?php 
            echo"
                <div class='popupSignUp'>
                <div class='Sign-Up-content'>
                <form method='POST' action = '".setUser($conn)."'>
                    <input type='email' placeholder='Email' name='email' >
                    <input type='text'  placeholder='Username' name='username'>
                    <input type='password'  placeholder='Password' name='password'>
                    <button class='registerBtn' id='SignUp'  type='Submit' name='signupSubmit' style='top: 190px; color: #fff; background: #0074a9; border: 1px solid #fff;;'>Sign-Up</button>
                    </form>
                    <button id='close' class='close' >x</button>
                    <p style='word-spacing: 1px;font-size: 10px; font-family: 'Comfortaa',sans-serif; margin-top: 80px; text-align: center; color: black;'>You already have an account?</p>
                    <button class='signBtnStyle' id='signBtn2' style='display: table-cell; background: #fff;border: 1px solid #0074a9; vertical-align: middle;color:#0074a9 ; height: 10%; top: 270px; line-height: 2.5%; '>Sign-In</button>
                    
                </div>
            </div>";
        ?>

    <script>
        //Sign in
        document.getElementById("signBtn").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popupSignUp").style.display = "none";
           // console.log("I am in") //TESTING
        })


        //sign-In inside 
        document.getElementById("signBtn2").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
            document.querySelector(".popupSignUp").style.display = "none";
           // console.log("I am in") //TESTING
        })

         //Sign up
         document.getElementById("SignUp").addEventListener("click", function(){
                document.querySelector(".popupSignUp").style.display = "flex";
                document.querySelector(".popup").style.display = "none";
            })

        //Close button

        document.querySelector(".close").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "none";
        //    console.log("I am in") //TESTING
        })

        document.getElementById("close").addEventListener("click", function(){
                console.log("I am in") //TESTING
                document.querySelector(".popupSignUp").style.display = "none";            
            })

        
    </script>


        <script src="../Menu/Menu.js"></script> <!--Menu js loaded-->

        </header>




        <main>

            <div> <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script></div> 


            <div class=".zoom" id="map"></div>

            <!--Loading js files-->
            <script src="marker.js"></script>
            <script src="parser.js"></script>


            <!--Frame with text for each element-->
            <form action="text.html" >
            
            <div>  <iframe name = "theFrame" id="htmlPath"  width="100%" height="50%" src=""></iframe> </div>

            </form>

            <!--Footer-->
            <footer  class="footer2" id="footer" style="position:absolute; top:100%;">
                <div class="footer-content">
                    <h3>SeaThePollution</h3>
                    <p style="word-spacing: 1px;">A Site About Pollution In Oceans.</p>
                    <div class="images-href">
                        <a href="../" class="home-foot"> <img src="../Images/ho.png" > </a>
                        <a href="../Maps/" class="map-foot"> <img src="../Images/ma.png" > </a>
                        <a href="../Information/" class="info-foot"> <img src="../Images/if.png" > </a>
                    </div>
                </div>
                <div class="footer-bottom"style="height: 5pc; background: #000; width: 100wv;padding: 20px 0;">
                    <p style="text-align: center;">Copyright &copy;2021 SeaThePollution. Designed By <span> We-Love-Writing-Linux-Drivers-All-The-Time </p>
                </div>
        </footer>
        
        
        </main>
        
    </body>

</html>



