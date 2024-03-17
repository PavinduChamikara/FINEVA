<?php include_once('Include/connect.php');

?>


<?php
     
     if(isset($_POST['submit']))
     {
          $ad_fname="";
          $ad_lname="";
          $ad_sid="";
          $ad_email="";
          $ad_pswd="";
          $ad_regtime="";
          $msg='';

         $ad_fname = input_verify($_POST['fname']);
         $ad_lname = input_verify($_POST['lname']);
         $ad_sid = input_verify($_POST['ad_sid']);
         $ad_email = input_verify($_POST['email']);
         $ad_pswd = input_verify($_POST['pswd']);

         $query = "SELECT*FROM police_admin WHERE ad_sid='{$ad_sid}'";

         $show_result = mysqli_query($connect,$query);

         if(mysqli_num_rows($show_result)==1)
         {
            $msg= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Sorry!</strong> <br> This User Already Exists!
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
            </button>
          </div>";
         }

         else
         {
          $query ="INSERT INTO police_admin(fname,lname,ad_sid,email,pswd,reg_time)
          VALUES ('{$ad_fname}','{$ad_lname}','{$ad_sid}','{$ad_email}','{$ad_pswd}',NOW()) ";

        $result = mysqli_query($connect,$query);

        if($result)
        {
           $msg= "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
           <strong>User Registration Successful!</strong> <br> Welcome to the STSTRV.
           <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
             <span aria-hidden='true'>&times;</span>
           </button>
         </div>";
        }
        else
        {
            echo mysqli_error($connect);
        }

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
    <link rel="stylesheet" href="CSS/sign_up.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
    <title>Admin Sign Up</title>
</head>
<body>

<div class="content">
        <div class="text-box">
            <h1>Sign Up</h1>
        </div> 

    </div>
    
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="p-5">
                  <h3 class="fw-normal mb-5" style="color: rgb(4, 1, 37);">General Infomation</h3>
                           
                        <form action="sign_in.php" method="POST" autocomplete="off">

                            <?php 
                                if(!empty($msg))
                                {
                                    echo $msg;
                                }  
                                
                            ?>
                        
                        <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      <label for="">First Name</label>
                              <input type="text" name="fname" id="fname" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter your first name.</small>
                            
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      <label for="">Last Name</label>
                              <input type="text" name="lname" id="lname" class="form-control" placeholder="" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter your last name.</small>
                           
                      </div>

                    </div>
                  </div>

               

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    <label for="">SID</label>
                    <input type="text" name="ad_sid" id="ad_sid" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Enter your Service ID.</small>
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Enter your email address.</small>
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    <label for="">Password</label>
                    <input type="password" name="pswd" id="pswd" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Create your own password.</small>
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                  <label for="validationCustom05">Contact</label>
                  <input type="text" class="form-control" id="contact" name="contact" placeholder="" value="">
                  <small id="helpId" class="text-muted">Enter your contact number..</small>
                </div>
                  </div>


                 

                  <div class="form-check d-flex justify-content-start mb-4 pb-3">
                    <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label text-red" for="form2Example3">
                      I do accept the <a href="#!" class="text-red"><u>Terms and Conditions</u></a> of your
                      site.
                    </label>
                  </div>

                  <button type="submit" name="submit" id="submit" class="btn btn-info"
                    data-mdb-ripple-color="dark" href="">Register</button>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer">
        <img src="Images/p_logo.png" style="float:right;" height="100px" width="80px" id="fimg">
        <p id="fp">Sri Lanka Police <br>Telephones : +94-11-2421111 / +94-11-2327711-2-3 <br>Fax Nos : +94-11-234553  Email : telligp@police.lk <br> Website : www.police.lk.</p>
    </div>
    
</body>
</html>





