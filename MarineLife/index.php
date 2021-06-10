<?php

    //include 'dbm.inc.php';
    include 'userFunctions.php';
    session_start();
    ob_start();
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <meta http-equiv="Content-Security-Policy"   content="frame-src https://docs.google.com;">

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- loading ... (css files)-->
    <header>
      <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" type="text/css" href="../Footer/Footer.css">
        <link rel="stylesheet" type="text/css" href="../sign.css">
        <link rel="stylesheet" type="text/css" href="../MarineLife/marine.css">
        <link rel="stylesheet" type="text/css" href="../Menu/Menu.css">
        <link rel="stylesheet" type="text/css" href="./titleMarine.css">
    
        <script src="marine.js"></script>
  
    </header>

    <title>Marine Life • SeaThePollution</title>
</head>

<body>
 
    <main>

        <header>
            
                <div class="nav-container">
                    <nav class="navbar">
                        <a href="../"><h1 id="navbar-logo">SeaThePollution</h1></a>
                        <div class="menu-toggle" id="mobile-menu" style="z-index: 1000;">
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
                            <button class='signBtnStyle' id='Sign-In' type='Submit' name='loginSubmit'>Sign-In</button>
                            </form>
                            <!--<a href='#' class ='nav-links nav-links-Button'>Sign-In</a>-->
                            <button id='closeBtn' class='close' >x</button>
                            <button class='registerBtn' id='SignUp' style='display: table-cell; vertical-align: middle; height: 10%; line-height: 2.5%; ' >Sign-Up</button>
                            <p style='font-size: 10px; margin-top: 100px;  font-family: 'Comfortaa',sans-serif; '>You don't have an account? </p>
                        </div>
                    </div>";
                    
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
                      //console.log("I am in") //TESTING
                  })


                  //sign-In inside 
                  document.getElementById("signBtn2").addEventListener("click", function(){
                      document.querySelector(".popup").style.display = "flex";
                      document.querySelector(".popupSignUp").style.display = "none";
                  //   console.log("I am in") //TESTING
                  })

                  //Sign up
                  document.getElementById("SignUp").addEventListener("click", function(){
                          document.querySelector(".popupSignUp").style.display = "flex";
                          document.querySelector(".popup").style.display = "none";
                      })

                  //Close button
                  document.querySelector(".close").addEventListener("click", function(){
                      document.querySelector(".popup").style.display = "none";
                    // console.log("I am in") //TESTING
                  })

                  document.getElementById("close").addEventListener("click", function(){
                          console.log("I am in") //TESTING
                          document.querySelector(".popupSignUp").style.display = "none";   
                      })

                  
              </script>


              <script src="../Menu/Menu.js"></script> <!--Menu js loaded-->

        </header>

        <!--Effect for title (video & svg with title)-->
        <div>
        <video controls autoplay playsinline muted loop preload poster="../MarineLife/images/loadingProblemImage.png">
            <source src=".//videos/production ID 3765078.mp4" />
            <source src=".//videos/production-ID-3765078.webm" />
          </video>
          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 285 80" preserveAspectRatio="xMidYMid slice">
            <defs >
            <mask id="mask" x="0" y="0" width="100%" height="100%" >
              <rect x="0" y="0" width="100%" height="100%" />
            <text x="28%"  y="50%">Marine Life</text>
              </mask>
          </defs>
         <rect x="0" y="0" width="100%" height="100%" />
          </svg>
        </div>

         
        
       <!--Information about each section-->
     
      <div class="wrapper">
        <section id="marineLife">
          <article>
            <p>
                The ocean is one of the most unexplored parts of our planet, with a magnitude of undiscovered species and mysteries. It turns out from the studies conducted over the last few decades, 
                this magnificent environment is under serious threat from human intervention, with plastics set to outnumber fish by 2050.
                Marine life, as we know it, is suffering irreparable damage from the chemical pollution of the waters and the millions of tons of mismanaged waste dumped in the oceans each year. 
                The result is a planetary crisis with over 100 million marine animal’s lives get lost every year, and the decay of the ocean's ecosystem.Almost 1,000 species of marine animals get 
                impacted by ocean pollution, and we now have over 500 locations recorded as dead zones where marine life cannot exist. How did this happen, what is causing the most damage, find out 
                everything below in the marine pollution statistics roundup.Over 2,000 species are currently on the ESA, and they are separated into "Threatened" and "Endangered" species. Endangered species are in danger of going extinct, while Threatened species 
                are approaching Endangered status.
        
                <br><br>
                    
                Trailer:<a href=" https://www.youtube.com/watch?v=6zrn4-FfbXw" target="_blank"> A Plastic Ocean</a>
            </p>
          </article>
        </section>
        <section id="coral">
          <article>
            <h1 id="heading">Coral Extinction</h1>
            <p>
                For decades, marine scientists have been warning of the demise of coral reefs in a warming world. But now, those warning calls have reached a full-scale alarm, leaving researchers at a loss 
                for exactly how best to save the reefs. Due to the warming sea-surface temperatures, seawater acidification and plastic pollution, 50 percent of the world's coral reefs are now dead. <br>Reefs 
                occupy just 1% of the world’s marine environment, but they provide a home to a quarter of marine species—including a unique set of fish, turtles and algae. Many of these species could be 
                lost permanently.<br>The new study finds that 94 percent of surveyed coral reefs have experienced a severe bleaching event since the 1980s. Only six sites surveyed were unaffected. They are 
                scattered around the world, meaning no ocean basin on Earth has been entirely spared.<br>Some of the world’s top coral experts amounts to a last rites for the ecosystems often referred to 
                as “the tropical rainforests of the sea.” Scientists surveyed 100 reefs around the world and found that extreme bleaching events that once occurred every 25 or 30 years now happen about 
                every five or six years.<br>Bleaching happens when corals become overheated and expel the symbiotic algae that feed them. Without the algae to photosynthesize their food for them, corals 
                stop growing and become more susceptible to disease. If water temperatures remain too high for too long, the corals can die.

                <br><br>
            
                Netflix Video:<a href="https://www.youtube.com/watch?v=aGGBGcjdjXA" target="_blank"> Click here</a>
            </p>
          </article>
        </section>
        <section id="overfishing">
          <article>
            <h1 id="heading">Overfishing and Bycatch</h1>
            <p>
                Overfishing occurs when more fish are caught than the population can replace through natural reproduction. Gathering as many fish as possible may seem like a profitable practice, but 
                overfishing has serious consequences. The results not only affect the balance of life in the oceans, but also the social and economic well-being of the coastal communities who depend on fish 
                for their way of life. More than 30 percent of the world's fisheries have been pushed beyond their biological limits and are in need of strict management plans to restore them. Several 
                important commercial fish populations (such as Atlantic bluefin tuna) have declined to the point where their survival as a species is threatened. Target fishing of top predators, such as 
                tuna and groupers, is changing marine communities. Overfishing even effects the abundance of smaller marine species, such as sardines and anchovies.<br>Wherever there is fishing, there is 
                bycatch - the incidental capture of  non-target species such as dolphins, marine turtles and seabirds.  Thousands of kilometers of nets and lines are set in the world's oceans each day. 
                Modern fishing gear, often undetectable by sight and extremely strong, is very efficient at catching the desired fish species—as well as anything else in its path. A staggering amount of 
                marine  life—including turtles, dolphins and juvenile fish - is hauled up with the catch, and then discarded overboard dead or dying. Fishing industry leaders increasingly realize the need 
                to reduce this phenomenon. Proven solutions do exist, such as modifying fishing gear so that fewer non-target species are caught or can escape. In many cases, these modifications are simple 
                and inexpensive, and often come from fishers themselves. Despite new technologies and industry recognition of the issue, bycatch is still a major problem. Not only does it cause avoidable 
                deaths and injuries, but the fishing methods can be harmful to the marine environments where they are employed. 

                <br><br>
            
                Trailer:<a href="https://www.youtube.com/watch?v=1Q5CXN7soQg" target="_blank"> Seaspiracy</a><br>
                Trailer:<a href="https://www.youtube.com/watch?v=B1wp2MQCsfQ" target="_blank"> Mission blue</a>
            
               </p>
          </article>
        </section>
        <section id="turtle">
          <article>
            <h1 id="heading">Hawksbill Turtle</h1>
            <p>
                Found in the tropical regions of all the world’s oceans, gulfs and seas- mostly in coral reefs, the Hawksbill Turtle’s population has been estimated to have declined by 80% over the last 
                century. Known to be a subject of heavy trafficking in the tourist trade in tropical regions for its meat and shells, these turtles are being killed mercilessly for quite a period of time. 
                The colourful shells of the Hawksbill Turtle, with beautiful patterns, make them a valuable item in the market, often sold as “tortoiseshell.” Even though in many countries harvesting of its 
                eggs is banned, the practice could not be ceased completely. The declination of its population has also resulted due to the degradation of coral reef species which the Hawksbill Turtle 
                primarily feed on. According to marine conservatives, this family of the turtle is the living representatives of reptiles that have existed in our oceans for the past hundred million years 
                and these turtles are vital for the existence of seagrass beds and coral reefs. 
            </p>
          </article>
        </section>
        <section id="lion">
          <article>
            <h1 id="heading">Steller Sea Lion</h1>
            <p>
                Evidently the largest member of the Otariid family and the fourth largest of all seal species, this eared seal could be located in the cold coastal waters of the North Pacific. Also known as 
                the northern sea lion, the species is named after Georg Wilhelm Steller, a naturalist who first discovered them in 1741. The high risk of predation by Killer Whales and fishing and harvest by 
                native Alaskans and Canadians for meat, oil, hides and other by-products make this marine life vulnerable to endanger. According to reports, its population has declined by more than 60% due 
                to both natural and human threats since the 1960s. However, the eastern Steller sea lion was omitted from the U.S. Endangered Species List in 2013 after their increasing population in recent 
                years.<br><br>
            
                Video:<a href="https://www.youtube.com/watch?v=oiL8tDCqzy4" target="_blank"> Click here</a>
            </p>
          </article>
        </section>
        <section id="shark">
          <article>
            <h1 id="heading">Hammerhead Shark</h1>
            <p>
                Traced in the tropical regions of the oceans around the world, the Hammerhead shark belongs to the family Sphyrnidae and was given the name because of its “hammer” shaped head. The Hammerhead 
                sharks typically have 0.9 to 6.0 m length and up to 580 kg weight. Known as aggressive hunters, these sharks are feed on smaller fish, squid crustaceans and octopuses, while there are reports 
                of unprovoked attacks on humans by the shark. These migratory sharks are subjected to being victimized for its fin. Even the process itself is horrifying as the sharks are caught by fishermen, 
                dragged on board and is cut off their fins while they are still breathing. The remaining carcass is thrown into the water and eventually, it bleeds to death. Albeit there is a ban imposed 
                upon shark finning in many countries, the result has been abortive as the demand and high price paid for it in the Asian market drives the illegal harvest system, endangering these marine 
                species’ survival.

                <br><br>
            
                 Video:<a href="https://www.youtube.com/watch?v=rG4jSz_2HDY" target="_blank"> Click here</a>

            </p>
            
          </article>
        </section>
      </div>

    </main>


     <!--Page Footer-->
    <footer class="footer2">
      <div class="footer-content">
          <h3>SeaThePollution</h3>
          <p>A Site About Pollution In Oceans.</p>
          <div class="images-href">
              <a href="../" class="home-foot"><img src="../Images/ho.png" ></a>
              <a href="/Maps/" class="map-foot"><img src="../Images/ma.png" > </a>
              <a href="/Information/" class="info-foot"><img src="../Images/if.png" > </a>
          </div>
      </div>
      <div class="footer-bottom">
          <p>Copyright &copy;2021 SeaThePollution. Designed By <span> We-Love-Writing-Linux-Drivers-All-The-Time </p>
      </div>
    </footer>


    <!--Scroll button with loding bar effect-->

    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </div>



    <script type="text/javascript">
      window.addEventListener('scroll', reveal);

      function reveal(){
        var reveals = document.querySelectorAll('.reveal');

        for(var i = 0; i < reveals.length; i++){

          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;

          if(revealtop < windowheight - revealpoint){
            reveals[i].classList.add('active');
          }
          else{
            reveals[i].classList.remove('active');
          }
        }
      }
      </script>
          <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
              <script>
                  $(document).ready(function() {
                      var progressPath = document.querySelector('.progress-wrap path');
                      var pathLength = progressPath.getTotalLength();
      
                      progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
                      progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
                      progressPath.style.strokeDashoffset = pathLength;
                      progressPath.getBoundingClientRect();
                      progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
      
                      var updateProgress = function() {
                          var scroll = $(window).scrollTop();
                          var height = $(document).height() - $(window).height();
                          var progress = pathLength - (scroll * pathLength / height);
                          progressPath.style.strokeDashoffset = progress;
                      }
      
                      updateProgress();
                      $(window).scroll(updateProgress);
      
                      var offset = 50;
                      var duration = 550;
      
                      jQuery(window).on('scroll', function() {
                          if(jQuery(this).scrollTop() > offset) {
                              jQuery('.progress-wrap').addClass('active-progress');
                          } else {
                              jQuery('.progress-wrap').removeClass('active-progress');
                          }
                      });
      
                      jQuery('.progress-wrap').on('click', function(event) {
                          event.preventDefault();
                          jQuery('html, body').animate({scrollTop: 0}, duration);
                          return false;
                      })
                  });
              </script>

</body>     


