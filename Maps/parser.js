let atlantic ="";
let part1 = "";
let part2 = "";

`<link href='https://fonts.googleapis.com/css?family=Cabin+Condensed:700' rel='stylesheet' type='text/css'>`
 part1 = `<h1 id="h1">

<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="550px" height="140px" xml:space="preserve">
  <defs>
    <pattern id="water" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
      <path fill="#28527a" d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
    </pattern>
    
    <text id="text" transform="translate(2,75)" font-family="'Cabin Condensed'" font-size="60.047">`;
part2 = `</text>
    
<mask id="text-mask">
  <use x="0" y="0" xlink:href="#text" opacity="1" fill="#ffffff"/>
</mask>

<g id="eff">
  <use x="0" y="0" xlink:href="#text" fill="#ffffff"/>

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




 atlantic = part1 + `Atlantic Empress`+ part2 + `Atlantic Empress was a Greek oil tanker that in 1979 collided with the oil tanker Aegean Captain in the Caribbean, and eventually 
 sank, having created the fifth largest oil spill on record and the largest ship-based spill having spilled 287,000 metric tonnes of crude oil into the Caribbean Sea. It was built 
 at the Odense Staalskibsværft shipyard in Odense, Denmark, and launched on 16 February 1974. On 19 July 1979 Atlantic Empress collided with the Aegean Captain, another fully laden 
 Greek supertanker, 18 nautical miles (33 km) east of the island of Tobago. At the time of the collision Atlantic Empress was sailing from Saudi Arabia to Beaumont, Texas, with a 
 cargo of light crude oil owned by Mobil Oil. Aegean Captain was en route to Singapore from Aruba. In heavy rain and thick fog the two ships did not sight each other until they were
 550 metres (600 yd) apart. Aegean Captain changed course, but it was too late; at 7:15 p.m, the two ships collided, with the Empress tearing a hole in the Captain's starboard bow. 
 Large fires began on each ship, which were soon beyond the control of the crews, who abandoned their ships. The collision and fire claimed the lives of 26 of the Empress's crew
 members, and one crew member on the Captain.[3] The remaining crew from both ships were taken to Tobago for medical treatment, while the Empress's captain was transported to a 
 hospital in Texas, having inhaled fire. Firefighters from the Trinidad and Tobago Coast Guard brought the fires aboard the Captain under control the next day, and members of her 
 crew returned to the ship, and were able to bring her into Curaçao, where her cargo was off-loaded. Meanwhile, a five-man specialist emergency crew from the Dutch Salvage 
 organization Smit International and the German Bugsier, managed by a Salvage inspector of Smit International, attempted to control the fire aboard Empress, and contain the spreading 
 oil slick. Two tugs (one of them being the Smit Zwarte Zee) towed the burning ship further out to sea. On 24 July, a week after the collision, the Empress was still burning, and also 
 listing, when an explosion occurred that increased the rate of flow. The next day another larger explosion increased the rate to 26 to 57 cubic metres per hour (7,000 to 15,000 gal/h),
 twice the previous rate. Finally, on 3 August, the Empress sank, having spilled 287,000 metric tonnes of crude oil into the Caribbean Sea. By comparison, in the Exxon Valdez spill
 ten years later 37,000 metric tonnes of oil was released.`;


`sessionStorage.setItem( thId, h1);`

let abtSummer = part1 + `ABT Summer` + part2 +`On 28th May 1991, while en route from the Gulf terminal at Kharg Island, Iran to Rotterdam the tanker ABT SUMMER, fully laden with a cargo of 260,000 tonnes 
of Iranian heavy crude oil, experienced an explosion and a fire about 900 miles off the coast of Angola. Five of the 32 crew members on board died as a result of the incident. A large 
slick covering an area of 80 square miles spread around the tanker and burnt fiercely. The ship burned for three days before it sank on 1st June and subsequent efforts to locate the 
wreckage were unsuccessful. It is not clear how much of the oil sank or burned. However, as the incident occurred very far off-shore, most of the oil was expected to be broken up by 
high seas with little or no environmental impact.`;

let castilloDeBellvre = part1 + `Castillo de Bellvre` + part2 + `Castillo de Bellvre, carrying 252,000 tonnes of light crude oil (Murban and Upper Zakum), caught fire about 70 miles 
north-west of Cape Town, South Africa on 6th August 1983. The blazing ship drifted off shore and broke in two. The stern section - possibly with as much as 100,000 tonnes of oil 
remaining in its tanks - capsized and sank in deep water, 24 miles off the coast. The bow section was towed away from the coast and was eventually sunk with the use of controlled 
explosive charges. Approximately 50-60,000 tonnes are estimated to have spilled into the sea or burned. Although the oil initially drifted towards the coast, a wind shift subsequently 
took it offshore, where it entered the north-west flowing Benguela Current. Although a considerable amount of oil entered the sea as a result of the Castillo de Bellvre incident, 
there was little requirement for cleanup (there was some dispersant spraying) and environmental effects were minimal. The only visible damage was the oiling of some 1,500 gannets, 
most of which were collected from an island near the coast where they were gathering for the onset of the breeding season. A number of seals were observed surfacing in the vicinity 
of the dispersant spraying activities but were not thought to have suffered any adverse effects. Also of initial concern was the 'black rain' of airborne oil droplets that fell during 
the first 24 hours of the incident on wheat growing and sheep grazing lands due east of the accident, although no long-term damage was recorded from these residues. The impact on both 
the rich fishing grounds and the fish stocks of the area was also considered to be negligible.`;

let amocoCadiz = part1 + `Amoco Cadiz` + part2 + `The tanker Amoco Cadiz ran aground off the coast of Brittany on 16th March 1978 following a steering gear failure. Over a period of 
two weeks the entire cargo of 223,000 tonnes of light Iranian and Arabian crude oil and 4,000 tonnes of bunker fuel was released into heavy seas. Much of the oil quickly formed a 
viscous water-in-oil emulsion, increasing the volume of pollutant by up to five times. By the end of April oil and emulsion had contaminated 320km of the Brittany coastline, and had 
extended as far east as the Channel Islands. Strong winds and heavy seas prevented an effective offshore recovery operation. All told, less than 3,000 tonnes of dispersants were used. 
Some chalk was also used as a sinking agent, but with the consequence of transferring part of the problem to the sea bed. The at-sea response did little to reduce shoreline oiling. A 
wide variety of shore types were affected, including sandy beaches, cobble and shingle shores, rocks, seawalls and jetties, mudflats and saltmarshes. Removal of bulk free oil trapped 
against the shore using skimmers proved difficult, largely due to problems with seaweed and debris mixed with the oil. Greater success was achieved with vacuum trucks and agricultural 
vacuum units, although much of the free oil was simply removed by hand by more than 7,000 personnel (mainly military). A considerable portion of the oil that did come ashore eventually
became buried in sediments and entrapped in the low energy salt marshes and estuaries. At the time, the Amoco Cadiz incident resulted in the largest loss of marine life ever recorded 
after an oil spill. Two weeks after the accident, millions of dead molluscs, sea urchins and other benthic species washed ashore. Although echinoderm and small crustacean populations 
almost completely disappeared from some areas, populations of many species had recovered within a year. Diving birds constituted the majority of the nearly 20,000 dead birds that were 
recovered. Oyster cultivation in the estuaries ("Abers") was seriously affected and an estimated 9,000 tonnes were destroyed because of contamination and to safeguard market confidence. 
Other shell and fin fisheries as well as seaweed gathering were seriously affected in the short-term, as was tourism. Cleanup activities on rocky shores, such as pressure-washing, as 
well as trampling and sediment removal on salt marshes caused biological impacts. Whilst rocky shores recovered relatively quickly, the salt marshes took many years. Failure to remove 
oil from temporary oil collection pits on some soft sediment shorelines before inundation by the incoming tide also resulted in longer-term contamination. Numerous cleanup and impact 
lessons were learned from the Amoco Cadiz incident, and it still remains one of the most comprehensively studied oil spills in history.`;

let haven = part1 + `Haven` + part2 + `On 11th April 1991 the very large crude carrier Haven, with 144,000 tonnes of Iranian heavy crude oil onboard, suffered an explosion while 
anchored in Genoa Roads. The explosion was caused reportedly by an electrical spark during tank cleaning and resulted in the loss of six crew members. The vessel broke into three 
sections with one section sinking close to the anchor location. The vessel drifted south-west where the bow section then sank. The remaining main section was towed towards Capo 
Arenzano, west of Genoa. Fire-fighting operations were initiated rapidly after the initial explosions, but were unable to extinguish the fires on board. As a consequence, the main 
section of the vessel sank approximately 1 ½ nautical miles offshore on 14th April following further explosions. The exact fate of the cargo is not known. However, estimates suggest 
approximately half of the oil onboard burnt during the explosions and fires. Over 10,000 tonnes of oil were estimated to have spilled prior to the sinking of the main section with 
further releases of oil for more than a year. The oil spilled initially spread widely along the north shores of the Ligurian Sea, resulting in heavy contamination of the Italian 
coastline, and to a lesser extent of the French and Monaco shores. The response at sea resulted in the collection of approximately 5,500m3 of oil. Considerable lengths of boom were 
deployed in an attempt to protect the shoreline, and although successful initially, storms pushed oil onto the beaches eventually. Shoreline clean-up was undertaken primarily by 
volunteers and military personnel and involved mostly manual removal of oil and oiled debris. The IOPC Funds note payments of 95.5 billion Lira were made to Italian claimants including
fishermen and tourist businesses, as well as 23 million Francs to French claimants, primarily for clean-up. These figures include payments made by the P&I Club concerned. The wreck of
the main section of Haven is now a noted diving location and artificial reef.`;

let seaStar = part1 + `Sea Star` + part2 + `The South Korean tanker Sea Star was on voyage from Ras Tanura, Saudi Arabia to Rio de Janeiro, Brazil when it collided with the Brazilian 
tanker HORTA BARBOSA in the Gulf of Oman on 19th December 1972, and exploded, killing 12 crew members. Both vessels caught fire but while the HORTA BARBOSA was extinguished within a 
day, the Sea Star continued to burn. After a series of explosions, the Sea Star sank 5 days after the collision. The incident resulted in the spillage of approximately 115,000 tonnes 
of crude oil.`;

let sanchi = part1 + `Sanchi` + part2 + `On the afternoon hours of 6 January 2018, the Panama-registered oil tanker Sanchi, owned by the National Iranian Tanker Company, was en route 
from Assaluyeh, Iran to Daesan, Republic of Korea, loaded with a cargo of condensate oil. Meanwhile, the Chinese bulk carrier ‘CF Crystal’ was bound from Kalama, US to Dongguan, China, 
loaded with sorghum in bulk. While both vessels were underway in East China Sea, they collided off Shanghai. The collision breached the cargo tanks of Sanchi, resulting in the leakage 
of condensate oil and subsequent fire and explosions. After burning for over a week, the ship eventually sank on 14 January 2018. <br>All the 32-crew, including 30 Iranian and 2 
Bangladeshi, are considered perished in the disaster, with only three bodies found and 29 crew members remaining unaccounted for. The 23 Chinese crew members on Crystal were rescued. 
<br>After burning for more than a week, the Sanchi sank, causing one of the worst oil spills in over 30 years. The Sanchi was carrying 111,000 tonnes (810,000 barrels) of condensate -
an ultra-light, highly flammable crude oil, most of which evaporated after the fire. An estimated 1,941 tons of HFO was also in Sanchi's fuel storage tanks. As a result, the accident 
created four separate slicks covering a total area of 100 square km, which is almost equivalent to the size of Paris, damaging beaches and the local fishing industry. Oil reached even 
islands in southern Japan, most likely from the tanker, the Japanese Coast Guard announced in late February. An article by The New York Times compared the spill magnitude with that of 
the Exxon Valdez, while it is sure that the spill was larger in size than oil spilled by the Prestige tanker.`;

let urquiola = part1 + `Urquiola` + part2 + `On 12th May 1976 the tanker Urquiola struck bottom on entering the port of La Coruña and began leaking oil. To avoid the risk of an 
explosion within the harbour, it was decided that the vessel should return to sea where repairs or offloading could take place.  However, the Urquiola struck bottom again on its way 
out of port and then ran hard aground between the two entrance channels with its bow resting in approximately 30m of water. The majority of the crew abandoned ship prior to several 
explosions and a large fire which killed the master of the vessel. Black smoke spread out over the city of La Coruña, while oil spread rapidly throughout the port and towards the 
surrounding coastline. It was estimated that 100,000 tonnes of Arabian Light crude oil was spilt during this incident, most of which burned, and an estimated 25-30,000 tonnes washed 
ashore. Over 2,000 tonnes of dispersant was applied from vessels and helicopters to combat the spread of oil at sea. At-sea collection efforts were also attempted, but were hampered 
by the oil forming an emulsion and mixing with debris. On 21 May a smaller tanker and a tug began lightering the vessel and managed to remove approximately 8,000m3 of oil before rough 
seas halted these efforts and broke off a section of the bow. Shoreline clean-up efforts with limited mechanical support were undertaken. Problems arose with secondary oiling and with 
mechanical equipment churning oil deeper into the sand on the beaches. The large tidal range in the area caused further complications for shoreline clean-up. Shellfish stocks were 
significantly affected by the spill, and limited bird and fish impacts were also reported.`;

let odyssey = part1 + `Odyssey` + part2 + `On November 10th 1988, the Liberian tanker ODYSSEY, almost fully loaded with a cargo of 132,157 tonnes of North Sea Brent crude oil, broke 
into two and sank in heavy weather in the North Atlantic 700 miles off the coast of Nova Scotia while on voyage from Sullom Voe, Shetland Islands to Come by Chance, Newfoundland. Fire 
started on the stern section as it sank and the surrounding oil caught fire. Due to the rough weather conditions, the Canadian Coast Guard was only able to come within 1.75 miles of 
the vessel whilst on fire. As the incident occurred 700 miles from the nearest coastline, there were no concerns about pollution as the oil was expected to dissipate naturally.`;

let hawaiianPatriot = part1 + `Hawaiian Patriot` + part2 + `On 23th February 1977, Hawaiian Patriot fully loaded with 99,000 tonnes of  light Indonesian crude oil, en route from Indonesia 
to Honolulu, reported a crack in her hull plating during a storm which resulted in a leak of oil from the cargo holds approximately 300 miles west of Hawaii. Approximately 18,000 
tonnes of oil had leaked into the sea and on the following day the tanker caught fire and exploded. It burnt fiercely for several hours and sank with the remaining cargo on board. One 
crew member died as a result. The resultant oil slick, which was estimated to contain about 50,000 tonnes of oil was carried westward away from Hawaii by ocean currents and did not 
result in pollution problems on land. The slick was kept under surveillance. No response to the oil spill took place as the oil dissipated naturally.`;

let independenta = part1 + `Independenta` + part2 + `On 15th November 1979, Romanian tanker Independenta collided with the Greek cargo ship EVRIALI, off Haydarpasa at the entrance to 
the Bosphorus, in Turkey. A part of the cargo of 93,800 tonnes of Libyan Es Sider crude oil spilled and caught fire. The vessel also had 260 tonnes of heavy fuel oil bunkers on-board.
42 crew members died in the ensuing explosion and fire on board the vessel and from burning oil on the water. Buildings were reportedly damaged up to 6km away. Further explosions 
occurred on the vessel on 18th November and 6th December, resulting in further releases of oil to the sea. Attempts by the Turkish Navy to fight the fire were unsuccessful. The 
casualty grounded close to the port with the fire eventually burning itself out on 14th December. The Bosphorus was closed to traffic for a number of weeks. The majority of oil was 
reported to have been consumed in the fire, with only minor contamination of nearby shorelines. Some oil did enter the port of Haydarpasa despite a boom being present across the port 
entrance. The wreck was removed by local salvors following an allision by a local ferry in 1983.`;

let jakobMaersk = part1 + `Jakob Maersk` + part2 + `On 29th January 1975 the Danish tanker Jakob Maersk struck bottom while manoeuvring onto the berth with the aid of tugs at the port 
of Leixoes, northern Portugal. It was carrying ~88,000 tonnes of oil, comprising Iranian light crude oil cargo and bunker fuel oil when the incident occurred. Heavy swell caused the 
vessel to repeatedly rise and fall onto the rocky seabed resulting in damage to the cargo tanks. Oil entered the engine room causing explosions and a fire which spread to the cargo 
holds and to oil floating on the water. 7 crew members were killed and the rest abandoned ship. The vessel and floating oil continued to burn for two days with clouds of black smoke 
affecting the nearby city of Porto. Schools and colleges were closed and a number of residents were taken to hospital suffering from smoke inhalation. After further explosions on 31st 
January caused by burning floating oil, the vessel broke into two parts. The stern section sank while the bow was washed onto shore. It was estimated that between 40,000 and 50,000 
tonnes of oil was consumed by fire. Much of the spilled oil was blown out to sea and 25,000 tonnes were estimated to have dispersed as a result. The remaining oil washed up on the 
shoreline with the heaviest contamination found in a 3-4 kilometre stretch immediately adjacent to the vessel. Traces of oil were found up to 15-20 km north and south of the wreck 
site.<br> The entrance to the harbour was boomed with some success, although some oil did enter when the boom was opened to allow vessels to pass through. A barrier improvised from 
netting and straw was used to encircle the wreck and while successful initially in absorbing the oil and preventing further spreading, this became waterlogged and broke up causing 
secondary contamination. Dispersant was sprayed from vessels but was considered to be largely ineffective due to minimal mixing as a result of calm seas. Both manual and mechanical 
shoreline clean-up were undertaken with local inhabitants, the army, navy and fire service cleaning some areas. Heavily oiled sand was removed using bulldozers. More lightly oiled 
sand was pushed into the sea and treated with dispersants.<br> Very few birds were observed to have been affected as a result of the spill and local fisheries were relatively 
unaffected other than short term tainting. However, significant mortalities of seaweed and molluscs were recorded in the heavily contaminated areas.`;

let braer = part1 + `Braer` + part2 + `Following engine failure, Braer ran aground in severe weather conditions on Garth's Ness, Shetland on 5th January 1993. Over a period of 12 days 
the entire cargo of 84,700 tonnes of Norwegian Gullfaks crude oil, plus up to 1,500 tonnes of heavy bunker oil, were lost as almost constant storm force winds and heavy seas broke the 
ship apart. Weather conditions prevented the use of mechanical recovery equipment at sea, although about 130 tonnes of chemical dispersant was applied from aircraft during periods when 
the wind abated slightly and some oil remained on the surface. Oiling of shorelines was minimal relative to the size of the spill and cleanup involved the collection of oily debris and 
seaweed by a small workforce. The Braer spill was very unusual in that a surface slick was not produced. A combination of the light nature of the oil and the exceptionally strong wind 
and wave energy naturally dispersed the oil throughout the water column. The oil droplets were adsorbed onto sediment particles which eventually sank to the sea bed. Sub-surface currents 
led to this oil being spread over a very wide area, although a significant portion eventually ended up in two deep, fine sediment 'sinks'. A wide range of fish and shellfish over a fairly 
large area became contaminated with oil, resulting in the imposition of a Fisheries Exclusion Zone. Farmed salmon held in sea cages in the surface waters within this zone bore the brunt of 
the contamination since they could not escape the cloud of dispersed oil. Although this contamination was lost quickly once clean water conditions returned, millions of salmon that could 
not be marketed had to be destroyed. The Exclusion Zone was progressively lifted as fish and shellfish species were found by chemical analysis and taste testing to be free of contamination, 
although it was still in place over 6 years after the spill for mussels and Norway lobsters at some sites within the closure area. The Braer spill was unusual in that a significant amount 
of oil was blown on to land adjacent to the wreck site. The effects of this airborne oil were localised and had no more than a temporary impact on vegetation and livestock. Seabird casualties 
were also relatively low. Considering the size of the spill, the environmental impacts were surprisingly limited.`;

let aegeanSea = part1 + `Aegean Sea` + part2 + `On 3rd December 1992 the Greek OBO carrier (ore/bulk/oil) Aegean Sea, laden with 80,000 tonnes of North Sea Brent crude oil, ran aground 
during heavy weather while approaching the port of La Coruña on the Galician coast, north-west Spain. The vessel broke in two and caught fire which, together with spilled cargo, burned 
for several days. Dense clouds of black smoke threatened the city of La Coruña, resulting in a temporary mass evacuation. The forward section of Aegean Sea sank in shallow water, some 50 
metres from the coast. The stern section remained largely intact and was found to contain 6,500 tonnes of remaining cargo and 1,700 tonnes of bunker fuel, which was eventually pumped 
ashore by salvors. <br>The quantity of oil spilt was estimated at about 73,000 tonnes, much of which either dispersed at sea or was consumed by the fire on board the vessel. Strong winds 
during the initial five days assisted in dispersing much of the remaining light crude naturally, but also hampered recovery of oil at sea. Attempts were made to protect sensitive areas 
using government-owned equipment. However, oil impacted rocky shores, sand beaches and a salt marsh/mud flat area. In total, over 300km of shoreline were contaminated to varying degrees. 
Manual cleaning of shorelines began in late December and continued sporadically for several months. In areas where access from the shore was possible, some oil was recovered using locally 
available vacuum trucks, skimmers and pumps. Approximately 5,000 tonnes of oil/water mixture was collected and delivered to local oil reception facilities for processing. In addition, 1,200m3 
of contaminated sand and debris was processed at a local ceramics factory. A variety of commercially important species, including mussels, were tainted and a comprehensive fishing and 
harvesting ban was imposed to protect a thriving fishing and mariculture industry. In August 1993 the fisheries authorities began destroying cultivated produce within a specified area, 
with mussels and salmon dumped in an inland quarry. Claims totaling Pts48,187 million or €289.6 million, were submitted before the criminal and civil courts. In October 2002, an agreement 
was concluded between the Spanish Government, the shipowner, the P&I Club and the International Oil Pollution Compensation (IOPC) Funds for compensation amounting to Pts9, 000 million or 
€54 million.`;