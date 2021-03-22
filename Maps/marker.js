        
       // import atlantic from 'parser.js';
            
             //markers for map, texts
             
             window.addEventListener('scroll',function(){
                var value = window.scrollY;
    
                drysand.style.top = value * 0.3  + 'px';
                sand.style.top = value * 0.10 +'px'
                sea.style.top = -value * 0.4 + 'px'
                Text1.style.right = value * 0.5 +'px'
                Text3.style.left = value * 0.5 +'px'
                });
            
           

            
            
                
                var map = L.map('map').setView([0,0],2.7); //z=2.7 (zoom)
    
                const arrow = L.icon({
    
                    iconUrl: '../Maps/icons/arrow.png',
                    iconSize:     [40, 40], // size of the icon
                   
                })
    
                L.tileLayer('https://api.maptiler.com/maps/hybrid/{z}/{x}/{y}.jpg?key=tmIAY714HkSJ3YTHhuQE',{
                    minZoom: 2, //fixed zoom (min zoom)
                    maxZoom: 5,
                    attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
                }).addTo(map);
    
    
    
                let popText = "";
              /*  var para = new URLSearchParams(window.location.search);
                var pass = para.get("giveMe");


                console.log("I am the pass "+ pass); */
    
                //multiple marks 
                const packetMarks = L.layerGroup([
                    
                    new L.marker([13.083333, -55.466667]).bindPopup("Atlantic Empress").on('click', function(ev) {// ev is an event object (MouseEvent in this case)
                    
                  changeTextWithMarker(atlantic);
                  console.log();
                    }),//Atlantic Empress
    
                    new L.marker([-12.027189, 12.230525]).bindPopup("ABT Summer").on('click', function(ev){
                        changeTextWithMarker(abtSummer)
                    }),//ABT Summer
                    
                    
                    new L.marker([-33.275833, 17.504667]).bindPopup("Castillo de Bellver"),//Castillo de Bellver
                    new L.marker([48.6,-4.7]).bindPopup("Amoco Cadiz"),            //Amoco Cadiz
                    new L.marker([44.366750, 8.700028]).bindPopup("Haven"), //Haven
                    new L.marker([25.3, 57.566667]).bindPopup("Sea Star"),    //Sea Star
                    //new L.marker([50.041667, -6.128833]).bindPopup("None"),    
                    new L.marker([28.366700, 125.916700]).bindPopup("Sanchi"),     //SANCHI           
                    new L.marker([43.369462, -8.381184]).bindPopup("Urquiola"),   //Urquiola    
                    new L.marker([51.638665, -40.486299]).bindPopup("Odyssey"), //Odyssey
                    new L.marker([21.201243, -162.895969]).bindPopup("Hawaiian Patriot"), //Hawaiian Patriot  
                    new L.marker([40.994167, 29.007778]).bindPopup("Independenta"), //Independenta
                    new L.marker([41.180765, -8.699863]).bindPopup("Jakob Maersk"), //Jakob Maersk
                    new L.marker([59.883333, -1.35]).bindPopup("Braer"), //Braer
                    new L.marker([43.389, -8.41]).bindPopup("Aegean Sea"), //Aegean Sea   
                    
                    //Red arrow starting point
                    new L.marker([35, 103], {icon: arrow}).bindPopup("China"), 
                    new L.marker([-5, 120 ], {icon: arrow}).bindPopup("Indonesia"),
                    new L.marker([16, 108], {icon: arrow}).bindPopup("Vietnam"),
                    new L.marker([13, 122], {icon: arrow}).bindPopup("Philippines"),
                    new L.marker([7.450587, 80.477742], {icon: arrow}).bindPopup("Sri Lanka"),
                    new L.marker([29.692828 , -95.298729 ], {icon: arrow}).bindPopup("Texas")
                    
    
                ]);
                packetMarks.addTo(map)
    
    
                console.log(popText);
    
    
    
    
    
         //Function to change html file via click
         var text1="" ;
         var textToSend="";
    
         function  changeTextWithMarker( text1 )
            {
    
               
               var x = text1;
               localStorage.setItem("textvalue", x);
               console.log(x);
    
              //getText(x);
    
    
    
    
                //htmlPath = file's path
    
                document.getElementById("htmlPath").src = "../Maps/text.html";
                document.getElementById("htmlPath").style= "position:absolute; top: 100%; bottom: 0%; left: 0%; right: 50%; border:none; ";
               
                
    
    
    
    
    
                
                //Auto scroll the window
                window.scrollTo(300, 700);
                
    
    
                
                
     
            }
    