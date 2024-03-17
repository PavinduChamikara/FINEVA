<?php include_once('Include/connect.php');

?>


<?php
     
     if(isset($_POST['submit']))
     {
         $nic="";
         $pswd="";
         $msg='';

         $nic = input_verify($_POST['nic']);
         $pswd = input_verify($_POST['pswd']);

         $query = "SELECT*FROM driver WHERE nic='{$nic}' AND pswd='{$pswd}' LIMIT 1";
         
         $show_result = mysqli_query($connect,$query);
         $row = mysqli_fetch_array($show_result);

         if(mysqli_num_rows($show_result)==1)
         {
            header("Location: home.php");
         }

         else
         {
            $msg= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> <br> Please Check Your NIC or Password!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";

         }





     }

     function input_verify($data)
     {
        $data = trim($data);              //remove empty spaces in the inputs
        $data = stripcslashes($data);     //remove  backslash (\) in the inputs
        $data = htmlspecialchars($data);   //convert special charactors to html entities

        return $data;
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
    <link rel="stylesheet" href="CSS/sign_in.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
    <title>FINEVA Sign In</title>
</head>
<body>

<div class="content">
        <div class="text-box">
            <h1>FINEVA</h1>
        </div> 

    </div>


<section class="vh-100 bg-image"
  style="background-image: url('');">
  <div class="mask d-flex align-items-center h-50 gradient-custom-3">
    <div class="container h-50">
      <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Welcome!</h2>

              <form action="sign_in.php" method="POST" autocomplete="off">

                                    <?php 
                                        if(!empty($msg))
                                        {
                                            echo $msg;
                                        }  
                                        
                                    ?>

                <div class="form-outline mb-4">
                <label for="">NIC</label>
                <input type="text" name="nic" id="nic" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Enter your NIC.</small>
                </div>

                <div class="form-outline mb-4">
                <label for="">Password</label>
                <input type="password" name="pswd" id="pswd" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Enter your password.</small>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" name="submit" class="btn btn-info">Sign In</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="sign_up.php"
                    class="fw-bold text-body"><u>create here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="footer">
        <img src="Images/p_logo.png" style="float:right;" height="100px" width="80px" id="fimg">
        <p id="fp">Sri Lanka Police <br>Telephones : +94-11-2421111 / +94-11-2327711-2-3 <br>Fax Nos : +94-11-234553  Email : telligp@police.lk <br> Website : www.police.lk.</p>
    </div>

    
</body>
</html>