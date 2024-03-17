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
    <link rel="stylesheet" href="CSS/profile.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
    <title>FINEVA My Profile</title>
</head>
<body>

<section class="header">
            <nav>
                <a href="home.php"><img src="Images/logo.png"></a>
                <div class="nav-links">
                    <ul>

        <li>
          <a class="nav-link" href="home.php">
         <i class="bi bi-house-fill" style = "color:white" ></i>
         </a>
         </li> 
                        
        <li>
         <a class="nav-link" href="myfines.php">
         <i class="bi bi-cash-coin" style = "color:white" href="fine_pay.php"></i>
         </a>
        </li> 

         <li>
         <a class="nav-link" href="profile.php">
         <i class="bi bi-person-fill" style = "color:#fee904" href="profile.php"></i>
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


    <div class="promo">
            <div class="card">
                <div class="container">
                <img id="propic" src="Images\1.jpeg" width="100" class="rounded-circle">
                   <br>
                    <h1><b>Dinithi Amarasinghe</b></h1> 
                    
                </div>
            </div>
            <br>
        </div>


        <div class="promo">
            <div class="card">
                <div class="container">
               
                <table class="table table-hover">
  <thead class="table">
    <tr >
      <th scope="col" colspan="2">My Profile</th>
    </tr>
  </thead>
  <tbody>
    <tr style="padding-left:2%;">
      <td scope="row">First Name</th>
      <td>Dinithi</td>
    </tr>

    <tr>
      <td scope="row">Last Name</th>
      <td>Amarasinghe</td>
    </tr>

    <tr>
      <td scope="row">NIC</th>
      <td>200080300974</td>
    </tr>

    <tr style="padding-left:2%;">
      <td scope="row">E-Mail</th>
      <td>dinithikaushalya12173@gmail.com</td>
    </tr>

    <tr>
      <td scope="row">Contact</th>
      <td>0705326101</td>
    </tr>

    <tr>
      <td scope="row">Province</th>
      <td>Western</td>
    </tr>

    <tr>
      <td scope="row">District</th>
      <td>Colombo</td>
    </tr>

    <tr>
      <td scope="row">Address</th>
      <td>No 117/2A, Thummodara Road, Sirisanda, Puwakpitiya</td>
    </tr>

    <tr>
      <td scope="row">Birth Date</th>
      <td>29.10.2000</td>
    </tr>

    <tr>
      <td scope="row">Blood Type</th>
      <td>B+</td>
    </tr>

    <tr>
      <td  colspan="2">
      <a type="button" class="btn btn-success"  id="status" href="pro_update.php">
      <i class="bi bi-pencil-fill" id="check"></i>
      Edit Profile </a>
      </td>
    </tr>
  </tbody>
</table>
                </div>
            </div>
            <br>
        </div>

        <br>

       <div class="footer">
        <img src="Images/p_logo.png" style="float:right;" height="100px" width="80px" id="fimg">
        <p id="fp">Sri Lanka Police <br>Telephones : +94-11-2421111 / +94-11-2327711-2-3 <br>Fax Nos : +94-11-234553  Email : telligp@police.lk <br> Website : www.police.lk.</p>
    </div>
        
    </body>
</html>