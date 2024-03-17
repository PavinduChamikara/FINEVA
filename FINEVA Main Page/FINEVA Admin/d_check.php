<?php include_once('Include/connect.php');

?>

<?php 

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
    <link rel="stylesheet" href="CSS/d_check.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
    <title>FINEVA Driver Check</title>
</head>
<body>

<section class="header">
            <nav>
                <a href="d_check.php"><img src="Images/logo.png"></a>
                <div class="nav-links">
                    <ul>

        <li>
          <a class="nav-link" href="d_check.php">
         <i class="bi bi-search" style = "color:#fee904" ></i>
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

    

    <div class="container">
           <div class="row">
                 <div class="col-md-12">
                    <!-- <div class="card mt-4"> -->
                        <div class="card-header" id="card-header">
                            <h4 id="dr">Driver Check<i class="fa fa-check-circle" aria-hidden="true"></i></h4>

                        </div>

                        <div class="card-body" id="card-body">
                           
                        <form action="d_check.php" method="POST" autocomplete="off">

                            <?php 
                                if(!empty($msg))
                                {
                                    echo $msg;
                                }  
                                
                            ?>
                            <div class="form-group">
                              <label for="" id="dr">Driver's NIC</label>
                              <input type="text" name="sid" id="sid" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter the NIC of the Driver.</small>
                            </div>
                        </div>

                        <div class="card-footer" id="card-footer">
                        <a href="fine_details.php">
                            <button type="submit" name="submit"class="btn btn-warning" href="fine_details.php">Go</button>
                            </a>
                        </div>
                        </form>


                    </div>

                </div>

           </div>
 

       </div>
        
        
        <br><br><br>
        
       <br><br><br><br><br>

       

       <div class="footer">
        <img src="Images/p_logo.png" style="float:right;" height="100px" width="80px" id="fimg">
        <p id="fp">Sri Lanka Police <br>Telephones : +94-11-2421111 / +94-11-2327711-2-3 <br>Fax Nos : +94-11-234553  Email : telligp@police.lk <br> Website : www.police.lk.</p>
    </div>
        
    </body>
</html>













