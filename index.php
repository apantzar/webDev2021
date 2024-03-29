<?php 

    $byeAdmin = 'bye';

    $_SESSION['status'] = $byeAdmin;
    define('adminAccess', TRUE);
    $host="localhost";
    $user="root";
    $password="";
    $db="users";

   
    session_start();
    ob_start();


    $conn=mysqli_connect($host,$user, $password,$db);

    if($conn===false){
       die("connection error    ".mysqli_connect_error());  //This will change to abord
    }

    include 'userFunctions.php';




?>


<!doctype html>

<style>


    <?php include './Menu/Menu.css'; ?>
    <?php include 'sign.css'; ?>
    <?php include 'Footer.css'; ?>
    <?php include './WebDev2021/Images'; ?>

</style>
<html lang="en">
<?php
if(isset($_SESSION['id'])){
    echo"<link rel='stylesheet' type='text/css' href='../Menu/Menu.css'>";
}else{
    echo"<link rel='stylesheet' type='text/css' href='../Menu/LoginMenu.css'>";
}
?>
 <link rel="stylesheet" type="text/css" href="../sign.css">
<head>



    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeaThePollution</title>
  
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="Footer/Footer.css">
</head>
<body>

    <header>
    <?php
    if(isset($_SESSION['id'])){//an yparxei id xristh (ara xristis sindemenos) emfanizoume thn ekdosi toy menu gia xrhsth (me dynatothta aposyndeshs kai provolhs selidas tou xristh)
        echo"<!-- Page Navigator -->
        <div class='nav-container'>
            <nav class='navbar'>
                <a href='./index.php'><h1 id='navbar-logo'>SeaThePollution</h1></a>
                <div class='menu-toggle' id='mobile-menu'>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                </div>
                <ul class='nav-menu'>
                    <li><a href='./index.php' class='nav-links'>Home</a></li>
                    <li><a href='./Maps' class='nav-links'>Map</a></li>
                    <li><a href='./Information' class='nav-links'>Information</a></li>
                    <li><a href='./MarineLife/' class='nav-links'>Marine Life</a></li>
                    <li><a href='./Contact/' class='nav-links'>Contact Us</a></li>
                    <li><a href='./Users/' id='signBtn' class='nav-links nav-links-Button'>".getUsernameByID($conn)."</a></li>
                </ul>
            </nav>
        </div>
        <!-- ------------------------------------------------------------------------------------- -->";
        
    }else{//an den yparxei sindemenos xrisths emfanizoume to menu to geniko (me dinatothta syndeshs)
        echo"<!-- Page Navigator -->
        <div class='nav-container'>
            <nav class='navbar'>
                <a href='./index.php'><h1 id='navbar-logo'>SeaThePollution</h1></a>
                <div class='menu-toggle' id='mobile-menu'>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                    <span class='bar'></span>
                </div>
                <ul class='nav-menu'>
                    <li><a href='./index.php' class='nav-links'>Home</a></li>
                    <li><a href='./Maps' class='nav-links'>Map</a></li>
                    <li><a href='./Information' class='nav-links'>Information</a></li>
                    <li><a href='./MarineLife/' class='nav-links'>Marine Life</a></li>
                    <li><a href='./Contact/' class='nav-links'>Contact Us</a></li>
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
                            echo"<p style='font-size: 10px; margin-top: 10px;  font-family: 'Comfortaa',sans-serif;'>You don't have an account?</p>";
                        }
                        if($_GET['error']=='FillAllBoxesL'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 73px;'>*Fill All Boxes!</h1>";
                            echo"<p style='font-size: 10px; margin-top: 10px;  font-family: 'Comfortaa',sans-serif;'>You don't have an account?</p>";
                        }
                        else{// an den einai kapoio apo ta parapanw lathoi den emfanizoume kapoio mynhma lathous alla mono to klasiko erwtima gia to singup
                            echo"<p style='font-size: 10px; margin-top: 100px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </p>";
                        }
                    }
                    else{//an den yparxei katholou minima lathous pali emfanizoyume mono to erotima gia to sign up
                        echo"<p style='font-size: 10px; margin-top: 100px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </p>";
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
                            echo"<p style='font-size: 10px; margin-top: 10px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</p>";
                        }
                        elseif($_GET['error']=='EmailTaken'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 60px;'>*Email Already Registered!</h1>";
                            echo"<p style='font-size: 10px; margin-top: 10px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</p>";
                        }
                        elseif($_GET['error']=='UsernameTaken'){
                            echo"<h1 style='color:red;font-size:12px;possition:relative;text-align:center;margin-top: 60px;'>*Try another username!</h1>";
                            echo"<p style='font-size: 10px; margin-top: 10px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</p>";
                        }
                        else{
                             echo"<p style='font-size: 10px; margin-top: 80px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</p>";
                        }
                    }
                    else{
                        echo"<p style='font-size: 10px; margin-top: 80px;  font-family: 'Comfortaa',sans-serif;'>You already have an account?</p>";
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
    


    <script src="Menu/Menu.js"></script>
    </header>
    <main>

        <!-- Image Movement at the Top of page -->
        <section class="mainpage">
            <img src="./Images/DrySand.png" alt="Dry Sand" id="DrySand">
            <img src="./Images/WetSand.png" alt="Sand" id="Sand">
            <img src="./Images/SeaW.png" alt="Sea" id="Sea">
            <h2 id="text1">Sea</h2> 
            <h2 id="text2">The</h2>   
            <h2 id="text3">Pollution</h2>              
        </section>
        <script type ="text/javascript">
            let drysand = document.getElementById("DrySand");
            let sand = document.getElementById("Sand");
            let sea = document.getElementById("Sea");
            let Text1 = document.getElementById("text1");
            let Text2 = document.getElementById("text2");
            let Text3 = document.getElementById("text3");

            window.addEventListener('scroll',function(){
                var value = window.scrollY;

                drysand.style.top = value * 0.4 +'px';
                sand.style.top = value * 0.40 +'px'
                Text1.style.right = value * 0.5 +'px'
                Text3.style.left = value * 0.5 +'px'
                Text1.style.top = value * 0.4 +'px'
                Text2.style.top = value * 0.4 +'px'
                Text3.style.top = value * 0.4 +'px'
            })
        </script>
        <!-- ------------------------------------------------- -->

        <section class="homepage">
            <article class="artcl">
                <header class="FirstHeader">
                    <h2 class="centertitle">Ocean</h2>
                    <h2 class="centertitle">Ocean</h2>
                </header>
                <div class="container-ocean-up">
                    <img src="./Images/Untitled-6.png" alt="Hand underwater" id="imageoceanup">
                    <div class="text-ocean-up">
                        <p id="firstParagraph">
                            <br>The ocean is a huge body of saltwater that covers about 71 percent of the Earth’s surface. The planet has one global ocean, though oceanographers and the nations of the world have divided it into distinct geographic regions: the Pacific, Atlantic, Indian, and Arctic oceans. In recent years, some oceanographers have determined that the seas around Antarctica deserve their own designation: the Southern Ocean.

                            An estimated 97 percent of the world’s water is found in the ocean. Because of this, the ocean has considerable impact on weather, temperature, and the food supply of humans and other organisms. Despite its size and impact on the lives of every organism on Earth, the ocean remains a mystery. More than 80 percent of the ocean has never been mapped, explored, or even seen by humans. A far greater percentage of the surfaces of the moon and the planet Mars have been mapped and studied than our own ocean floor has.It is unknown how many different species call the ocean their home. With many marine ecosystems suffering from rising sea temperatures, pollution, and other problems, some oceanographers believe the number of species is dropping. Still, there may be many positive surprises awaiting oceanographers in the years ahead. It could be that more than 90 percent of the ocean’s species are still undiscovered, with some scientists estimating that there are anywhere between a few hundred thousand to a few million more to be discovered. Currently, scientists know of around 226,000 ocean species.<br><br>
                            Wrecked ships pollute the ocean through the release of oil, fuel, acidic components, asbestos, plastic, and radioactive materials, some of these are based on ship cargo contents. Some materials aboard sunken ships such as stainless steel or wood do not pollute the ocean.Of course, all pollution should be addressed. But it’s common to hear of many sunken ships …or “shipwrecks” occurring.From the many ships sunk during the second world war, to many more that have happened since. In fact, often ships these days are intentionally sunk too. Many ships are sunk intentionally simply to provide for “great diving spots”. Because divers enjoy diving into and around sunken ships! However, aside from human enjoyment at the cost of the planet, shipwrecks and sunken ships are a great potential pollution source.
                        </p>
                    </div>
                </div>

                <!-- Button Leading to Maps -->
                <div style="text-align: center; padding-bottom: 70px;">
                    <a href="././Maps/" class="learnmore-button">Maps</a>
                </div>
                <!-- ---------------------------------------------- -->

                <!-- Quote in Sticker -->
                <section class="split left">
                    <section  class="centered">
                        <section  class="quote-div">
                            <blockquote class="quote">
                                <p class="centertitle"> <br><br><em>"We need to respect the oceans and take care of them as if our lives depended on it. Because they do."</em></p>
                                <footer>~Sylvia Earle </footer>
                            </blockquote>
                        </section >
                    </section >
                </section >
                <!-- -------------------------------------------------------------------- -->

                <section  class="split right">
                </section >
                <div class="container-image-ocean">
                    <img id="imageocean" src="./Images/Untitled-5.png" alt="Ocean Images">
                    <div id="text-ocean">

                        <h2 class="center-title">Ocean Pollution</h2>
                        <p id="secondParagraph"> 
                            Ocean water covers more than 70 percent of the Earth, and only in recent decades have we begun to understand how humans impact this watery habitat. Marine pollution, as distinct from overall water pollution, focuses on human-created products that enter the ocean.

                            Before 1972, humans around the word spewed trash, sewage sludge, and chemical, industrial, and radioactive wastes into the ocean with impunity. Millions of tons of heavy metals and chemical contaminants, along with thousands of containers of radioactive waste, were purposely thrown into the ocean.
                            The London Convention, ratified in 1975 by the United States, was the first international agreement to spell out better protection for the marine environment. The agreement implemented regulatory programs and prohibited the disposal of hazardous materials at sea. An updated agreement, the London Protocol, went into effect in 2006, more specifically banning all wastes and materials except for a short list of items, like leftover materials from dredging.

Many of these pollutants sink to the ocean's depths or float far distances from their original source, where they are consumed by small marine organisms and introduced into the global food chain. 
                        </p>
                    </div>
                </div>
            </article>
            
            <!-- Button Leading to Information -->
            <div style="text-align: center; ">
                <a href="././Information/" class="learnmore-button">Learn More ...</a>
            </div>
            <!-- ------------------------------------------------------------- -->

        </section>
        
    </main>

    <!-- Footer -->
    <footer class="footer2">
        <div class="footer-content">
            <h3>SeaThePollution</h3>
            <p>A Site About Pollution In Oceans.</p>
            <div class="images-href">
                <a href="./" class="home-foot"><img src="./Images/ho.png" alt="Home Icon" ></a>
                <a href="/WebDev2021/Maps/" class="map-foot"><img src="./Images/ma.png" alt="Map Icon" > </a>
                <a href="/WebDev2021/Information/" class="info-foot"><img src="./Images/if.png" alt="Information Icon" > </a>
                <a href="./MarineLife" class="map-foot"><img src="./Images/mar.png" ></a>
                <a href="./Contact" class="info-foot"><img src="./Images/em.png" ></a>
                <a href="https://www.facebook.com/Sea-The-Pollution-105774651733564"target="_blank" class="map-foot"><img src="./Images/fa.png" ></a>
                <a href="https://instagram.com/sea_the_pollution?utm_medium=copy_link" target="_blank" class="info-foot"><img src="./Images/in.png" ></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2021 SeaThePollution. Designed By <span> We-Love-Writing-Linux-Drivers-All-The-Time </p>
        </div>

    </footer>
    <!-- ----------------------------------------------------------------------- -->




</body>
</html>