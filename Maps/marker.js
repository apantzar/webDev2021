        
    //Map's markers file

             let isOpen = false;

           
         /*

             var southWest = L.latLng(0, 0),
              northEast = L.latLng(0, 0),
              bounds = L.latLngBounds(southWest, northEast);*/
            

              var map = L.map('map',{'worldCopyJump': true}).setView([0,0],2.7); //z=2.7 (zoom)
    
                const arrow = L.icon({
    
                    iconUrl: '../Maps/icons/arrow.png',
                    iconSize:     [40, 40], // size of the icon
                   
                })





                //=====SHIP======
                
                const ship = L.icon({
    
                  iconUrl: '../Maps/icons/ship.png',
                  iconSize:     [40, 40], // size of the icon
                 
              })


    
                L.tileLayer('https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}.jpg?key=2spIdQjJtUxW69tie1Xh',{
                    minZoom: 2, //fixed zoom (min zoom)
                    maxZoom: 5,
                    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                }).addTo(map);
    
    
    
                let popText = "";
             
    
                //======================================================================multiple-marks (blue)=================================================================================== 
                const packetMarks = L.layerGroup([
                    
                    new L.marker([13.083333, -55.466667],{icon: ship}).bindPopup(`<h2>Atlantic Empress</h2>`).on('click', function(ev) {// ev is an event object (MouseEvent in this case)
                    
                   
                        changeTextWithMarker(atlantic , 50.083333, -55.466667 );
                  
                 
                    }),//Atlantic Empress
    
                    new L.marker([-12.027189, 12.230525],{icon: ship}).bindPopup(`<h2>ABT Summer</h2>`).on('click', function(ev){
                      changeTextWithMarker(abtSummer, 30.027189 ,  12.230525);
                     
                    }),//ABT Summer
                    
                    
                    new L.marker([-33.275833, 17.504667] ,{icon: ship}).bindPopup(`<h2>Castillo de Bellver</h2>`).on('click', function(ev){
                      changeTextWithMarker(castilloDeBellvre, 5.275833, 17.504667)
                  }),//Castillo de Bellver
                    new L.marker([48.6,-4.7],{icon: ship}).bindPopup(`<h2>Amoco Cadiz</h2`).on('click', function(ev){
                      changeTextWithMarker(amocoCadiz,76.6,-4.7)
                  }),           //Amoco Cadiz
                    new L.marker([44.366750, 8.700028],{icon: ship}).bindPopup(`<h2>Haven</h2`).on('click', function(ev){
                      changeTextWithMarker(haven , 75.366750, 8.700028)
                  }), //Haven
                    new L.marker([25.3, 57.566667],{icon: ship}).bindPopup(`<h2>Sea Star</h2`).on('click', function(ev){
                      changeTextWithMarker(seaStar,58.3, 57.566667)
                  }),    //Sea Star   
                    new L.marker([28.366700, 125.916700],{icon: ship}).bindPopup(`<h2>Sanchi</h2`).on('click', function(ev){
                      changeTextWithMarker(sanchi, 62.366700, 125.916700)
                  }),     //SANCHI           
                    new L.marker([43.369462, -8.381184],{icon: ship}).bindPopup(`<h2>Urquiola</h2>`).on('click', function(ev){
                      changeTextWithMarker(urquiola,75.369462, -8.381184)
                  }),   //Urquiola    
                    new L.marker([51.638665, -40.486299],{icon: ship}).bindPopup(`<h2>Odyssey</h2>`).on('click', function(ev){
                      changeTextWithMarker(odyssey,75.638665, -40.486299 )
                  }), //Odyssey
                    new L.marker([21.201243, -162.895969],{icon: ship}).bindPopup(`<h2>Hawaiian Patriot</h2>`).on('click', function(ev){
                      changeTextWithMarker(hawaiianPatriot, 57.201243, -162.895969)
                  }), //Hawaiian Patriot  
                    new L.marker([40.994167, 29.007778],{icon: ship}).bindPopup(`<h2>Independenta</h2`).on('click', function(ev){
                      changeTextWithMarker(independenta , 72.994167, 29.007778)
                  }), //Independenta
                    new L.marker([41.180765, -8.699863],{icon: ship}).bindPopup(`<h2>Jakob Maersk</h2>`).on('click', function(ev){
                      changeTextWithMarker(jakobMaersk, 75.180765, -8.699863 )
                  }), //Jakob Maersk
                    new L.marker([59.883333, -1.35],{icon: ship}).bindPopup(`<h2>Braer</h2>`).on('click', function(ev){
                      changeTextWithMarker(braer,75.883333, -1.35)
                  }), //Braer
                    new L.marker([43.389, -8.41],{icon: ship}).bindPopup(`<h2>Aegean Sea</h2>`).on('click', function(ev){
                      changeTextWithMarker(aegeanSea,75.389, -8.41)
                  }), //Aegean Sea   
                    
                    //Red arrow starting point
                    new L.marker([35, 103], {icon: arrow}).bindPopup(`<h2>China</h2><br>1st in plastic waste:<br>8,82 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }), 
                    new L.marker([-5, 120 ], {icon: arrow}).bindPopup(`<h2>Indonesia</h2><br>2nd in plastic waste:<br>3.22 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([16, 108], {icon: arrow}).bindPopup(`<h2>Vietnam</h2><br>4th in plastic waste:<br>1.83 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([13, 122], {icon: arrow}).bindPopup(`<h2>Philippines</h2><br>3rd in plastic waste:<br>1.88 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([8.027712, 80.582054], {icon: arrow}).bindPopup(`<h2>Sri Lanka</h2><br>5th in plastic waste:<br>1.59 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([16.226724, 101.476501], {icon: arrow}).bindPopup(`<h2>Thailand</h2><br>6th in plastic waste:<br>1.03 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([27.733657, 29.745149], {icon: arrow}).bindPopup(`<h2>Egypt</h2><br>7th in plastic waste:<br>0.97 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([3.645673, 102.507192], {icon: arrow}).bindPopup(`<h2>Malaysia</h2><br>8th in plastic waste:<br>0.94 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([8.578017, 8.062578], {icon: arrow}).bindPopup(`<h2>Nigeria</h2><br>9th in plastic waste:<br>0.85 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    }),
                    new L.marker([24.400169, 90.044586], {icon: arrow}).bindPopup(`<h2>Bangladesh</h2><br>10th in plastic waste:<br>0.79 millions of metric toners of plastic per year`).on('click', function(ev){
                      scrollMeUp();
                     
                    })
                ]);
                packetMarks.addTo(map)
    
    
                console.log(popText);




    
         //Function to change html file via click
         var text1="" ;
         var textToSend="";
    
         //=======================================================================
         //par1 = x, par2=y, text->text ;)
         //=======================================================================
         function  changeTextWithMarker( text1 , par1 , par2 )
            {


              map.setView([par1, par2]);
              //map.setZoom(2.7);


              isOpen = true;

               
               var x = text1;
               localStorage.setItem("textvalue", x);
               console.log(x);
    
             
    
                //htmlPath = file's path
    
                document.getElementById("htmlPath").src = "../Maps/text.html"; //get the file
              
                document.getElementById("htmlPath").style= "position:absolute; top: 100%; bottom: 0%; left: 0%; right: 50%; border:none; ";
                document.getElementById("footer").style="position: absolute; top:150%";

               
               
           
                
                //Auto scroll the window
                window.scrollTo(300, 490);
            
            }



            //For auto scroll for red markers

            function scrollMeUp(){


              window.scrollTo(0,0);
              map.setView([0,0],2.7);

            }




            //==================================================Testing========================================================================
            //For close (x) button
                function closeMe(){

                    //document.getElementsByName("theFrame").src = "../Maps/index.html";
                    console.log("x is here");
                    document.getElementById("htmlPath").style= "position:100%; top: 20%; bottom: 0%; left: 0%; right: 50%; border:none; ";
                   // document.getElementsByName("theFrame").

                   isOpen = false;
                   
                }
    
           