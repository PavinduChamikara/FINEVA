<?php include_once('Include/connect.php');

?>

<?php 
session_start();

global $lname;
if(isset($lname)){
    echo $lname;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Plugin/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="Plugin/jquery.min.js"></script>
    <script src="Plugin/bootstrap.min.js"></script>
    <link rel="stylesheet" href="CSS/home.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
    <title>FINEVA Home</title>
</head>
<body>

<section class="header">
            <nav>
                <a href="home.php"><img src="Images/logo.png"></a>
                <div class="nav-links">
                    <ul>

        <li>
          <a class="nav-link" href="home.php">
         <i class="bi bi-house-fill" style = "color:#fee904" ></i>
         </a>
         </li> 
                        
        <li>
         <a class="nav-link" href="myfines.php">
         <i class="bi bi-cash-coin" style = "color:white" href="fine_pay.php"></i>
         </a>
        </li> 

         <li>
         <a class="nav-link" href="profile.php">
         <i class="bi bi-person-fill" style = "color:white" href="profile.php"></i>
         </a>
         </li> 
      
         <li>
         <a class="nav-link" href="settings.php">
         <i class="bi bi-gear-fill" style = "color:white"  href="settings.php"></i>
         </a>
         </li> 
                    </ul>
                </div>
            </nav>
        </section>

        <div class="content">
        <div class="text-box">
        
            <h1>FINEVA</h1>
            <h3>fine pay at your fingertips!</h3>
            <br>
            <h4></h4>
        </div> 

    </div>
        
        
        <br><br><br>
        <div class="promo">
            <div class="card">
                <div class="container">
                <i class="bi bi-check-circle-fill" id="valid"></i>
                <!-- <i class="bi bi-x-circle-fill" id="sus"></i>   -->
                <h1><b>
                    Dinithi Amarasinghe
                </b></h1> 
                    <h3>200080300974</h3> 
                    <p>This is a valid license</p>
                </div>
            </div>
            <br>
        </div>
       

        <p style="color: gray;" id="pp"><br>Click here to see the previous fines !</p>
        <div class="button">
        <a target="_blank" href="myfines.php">
         <button id="B">Fine History</button>
        </a>
       </div>
       
       <br><br><br><br><br>

       

       <div class="footer">
        <img src="Images/p_logo.png" style="float:right;" height="100px" width="80px" id="fimg">
        <p id="fp">Sri Lanka Police <br>Telephones : +94-11-2421111 / +94-11-2327711-2-3 <br>Fax Nos : +94-11-234553  Email : telligp@police.lk <br> Website : www.police.lk.</p>
    </div>
        
    </body>
</html>









