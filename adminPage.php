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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous"> -->

</head>
<body>

    <div class="container">
        <div class="navigation">
         <ul>
            <li>
              <a href="#">
                <span class="icon"></span>
                <span class="title">SeaThePollution</span>
              </a>

            </li>

            <li>
                <a href="#">
                    <span class="icon"></span>
                    <span class="title">DashBoard</span>
                </a>

            </li>


            
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-address-book" aria-hidden="true"></i></span>
                    <span class="title">Users</span>
                </a>

            </li>


            <li>
            
                <a href="#">
                    <span class="icon"><i class="fa fa-map" aria-hidden="true"></i></span>
                    <span class="title">Map</span>
               </a>

            </li>

            
            <li>
                <a href="#">
                    <span class="icon"><i class="fa fa-info" aria-hidden="true"></i></span>
                    <span class="title">Information</span>
               </a>

            </li>

            
            <li>
                <a href="SignOut.php">
                    <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                    <span class="title">SignOut</span>
              </a>
            </li>
        

        
         </ul>
        
        </div>



        <div class="main">
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
    </script>

</body>
</html>

