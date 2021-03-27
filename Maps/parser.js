let atlantic ="";
let part1 = "";
let part2 = "";
 part1 = `<h1 id="h1"><link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:700' rel='stylesheet' type='text/css'>

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="550px" height="140px" xml:space="preserve">
  <defs>
    <pattern id="water" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
      <path fill="#000" d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
    </pattern>
    
    <text id="text" transform="translate(2,75)" font-family="'Cabin Condensed'" font-size="60.047">`;
part2 = `</text>
    
<mask id="text-mask">
  <use x="0" y="0" xlink:href="#text" opacity="1" fill="#ffffff"/>
</mask>

<g id="eff">
  <use x="0" y="0" xlink:href="#text" fill="#a2a3a5"/>

<rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" x="-300" y="50" width="1200" height="120" opacity="0.3">
<animate attributeType="xml" attributeName="x" from="-300" to="0" repeatCount="indefinite" dur="2s"/>
</rect>
<rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="45" width="1600" height="120" opacity="0.3">
<animate attributeType="xml" attributeName="x" from="-400" to="0" repeatCount="indefinite" dur="3s"/>
</rect>
  
<rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="55" width="800" height="120" opacity="0.3">
<animate attributeType="xml" attributeName="x" from="-200" to="0" repeatCount="indefinite" dur="1.4s"/>
</rect>
  <rect class="water-fill" mask="url(#text-mask)" fill="url(#water)" y="55" width="2000" height="120" opacity="0.3">
<animate attributeType="xml" attributeName="x" from="-500" to="0" repeatCount="indefinite" dur="2.8s"/>
</rect>
</g>
</defs>

  <use xlink:href="#eff" opacity="0.9" style="mix-blend-mode:color-burn"/>

</svg></h1>`;




 atlantic = part1 + `Atlantic Empress`+ part2 + ` Atlantic Empress was a Greek oil tanker that in 1979 collided with the oil tanker Aegean Captain in the Caribbean, and eventually sank, having created the fifth largest oil spill on record and the largest ship-based spill having spilled 287,000 metric tonnes of crude oil into the Caribbean Sea. It was built at the Odense Staalskibsværft shipyard in Odense, Denmark, and launched on 16 February 1974.
On 19 July 1979 Atlantic Empress collided with the Aegean Captain, another fully laden Greek supertanker, 18 nautical miles (33 km) east of the island of Tobago. At the time of the collision Atlantic Empress was sailing from Saudi Arabia to Beaumont, Texas, with a cargo of light crude oil owned by Mobil Oil. Aegean Captain was en route to Singapore from Aruba.[2]

In heavy rain and thick fog the two ships did not sight each other until they were 550 metres (600 yd) apart. Aegean Captain changed course, but it was too late; at 7:15 p.m, the two ships collided, with the Empress tearing a hole in the Captain's starboard bow. Large fires began on each ship, which were soon beyond the control of the crews, who abandoned their ships.[2]

The collision and fire claimed the lives of 26 of the Empress's crew members, and one crew member on the Captain.[3] The remaining crew from both ships were taken to Tobago for medical treatment, while the Empress's captain was transported to a hospital in Texas, having inhaled fire.[2]

Firefighters from the Trinidad and Tobago Coast Guard brought the fires aboard the Captain under control the next day, and members of her crew returned to the ship, and were able to bring her into Curaçao, where her cargo was off-loaded. Meanwhile, a five-man specialist emergency crew from the Dutch Salvage organization Smit International [4] and the German Bugsier, managed by a Salvage inspector of Smit International, attempted to control the fire aboard Empress, and contain the spreading oil slick. Two tugs (one of them being the Smit Zwarte Zee) towed the burning ship further out to sea.[2]

On 24 July, a week after the collision, the Empress was still burning, and also listing, when an explosion occurred that increased the rate of flow. The next day another larger explosion increased the rate to 26 to 57 cubic metres per hour (7,000 to 15,000 gal/h), twice the previous rate. Finally, on 3 August, the Empress sank, having spilled 287,000 metric tonnes of crude oil into the Caribbean Sea.[2]

By comparison, in the Exxon Valdez spill ten years later 37,000 metric tonnes of oil was released.[5] `;




`sessionStorage.setItem( thId, h1);`





let abtSummer = `<div class="wrapper"><h1>ABT Summer </h1></div>MV ABT Summer was an oil tanker which was built at the South Korean shipbuilding yard of Ulsan and launched in 1974. The vessel was 344 metres in length and almost 54 metres in breadth. While under a Liberian flag,[1] fully laden with Iranian crude and en route to Rotterdam, she sank 700 nautical miles off the Angolan coast. An unexplained explosion occurred on May 28, 1991, and the ship and its cargo began to burn.Five of the crew of thirty-two were killed in the incident, four of whom were initially reported as missing.[2] The following day, a slick 32 km long and 7 km wide began to form.[1] The ship continued to burn for three days before sinking on June 1. The vessel's 260,000 tonne cargo of oil was lost, leaving a visible slick on the ocean surface of approximately eighty square miles. Attempts to locate the wreck following the incident proved unsuccessful.[3][4] `;


//var para = new URLSearchParams();
//para.append("giveMe", atlantic);
//location.href = "http://Maps/index.html" ;

