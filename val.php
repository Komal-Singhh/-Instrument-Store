<!DOCTYPE html>
<?php error_reporting(0);
 session_start();
$link = mysqli_connect('localhost','root','','project'); 
$txtname=mysqli_real_escape_string($link,$_POST["txtfname"].' '.$_POST["txtlname"]);
$email=mysqli_real_escape_string($link,$_POST["email"]);
$pwd=mysqli_real_escape_string($link,$_POST["pwd"]);

$cpwd=mysqli_real_escape_string($link,$_POST["cpwd"]);
$r=mysqli_real_escape_string($link,$_POST["ra"]);
$mob=mysqli_real_escape_string($link,$_POST["mobno"]);
$pass=password_hash($pwd,PASSWORD_BCRYPT);
$cpass=password_hash($cpwd,PASSWORD_BCRYPT);
$token=bin2hex(random_bytes(10));
if (isset($_POST["regbtn"])) {
  

$check="select * from register_user where email_id='$email' && password='$pwd'";
   $result  =mysqli_query($link,$check);
     $num= mysqli_num_rows($result);
     if($num==1)
     {         echo 'duplicate';
    
     }
 else 
    
 {
    $qry = "insert into register_user (user_name,email_id,password,gender,mobile_no)". "values('$txtname','$email','$pwd','$r',$mob)";
    echo $qry;
    $res = mysqli_query($link,$qry);
   
    if ($res) 
    {echo "Succesfully Registered!! Please login with your UserId";}
     else 
     {echo "error";}
 }   
    mysqli_close($link);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale=1">     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


 <style>
            body{
margin: 0;
padding: 0;
font-family: montserrat;
background: linear-gradient(#e8cc9b,#f56a2f,#c71818);
height: 100vh;
overflow: hidden;}
 .form_field label{
    color:brown;
    font-size:23px;
     padding:5px 5px;
    
}
.form_field input{
 
    border:2px solid brown;
    padding:10px 32px;
    border-radius:12px;
}
.submit_field input[type='submit']{
 
    
    padding:7px 32px;
    border-radius:12px;
    background-color: #93a862;
    color:white;
    font-size:22px;
}
.submit_field input[type='reset']{
    margin-left:32px;
    padding:7px 32px;
    border-radius:12px;
    background-color:#d16a45;
    color:white;
    font-size:22px;
}
.center{
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width:  500px;
background:whitesmoke;
background-radius: 10px;
padding-left:42px;
}



</style>
    <title></title>
    </head>
    <body>
            <div class="center">
           
                <h1>Register</h1>
   <form method="post">
               
                              
                                    <div class="form_field">
                                   <label>
                               First Name
                                  </label>
                             <br>  
                                  <input type="text"name="txtfname" required=""></div><br>
                                   <div class="form_field">
                                  <label>
                               Last Name     
                                  </label>                                         
                                <br>
                                  <input type="text"name="txtlname" required="">
                                     </div>                                                   <br>
                                       <div class="form_field">
                                   <label>
                                 Gender
                                  </label>
                                
                                 <input type="radio"name="ra" value="male" checked><label>Male</label> 
                                 <input type="radio"name="ra" value="female"><label>Female</label>
                                                                    </div>                <br>
                                   <div class="form_field">
                                  <label class="label">
                                           Mobile Number
                                  </label>
                                            <br>
                                <input type="tel" name="mobno" minlength="10" maxlength="10" required=""></div>    <br>
                              
                                                                    <div class="form_field">
                                
                                       <label class="label">
                                           Email
                                  </label>
                                            <br>
                                <input type="email" name="email"class="email" required=""></div>    <br>
                               
                                <div class="form_field"><label class="label">
                                  Password
                                  </label><br>
                                 <input type="text" name="pwd" id="password"  required=""></div><br>
                                          <div class="form_field"><label class="label">
                               Confirm   Password
                                  </label><br>
                                 <input type="text "name="cpwd" id="confirm_password" required=""></div><br><div class="submit_field">
                                 <input type="submit" name="regbtn">
                                 <input type="reset"name="btncancel" value="Cancel">
                                  </div>
 </form>
 

<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password didn't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>