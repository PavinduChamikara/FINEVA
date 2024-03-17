<?php include_once('Include/connect.php');

?>


<?php
     
     if(isset($_POST['submit']))
     {
          $fname="";
          $lname="";
          $nic="";
          $email="";
          $pswd="";
          $address="";
          $province="";
          $district="";
          $contact="";
          $bdate="";
          $btype="";
          $reg_time="";
          $msg='';

         $fname = input_verify($_POST['fname']);
         $lname = input_verify($_POST['lname']);
         $nic = input_verify($_POST['nic']);
        $email = input_verify($_POST['email']);
         $pswd = input_verify($_POST['pswd']);
         $address = input_verify($_POST['address']);
         $province = input_verify($_POST['province']);
         $district = input_verify($_POST['district']);
         $contact = input_verify($_POST['contact']);
         $bdate = input_verify($_POST['bdate']);
         $btype = input_verify($_POST['btype']);

         $query = "SELECT*FROM driver WHERE nic='{$nic}'";
         
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
          $query ="SELECT*FROM driver(fname,lname,nic,email,pswd,address,province,district,contact,bdate,btype,reg_time)
          VALUES ('{$fname}','{$lname}','{$nic}','{$email}','{$pswd}','{$address}','{$province}','{$district}','{$contact}','{$bdate}','{$btype}',NOW()) ";

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
    <link rel="stylesheet" href="CSS/pro_update.css">
    <link rel="icon" href="Images/logo.png" type="image/png">
    <title>Profile Update</title>
</head>
<body>

    
<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="p-5">
                  <h1 class="fw-normal mb-5" style="color: rgb(4, 1, 37);">Profile Update</h1>
                           
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
                              <input type="text" name="fname" id="fname" class="form-control" placeholder="Dinithi" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter your first name.</small>
                            
                      </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                      <div class="form-outline">
                      <label for="">Last Name</label>
                              <input type="text" name="lname" id="lname" class="form-control" placeholder="Amarasinghe" aria-describedby="helpId">
                              <small id="helpId" class="text-muted">Enter your last name.</small>
                           
                      </div>

                    </div>
                  </div>

               

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    <label for="">NIC</label>
                    <input type="text" name="nic" id="nic" class="form-control" placeholder="200080300974" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Enter your NIC number.</small>
                  </div>
                  </div>

                  <div class="mb-4 pb-2">
                    <div class="form-outline">
                    <label for="">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="dinithikaushalya12173@gmail.com" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Enter your email address.</small>
                  </div>
                  </div>


                  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="No 117/2A, Thummodara Road, Sirisanda, Puwakpitiya" value="">
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="validationCustom01">Province</label>
      <input type="text" class="form-control" name="province" id="province" placeholder="Western" value="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="validationCustom02">District</label>
      <input type="text" class="form-control" name="district" id="district" placeholder="Colombo" value="" required>
    </div>
    </div>
 
    <div class="form-group">
      <label for="validationCustom05">Contact</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="0705326101" value="">
    </div>
  

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="validationCustom03">Birth Date</label>
      <input type="text" class="form-control" name="bdate" id="bdate" placeholder="2000/10/29" value="">
      </div>
    <div class="form-group col-md-6">
      <label for="validationCustom05">Blood Type</label>
      <input type="text" class="form-control" id="btype" name="btype" placeholder="B+" value="">
    </div>
  </div>

                  <button type="submit" name="submit" id="submit" class="btn btn-success"
                    data-mdb-ripple-color="dark">Update</button>

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





