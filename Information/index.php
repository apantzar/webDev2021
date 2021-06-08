<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="../Menu/Menu.css">
    <link rel="stylesheet" type="text/css" href="../sign.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" href="Information.css">
    <link rel="stylesheet" href="../Footer/Footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <?php
        date_default_timezone_set('Europe/Athens');
    ?>
    <style>
        .leavecomm
        {
            height: 70px;
            padding-top: 10px;
        }
        .btm{
            padding: 10px 15px;
            border: none;
            outline: none;
            border-radius: 5px;
            text-transform: uppercase;
            font-weight: bold;
             color: #fff;
            background-color: #273c75;
             cursor: pointer;
             width: 50%;
             position: relative;
             left: 25%;

        }
        .btm:hover{
            background-color: grey;
        }
        .txtarea
        {
            height: 20px;
         width: 100%;
         border: none;
         border-bottom: 2px solid #aaa;
         background-color: transparent;
         margin-bottom: 10px;
         resize: none;
         outline: none;
         transition: .5s
        }
        .container-form
        {
            margin-top: 100px;
            position:relative;  width: 100%;
            border: 8px solid #333;
            padding: 15px 10px;
            padding-bottom: 40px;
        }
        .be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
}

.comments-title {
    font-size: 16px;
    color: #262626;
    margin-bottom: 15px;
    font-family: 'Conv_helveticaneuecyr-bold';
}



.be-ava-comment {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.be-comment-content {
    margin-left: 80px;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-name {
    font-size: 13px;
    font-family: 'Conv_helveticaneuecyr-bold';
    margin-top: 50px;
}

.be-comment-content a {
    color: #383b43;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-time {
    text-align: right;
}

.be-comment-time {
    font-size: 11px;
    color: #b4b7c1;
}

.be-comment-text {
    font-size: 13px;
    line-height: 18px;
    color: #7a8192;
    display: block;
    background: #f6f6f7;
    border: 1px solid #edeff2;
    padding: 15px 20px 20px 20px;
}

.form-group.fl_icon .icon {
    position: absolute;
    top: 1px;
    left: 16px;
    width: 48px;
    height: 48px;
    background: #f6f6f7;
    color: #b5b8c2;
    text-align: center;
    line-height: 50px;
    -webkit-border-top-left-radius: 2px;
    -webkit-border-bottom-left-radius: 2px;
    -moz-border-radius-topleft: 2px;
    -moz-border-radius-bottomleft: 2px;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
}

.form-group .form-input {
    font-size: 13px;
    line-height: 50px;
    font-weight: 400;
    color: #b4b7c1;
    width: 100%;
    height: 50px;
    padding-left: 20px;
    padding-right: 20px;
    border: 1px solid #edeff2;
    border-radius: 3px;
}

.form-group.fl_icon .form-input {
    padding-left: 70px;
}

.form-group textarea.form-input {
    height: 150px;
}
.container-comment
{
    border: 6px solid #333;
}
    </style>


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
                    <li><a href="../" class="nav-links">Home</a></li>
                    <li><a href="../Maps" class="nav-links">Map</a></li>
                    <li><a href="../Information" class="nav-links">Information</a></li>
                    <li><a href="../MarineLife/" class="nav-links">Marine Life</a></li>
                    <li><a href="../Contact/" class="nav-links">Contact Us</a></li>
                    <li><a href="#" id="signBtn" class="nav-links nav-links-Button">Sign-In</a></li>
                </ul>
            </nav>
        </div>
        <!-- ------------------------------------------------------------------------------------- -->




        
        <!--This is for popup (Sign-In)-->

        <div class="popup">
            <div class="popup-content">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <!--<a href="#" class ="nav-links nav-links-Button">Sign-In</a>-->
                <button class="signBtnStyle" id="Sign-In">Sign-In</button>
                <button id="closeBtn" class="close" >x</button>
                <button class="registerBtn" id="SignUp" style="display: table-cell; vertical-align: middle;  height: 10%; line-height: 2.5%; ">Sign-Up</button>
                <p style="font-size: 10px; margin-top: 95px; text-align: center;  font-family: 'Comfortaa',sans-serif; ">You don't have an account? </p>
            </div>
        </div>

        <!--THIS IS FOR SIGN UP-->
        <div class="popupSignUp">
            <div class="Sign-Up-content">
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Username">
                <input type="password" placeholder="Password">
                <button id="close" class="close" >x</button>
                <p style="word-spacing: 1px;font-size: 10px; font-family: 'Comfortaa',sans-serif; margin-top: 75px; text-align: center; color: black;">You already have an account?</p>
            <button class="signBtnStyle" id="signBtn2" style="display: table-cell; background: #fff;border: 1px solid #0074a9; vertical-align: middle;color:#0074a9 ; height: 10%; top: 270px; line-height: 2.5%; ">Sign-In</button>
                <button class="registerBtn" id="SignUp" style="top: 190px; color: #fff; background: #0074a9; border: 1px solid #fff;;">Sign-Up</button>
            </div>
        </div>

        <script>

            //Sign in
            document.getElementById("signBtn").addEventListener("click", function(){
                document.querySelector(".popup").style.display = "flex";
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

    <script src="../Menu/Menu.js"></script>
    </header>
    <div class="backgroundmainimg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto text-left col-sm-12">
                    <h1 class="title">
                        Ocean Pollution
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <article >
            <div class="Prolog" >

                <!-- Current Page Navigator -->
                <nav class="smallnavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item2">
                            <div clas="navtitle">
                                <h2 class="navigatortitle">Page<br>Navigator</h2>
                            </div>
                            <a href="#Industrial" class="navlink2">
                                <div class="container22">
                                    <img src="../Images/icons8-factory-30.png" alt="Factory Icon" class="image2">
                                    <div class="overlay2">
                                      <div class="textt">Industrial Pollution</div>
                                    </div>
                                  </div>
                            </a>
                        </li>
                        <li class="nav-item3">
                            <a href="#Oil" class="navlink3">
                                <div class="container23">
                                    <img src="../Images/icons8-oil-industry-50.png" alt="Oil Icon" class="image3">
                                    <div class="overlay3">
                                      <div class="textt">Oil Pollution</div>
                                    </div>
                                  </div>
                            </a>
                        </li>
                        <li class="nav-item4">
                            <a href="#Plastic" class="navlink4">
                                <div class="container24">
                                    <img src="../Images/icons8-bottle-of-water-30.png" alt="Plastic Bottle Icon" class="image4">
                                    <div class="overlay4">
                                      <div class="textt">Plastic Pollution</div>
                                    </div>
                                  </div>
                            </a>
                        </li>
                        <li class="nav-item5">
                            <a href="#Noise" class="navlink5">
                                <div class="container25">
                                    <img src="../Images/icons8-radio-waves-30.png" alt="Radio Waves Icon" class="image5">
                                    <div class="overlay5">
                                      <div class="textt">Noise Pollution</div>
                                    </div>
                                  </div>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- --------------------------------------------------------------------------- -->

                <p > Pollution is anything that is present or introduced into an environment which causes harm.  In the sea there are many kinds of pollution such as rubbish, oil, chemicals,noise etc.<br><br></p>
                <p > In the last ten years the waters have borne the brunt of serious pollution accidents, but these are becoming less common as technologies develop and the affects become better understood.  But, there is still an awful lot to learn about the effects of polluting marine environments.  Often the pollution cannot be seen by the naked eye, and sometimes pollution will never disappear from the water.<br><br></p>
                <p > The majority of pollutants that make their way into the ocean come from human activities along the coastlines and far inland. One of the biggest sources of pollution is nonpoint source pollution, which occurs as a result of runoff. Nonpoint source pollution can come from many sources, like septic tanks, vehicles, farms, livestock ranches, and timber harvest areas. In conclusion, marine pollution encompasses many types of pollution that disrupt the marine ecosystem, including industrial, oil, noise, and plastic pollution.<br><br> </p>
            </div>
    </article>
    <section id="Industrial">
        <div class="container reveal">
          <h2 >Industrial Pollution</h2>
            <p class="text-to-center">
                Industry is a huge source of water pollution, it produces pollutants that are extremely harmful to people and the environment.<br>

                Many industrial facilities use freshwater to carry away waste from the plant and into rivers, lakes and oceans.<br>
                
                Pollutants from industrial sources include:
            </p>
            <div class="container1">
                <img src="../Images/32.jpg" alt="Factory">
                <div class="text-card">
                    <p> 
                        <b>Asbestos</b> – This pollutant is a serious health hazard and carcinogenic. Asbestos fibres can be inhaled and cause illnesses such as asbestosis, mesothelioma, lung cancer, intestinal cancer and liver cancer.<br>
                        <b>Lead</b> – This is a metallic element and can cause health and environmental problems. It is a non-biodegradable substance so is hard to clean up once the environment is contaminated. Lead is harmful to the health of many animals, including humans, as it can inhibit the action of bodily enzymes.<br>
                        <b>Mercury</b> – This is a metallic element and can cause health and environmental problems. It is a non-biodegradable substance so is hard to clean up once the environment is contaminated. Mercury is also harmful to animal health as it can cause illness through mercury poisoning.<br>
                        <b>Nitrates</b> – The increased use of fertilisers means that nitrates are more often being washed from the soil and into rivers and lakes. This can cause eutrophication, which can be very problematic to marine environments.<br>
                        <b>Phosphates</b> – The increased use of fertilisers means that phosphates are more often being washed from the soil and into rivers and lakes. This can cause eutrophication, which can be very problematic to marine environments.<br>
                        <b>Sulphur</b> – This is a non-metallic substance that is harmful for marine life.
                        Oilsy – Oil does not dissolve in water, instead it forms a thick layer on the water surface. This can stop marine plants receiving enough light for photosynthesis. It is also harmful for fish and marine birds.<br>
                        <b>Petrochemicals</b> – This is formed from gas or petrol and can be toxic to marine life.
                    </p>

                </div>
            </div>
        </div>
      </section>
    
      <section id="Oil">
        <div class="container reveal">
          <h2 >Oil Pollution</h2>
          <p class="text-to-center">Oil pollution can be caused by any spillage of crude oil or its refined products.<br> However, the largest and most damaging pollution events usually involve spills of petroleum or heavy bunker fuel from disabled tankers or drill platforms at sea,<br> from barges or ships on major inland waterways, or from blowouts of wells or broken pipelines on land.<br>
            <div class="container2">
              <img src="../Images/riley-uVLBeE7QuN8-unsplash.jpg" alt="Oil spillage">
            <div class="text-card">
                <p>
                    A spill on land can occur in many ways, but the largest events generally involve a pipeline rupture or a well blowout. Globally, in 1982 there were 64.5 thousand km of pipeline for the transportation of liquid petroleum and another 136 thousand km of natural gas pipeline (Gilroy, 1983). The causes of pipeline ruptures are diverse. They include faulty pumping equipment and pipe seam welds, earthquakes, sabotage, deliberate spillage as in the Gulf War, and sometimes hunters using aboveground pipelines for target practice. The total quantity of oil spilled from pipelines is not well quantified in many parts of the world.
                    However, because of the widespread use of spill sensors and mechanisms for shutting down sections of pipeline, individual events are usually much smaller than can potentially be spilled by oceanic supertankers or by blowouts of offshore platforms. Because the spread of spilled oil is much more restricted on land than on water, terrestrial spills usually affect relatively localized areas (unless the spilled oil reaches a watercourse). The characteristics and ecological effects of terrestrial spills are described in more detail later in this chapter, in the context of oil spills in the Arctic.
                    Much information is available about the magnitude, behavior, and effects of oil spilled at sea. Recent estimates of the input of petroleum hydrocarbons to the world's oceans during the 1970s and early 1980s ranged from about 3.2 to 6.1 million tonnes/year (Table 6.3). This was equivalent to about 0.2–0.3% of the total quantity of petroleum transported by tankers in 1980 and 0.1–0.2% of global petroleum production (Cormack, 1983). More recent estimates of global inputs of oil to the marine environment suggest that there was a substantial reduction during the 1980s, from 1.47 million tonnes in 1981 to 0.57 million tonnes in 1989 [International Marine Organization (IMO), 1990; GESAMP, 1993).
                </p>
            </div>
        </div>
      </section>

      <section id="Plastic">
        <div class="container reveal">
            <h2 >Plastic Pollution</h2>
            <p class="text-to-center"> 
                Plastic is a synthetic organic polymer made from petroleum with properties ideally suited for a wide variety of applications, including packaging, building and construction, household and sports equipment, vehicles, electronics and agriculture. Ocean-based plastic originates mainly from the fishing industry, nautical activities and aquaculture.<br> Plastic is cheap, lightweight, strong and malleable. Over 300 million tons of plastic are produced every year, half of which is used to design single-use items such as shopping bags, cups and straws.<br> Plastic pollution is the most widespread problem affecting the marine environment. It also threatens ocean health, food safety and quality, human health, coastal tourism, and contributes to climate change. 
            </p>
            <div class="container3">
                <img src="../Images/113.jpg" alt="Plastic Cleaning">
                <div class="text-card">
                    <p>
                        <b>Impacts on marine environment</b>-
                        The most visible and disturbing impacts of marine plastics are the ingestion, suffocation and entanglement of hundreds of marine species. Marine wildlife such as seabirds, whales, fishes and turtles, mistake plastic waste for prey, and most die of starvation as their stomachs are filled with plastic debris. They also suffer from lacerations, infections, reduced ability to swim, and internal injuries. Floating plastics also contribute to the spread of invasive marine organisms and bacteria, which disrupt ecosystems.<br>
                    
                    </p>
                    <p>
                        <b>Impacts on food and health</b>-
                        Invisible plastic has been identified in tap water, beer, salt and are present in all samples collected in the world’s oceans, including the Arctic. Several chemicals used in the production of plastic materials are known to be carcinogenic and to interfere with the body’s endocrine system, causing developmental, reproductive, neurological, and immune disorders in both humans and wildlife.<br>
                        Toxic contaminants also accumulate on the surface of plastic materials as a result of prolonged exposure to seawater. When marine organisms ingest plastic debris, these contaminants enter their digestive systems, and overtime accumulate in the food web. The transfer of contaminants between marine species and humans through consumption of seafood has been identified as a health hazard, but has not yet been adequately researched.<br>
                    </p>
                    <p>
                        <b>Impacts on climate change</b>-
                        Plastic, which is a petroleum product, also contributes to global warming. If plastic waste is incinerated, it releases carbon dioxide into the atmosphere, thereby increasing carbon emissions.<br>
                    </p>
                    <p>
                        <b>Impacts on tourism</b>-
                        Plastic waste damages the aesthetic value of tourist destinations, leading to decreased tourism-related incomes and major economic costs related to the cleaning and maintenance of the sites.
                    </p>
                </div>
            </div>
        </div>
      </section>

      <section id="Noise">
        <div class="container reveal">
            <h2 >Noise Pollution</h2>
            <p class="text-to-center">More often than not, noise is a forgotten or unmentioned source of pollution. We can’t see it, we can’t smell it, and unfortunately, we have grown accustom to the noise emissions of our life style. 
                The oceans, on the other hand, have not. Ocean noise pollution is a growing issue for our planet. Prior to the mechanization of oceanographic travel, all noises in the ocean were generated by nature. Noises include wind and waves, lightening, breaking ice, sea vents, earthquakes, and the vast array of biological sounds. These sounds and noises were perceived by animals, sensed within biological constraints of tissues, muscles, and bones, and adapted to various and particular acoustical niches. Noises that humans are generating in the ocean are not so constrained. Some anthropogenic noises may not be problematic. 
                The ocean can naturally be very noisy in places, and it is likely that many animals living in noisy environments have adapted ways to filter or contend with noise. 
                            
                 Other noises are problematic and leave in their wake stranded animals, abandoned habitat, and compromised acoustical relationships. The impact of human generated noises depends on the characteristics of the noise and the nature of the acoustical ecology where it intervenes.
                 <br><b>Types of oceanographic noise:</b>
            </p>
            <div class="container4">
              <img src="../Images/Whale.png" alt="Whale">
                <div class="text-card">
                    <p>
                        <b>SONAR</b>-

                        Sonar (originally an acronym for SOund Navigation And Ranging) is a technique that uses sound propagation (usually underwater, as in submarine navigation) to navigate, communicate with or detect objects on or under the surface of the water, such as other vessels.<br>
                        <b>OIL EXPLORATION (AIR GUNS)</b>-

                        Seismic airguns are used to find oil and gas deep underneath the ocean floor. These blasts are repeated every ten seconds, 24 hours a day, for days and weeks at a time. Seismic airguns are towed behind ships and shoot loud blasts of compressed air through the water and miles into the seabed, which reflect back information about buried oil and gas deposits.<br>
                        <b>SHIPS</b>-

                        Ships create noise from their propellers, motors and gears. The amount of noise produced depends on their hull shapes and propulsion systems. Most of the noise ships produce is at low frequencies (roughly 20–500 Hz). In the frequency range of roughly 500–100,000 Hz, however, ambient noise is mostly due to breaking waves, rather than shipping. At low frequencies the background sound level in many places in the ocean is dominated by noise from distant ships, even when there is no nearby ship. 

                    </p>
                </div>
            </div>
        </div>
      </section>
      <div class="container-form" >
        <div class="leavecomm">
            <h2 style="    text-align: center;
            margin-bottom: 15px">Leave Us a Comment</h2>
        </div>
        <?php
        echo "<form>
            <input type='hidden' name='uid' value='Anonymous'>
            <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
            <textarea  class='txtarea' placeholder='Add Your Comment'></textarea>
            <button class='btm' type='submit' name='submit'>Comment</button>
        </form>";
        ?>
      </div>
      <div class="container-comment">
        <div class="be-comment-block">
            <h1 class="comments-title">Comments (3)</h1>
            <div class="be-comment">
                <div class="be-comment-content">
                    
                        <span class="be-comment-name">
                            <a href="blog-detail-2.html">Ravi Sah</a>
                            </span>
                        <span class="be-comment-time">
                            <i class="fa fa-clock-o"></i>
                            May 27, 2015 at 3:14am
                        </span>
        
                    <p class="be-comment-text">
                        Pellentesque gravida tristique ultrices. 
                        Sed blandit varius mauris, vel volutpat urna hendrerit id. 
                        Curabitur rutrum dolor gravida turpis tristique efficitur.
                    </p>
                </div>
            </div>
            <div class="be-comment">

                <div class="be-comment-content">
                    <span class="be-comment-name">
                        <a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
                    </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        May 27, 2015 at 3:14am
                    </span>
                    <p class="be-comment-text">
                        Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in turpis tristique blandit.
                    </p>
                </div>
            </div>
            <div class="be-comment">
                <div class="be-comment-content">
                    <span class="be-comment-name">
                        <a href="blog-detail-2.html">Cüneyt ŞEN</a>
                    </span>
                    <span class="be-comment-time">
                        <i class="fa fa-clock-o"></i>
                        May 27, 2015 at 3:14am
                    </span>
                    <p class="be-comment-text">
                        Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant
                    </p>
                </div>
            </div>
            </div>
            </div>


      <!-- Footer -->
      <footer class="footer2">
        <div class="footer-content">
            <h3>SeaThePollution</h3>
            <p>A Site About Pollution In Oceans.</p>
            <div class="images-href">
                <a href="../" class="home-foot"> <img src="../Images/ho.png" alt="Home Icon"> </a>
                <a href="../Maps/" class="map-foot"> <img src="../Images/ma.png" alt="Maps Icon" > </a>
                <a href="../Information/" class="info-foot"> <img src="../Images/if.png" alt="Information Icon" > </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2021 SeaThePollution. Designed By <span> We-Love-Writing-Linux-Drivers-All-The-Time </p>
        </div>

    </footer>
    <!-- ------------------------------------------------------------------------------------- -->


    <!-- Button to Top of Page -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ----------------------------------------------------------------- -->



    <!-- Scroll Revealing Items -->
      <script type="text/javascript">
      window.addEventListener('scroll', reveal);
  
      function reveal(){
        var reveals = document.querySelectorAll('.reveal');
  
        for(var i = 0; i < reveals.length; i++){
  
          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;
  
          if(revealtop < windowheight - revealpoint){ //limits
            reveals[i].classList.add('active');
          }
          else{
            reveals[i].classList.remove('active');
          }
        }
      }
      </script>
      <!-- --------------------------------------------------------- -->


            <!-- Button to Top of Page -->
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
                              jQuery('.progress-wrap').removeClass('active-progress');//dont do anything
                          }
                      });
      
                      jQuery('.progress-wrap').on('click', function(event) {
                          event.preventDefault();
                          jQuery('html, body').animate({scrollTop: 0}, duration);//once clicked go to top
                          return false;
                      })
                  });
              </script>
            <!-- -------------------------------------------------------------------------- -->
  
</body>
</html>