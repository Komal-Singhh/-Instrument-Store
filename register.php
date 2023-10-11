<!DOCTYPE html>
<?php include_once("header.php");
error_reporting(0);
session_start();

if (isset($_POST["regbtn"])) {
    $link = mysqli_connect('localhost', 'root', '', 'project');
    $txtname = mysqli_real_escape_string($link, $_POST["txtfname"] . ' ' . $_POST["txtlname"]);
    $email = mysqli_real_escape_string($link, $_POST["email"]);
    $pwd = mysqli_real_escape_string($link, $_POST["pwd"]);
    $cpwd = mysqli_real_escape_string($link, $_POST["cpwd"]);
    $mob = mysqli_real_escape_string($link, $_POST["mobno"]);
    $pass = $_POST["pwd"];
    $cpass = $_POST["cpwd"];

    $emailquery = "select * from register_user where email='$email' && cpassword='$cpwd'";
    $query = mysqli_query($link, $emailquery);
    $num = mysqli_num_rows($query);
    if ($emailcount == 1) {
        echo 'email  ALREADY exists';
    } else {
        if ($pwd == $cpwd) {
            $insertquery = "insert into register_user (username,mobile,email,password,cpassword)" . "values('$txtname',$mob,'$email','$pass','$cpass')";
            
            $iquery = mysqli_query($link, $insertquery);

            if ($iquery) {
                echo "         <script>alert('You are succesfully registered!! Please login with your email');
          </script>";
                echo "<script type='text/javascript'>window.location.href='login.php'</script>";
            }
        } else {
            echo"<script>alert('something went wrong please try again');
  </script>";
        }
    }
    ?>

    <?php
    if ($pwd != $cpwd) 
    {
        echo "<script>alert('something went wrong please try again');
  </script>";
    }
}
?>



<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale=1">     

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel = "stylesheet" href = "footer.css"/>    
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
      <link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
      <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
       <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
       <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>'
        
        
    </head>  <body>
    <center><h1 class="regi">Register</h1></center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="txtfname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="txtlname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile No.</label>
                        <input type="tel" name="mobno" class="form-control" minlength="10" maxlength="10" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pwd" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" name="cpwd" class="form-control" id="confirm_password" required>
                    </div>
                    <button type="submit" name="regbtn"class="btn btn-success">Register</button>
                    <button type="reset" class="btn btn-danger">clear</button>

                </form>
            </div>
        </div>
    </div>

    

</body>
</html>
