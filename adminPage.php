<?php 


   /* $admin = 'admin';
    if(!isset($_SESSION['status']) == $admin ){
       
        echo '<script>console.log("I am in if");</script>';
        exit();
        
    }else{
        */
               session_start(); 

   // }
    
?>




<!DOCTYPE html>



<html lang="en">
<head>



 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     integrity="sha384-wvfXpqpZZVQGK6TAh5PV1GOfQNHSoD2xbE+QkPxCAF1NEevoEH3S10sibVcOQVnN" crossorigin="anonymous"> 

</head>
<body>

    <div class="container">
        <div class="navigation">
         <ul>
            <li>
              <a href="#">
                <span class="icon"><img src="https://img.icons8.com/ios-filled/50/ffffff/seal.png"/></span>
                <span class="title">SeaThePollution</span>
              </a>

            </li>

            <li>
                <a href="#" id="dash" >
                    <span class="icon"><img src="https://img.icons8.com/material/24/ffffff/dashboard-layout.png"/></span>
                    <span class="title">DashBoard</span>
                </a>

            </li>


            
            <li>
                <a href="admin/usersAdmin.php" id="users">
                    <span class="icon"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/group.png"/></span>
                    <span class="title">Users</span>
                </a>

            </li>


            <li>
            
                <a href="#" id="map">
                    <span class="icon"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/map--v1.png"/></span>
                    <span class="title">Map</span>
               </a>

            </li>

            
            <li>
                <a href="#" id="info" >
                    <span class="icon"><img src="https://img.icons8.com/material-sharp/24/ffffff/info.png"/></span>
                    <span class="title">Information</span>
               </a>

            </li>

            
            <li>
                <a href="SignOut.php">
                    <span class="icon"><img src="https://img.icons8.com/metro/26/ffffff/logout-rounded.png"/></span>
                    <span class="title">SignOut</span>
              </a>
            </li>
        

        
         </ul>
        
        </div>



        <div class="main" id="mainId">
            <div class="topbar" >
                <div class="toggle" onclick="toggleMenu();"></div>
                    <div class="search">
                            <label>
                                <input type="text" placeholder="Search">
                            </label>

                       
                           


                     </div>
                 

                          <div class="user">
                                <img src="./Images/admin.png">

                            </div>

                      

            </div> 
            
            
            

            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,042</div>
                        <div class="cardName">Total Users</div>
                    </div>
                </div>

            </div>
           

           



        </div>

    
    </div>


    


    <script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');


        }


        function usersControl(){
            alert("Hey");
        }

    </script>



    

</body>
</html>

