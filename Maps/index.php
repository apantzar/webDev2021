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
        <?php
            if(isset($_SESSION['id'])){
                echo"<link rel='stylesheet' type='text/css' href='../Menu/Menu.css'>";
            }else{
                echo"<link rel='stylesheet' type='text/css' href='../Menu/LoginMenu.css'>";
            }
        ?>
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
        <?php
    if(isset($_SESSION['id'])){//an yparxei id xristh (ara xristis sindemenos) emfanizoume thn ekdosi toy menu gia xrhsth (me dynatothta aposyndeshs kai provolhs selidas tou xristh)
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
        
    }else{//an den yparxei sindemenos xrisths emfanizoume to menu to geniko (me dinatothta syndeshs)
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

            <div class='popup' >
                <div class='popup-content'>
                <form method='POST' action = '".getLogin($conn)."'>
                    <input type='text' placeholder='Username' name='username'>
                    <input type='password' placeholder='Password' name='password'>
                    <!--<a href='#' class ='nav-links nav-links-Button'>Sign-In</a>-->
                    <button class='signBtnStyle' id='Sign-In' type='Submit' name='loginSubmit'>Sign-In</button>
                    </form>
                    <button id='closeBtn' class='close' >x</button>";
                    if(isset($_GET['error'])){//an yparxei error
                        if($_GET['error']=='loginfailed'){//elexxoume ton typo toy sfalmatos me vash ton kodiko kai emfanizoume to katalhlo mynhma
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 73px;'>*Wrong Credentials!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        elseif($_GET['error']=='FillAllBoxesL'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 73px;'>*Fill All Boxes!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px;  font-family: 'Comfortaa',sans-serif;'>You don't have an account?</h1>";
                        }
                        else{// an den einai kapoio apo ta parapanw lathoi den emfanizoume kapoio mynhma lathous alla mono to klasiko erwtima gia to singup
                            echo"<h1 style='font-size: 10px; margin-top: 100px; padding-left:155px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </h1>";
                        }
                    }
                    else{//an den yparxei katholou minima lathous pali emfanizoyume mono to erotima gia to sign up
                        echo"<h1 style='font-size: 10px; margin-top: 100px; padding-left:155px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </h1>";
                    }
                    echo"<button class='registerBtn' id='SignUp' style='display: table-cell; vertical-align: middle; height: 10%; line-height: 2.5%; ' >Sign-Up</button>
                </div>
            </div>
            </form>

        <!--THIS IS FOR SIGN UP-->

                <div class='popupSignUp'>
                <div class='Sign-Up-content'>
                <form method='POST' action = '".setUser($conn)."'>
                    <input type='email' placeholder='Email' name='email' >
                    <input type='text'  placeholder='Username' name='username'>
                    <input type='password'  placeholder='Password' name='password'>
                    <button class='registerBtn' id='SignUp'  type='Submit' name='signupSubmit' style='top: 190px; color: #fff; background: #0074a9; border: 1px solid #fff;;'>Sign-Up</button>
                    </form>
                    <button id='close' class='close' >x</button>";
                    if(isset($_GET['error'])){// akribos i idia logikh me to log in
                        if($_GET['error']=='FillAllBoxes'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 60px;'>*Fill All Boxes!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        elseif($_GET['error']=='EmailTaken'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 60px;'>*Email Already Registered!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        elseif($_GET['error']=='UsernameTaken'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 60px;'>*This Username Exists!</h1>";
                            echo"<h1 style='font-size: 10px; margin-top: 10px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                        else{
                            echo"<h1 style='font-size: 10px; margin-top: 80px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
                        }
                    }
                    else{
                        echo"<h1 style='font-size: 10px; margin-top: 80px; padding-left:155px; font-family: 'Comfortaa',sans-serif;'>You already have an account?</h1>";
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
        if(isset($_GET['error'])){//an kapoio apo ta lathoi pou emfanisthkan einai kapoio pou proirthe apo to signup tote emfanizoume to popup meta to refresh (wste na emfanistei to mynhma latous apefthias)
            if($_GET['error']=='FillAllBoxes' || $_GET['error']=='EmailTaken' ||$_GET['error']=='UsernameTaken' ){
                echo"<script>
                        document.querySelector('.popupSignUp').style.display = 'flex';
                        document.querySelector('.popup').style.display = 'none';
                    </script>"; 

            }else{//an kapoio apo ta lathoi pou emfanisthkan einai kapoio pou proirthe apo to signin tote emfanizoume to popup meta to refresh (wste na emfanistei to mynhma latous apefthias)
                echo"<script>
                    document.querySelector('.popup').style.display = 'flex';
                    console.log('I am in') //TESTING
                </script>";
            } 
        }
    ?>

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
                        <a href="../Information" class="info-foot"><img src="../Images/if.png" ></a>
                        <a href="../MarineLife" class="map-foot"><img src="../Images/mar.png" ></a>
                        <a href="../Contact" class="info-foot"><img src="../Images/em.png" ></a>
                        <a href="https://www.facebook.com/Sea-The-Pollution-105774651733564"target="_blank" class="map-foot"><img src="../Images/fa.png" ></a>
                        <a href="https://instagram.com/sea_the_pollution?utm_medium=copy_link" target="_blank" class="info-foot"><img src="../Images/in.png" ></a>
                    </div>
                </div>
                <div class="footer-bottom"style="height: 5pc; background: #000; width: 100wv;padding: 20px 0;">
                    <p style="text-align: center;">Copyright &copy;2021 SeaThePollution. Designed By <span> We-Love-Writing-Linux-Drivers-All-The-Time </p>
                </div>
        </footer>
        
        
        </main>
        
    </body>

</html>



