<?php 





        require_once 'dbConnect.php';  
        $result = $db->query("SELECT id FROM users where userType='user' order by id"); 
        $row = mysqli_num_rows($result);
        $resultC = $db->query("SELECT CommentID FROM comments order by CommentID"); 
        $rowC = mysqli_num_rows($resultC);





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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Footer/Footer.css">

     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" -->
     <!-- integrity="sha384-wvfXpqpZZVQGK6TAh5PV1GOfQNHSoD2xbE+QkPxCAF1NEevoEH3S10sibVcOQVnN" crossorigin="anonymous">  -->
     <!-- <link rel="stylesheet" href="sb-admin-2.css"> -->
     <!-- <link rel="stylesheet" href="sb-admin-2.min.css">  -->

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
                <a href="adminPage.php" id="dash" >
                    <span class="icon"><img src="https://img.icons8.com/material/24/ffffff/dashboard-layout.png"/></span>
                    <span class="title">DashBoard</span>
                </a>

            </li>


            
            <li>
                <a href="usersAdmin.php" id="users">
                    <span class="icon"><img src="https://img.icons8.com/ios-glyphs/30/ffffff/group.png"/></span>
                    <span class="title">Users</span>
                </a>

            </li>


           

            
            <li>
                <a href="info.php" id="info" >
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
                 
                         <div class="user">
                                <img src="admin.png">

                            </div>          

            </div> 
            
            
            

        


  


                                <div class="row" style="margin-top:30px; margin-left:100px;">


                    <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                               

                            <?php 

                                    require_once 'dbConnect.php';  
                                    $result = $db->query("SELECT id FROM users where userType='user' order by id"); 
                                    $row = mysqli_num_rows($result);
                                    
                                    echo '<h1> '.$row.' </h1>';


                            ?>

                           

                            </div>
                            </div>
                            <div class="col-auto">
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>


                    <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Comments</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                    <?php 

                                        require_once 'dbConnect.php';  
                                        $resultC = $db->query("SELECT CommentID FROM comments order by CommentID"); 
                                        $rowC = mysqli_num_rows($resultC);

                                        echo '<h1> '.$rowC.' </h1>';


                                    ?>

                            </div>
                            
                            </div>
                            <div class="col-auto">
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="tip" style="width: 650px;">
                                        <div class="card border-left-warning shadow h-100 py-2">
                                            <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Admin Tip</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Organize your day<br> Before doing anything, start by taking note of all the tasks you have to accomplish that day. Sort them in order of importance, e.g. by deadline or complexity. It is usually not recommended to start your day with the tasks you like the most, since you will tend to spend more time on them and risk running late for the others.</div>
                                                </div>
                                                <div class="col-auto">
                                                
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>

                    <div class="chart" style=" width: 750px; margin-left:110px;">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="row">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Statistics</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">

                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                    google.charts.load('current', {'packages':['corechart']});
                                    google.charts.setOnLoadCallback(drawChart);

                                    function drawChart() {

                                        var userV = parseInt('<?php echo $row; ?>');
                                        var commentsV = parseInt('<?php echo $rowC; ?>');
                                          

                                        var data = new google.visualization.DataTable();
                                            data.addColumn('number', 'Total Users');
                                            data.addColumn('number', 'Total Comments');
                                            data.addRows([
                                                [0,0],
                                                [userV, commentsV]
                                              
                                                
                                            ]);


                                      

                                                                            

                                        var options = {
                                        title: 'Users & Comments'
                                        };

                                        var chart = new google.visualization.LineChart(document.getElementById('piechart'));

                                        chart.draw(data, options);
                                    }
                                    </script>

                                    <div id="piechart"></div>



                                </div>
                                </div>
                                <div class="col">
                                <div class="progress progress-sm mr-2">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-auto">
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>


                  


                            

                                <?php 

                                include'footer.php';


                                ?>

       

        
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




