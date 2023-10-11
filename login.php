<?PHP 
session_start();
if(isset($_POST['submit']))
{   
    $user=$_POST['uname'];
    $pass=$_POST['pass'];
    
    $link= mysqli_connect("localhost","root","","project");
    $qry="select * from admin where email='$user' and password='$pass'";
    $r=mysqli_query($link,$qry);
    if(mysqli_num_rows($r)==1)
    {       $result=$r;
        while($row=mysqli_fetch_array($result))
        {
             $_SESSION['user']=$row['username'];
        }
                header("location:admin_panel.php"); 
     } 
    
    else {
         $qry1="select * from register_user where email='$user' and password='$pass'";
    $res=mysqli_query($link,$qry1);
    if(mysqli_num_rows($res)==1)
     {   $result=$res;
        while($row=mysqli_fetch_array($result))
        {                  $_SESSION['user_id']=$row['id'];

             $_SESSION['user']=$row['username'];
             $_SESSION['myCart']= explode(",",$row['mycart']);
        }   
        
        header("location:session/home.php");
     } 
}
    }
 ?>

<html lang="en" dir="ltr">
    <head>
                  <link rel = "stylesheet" href = "footer.css"/>    
                   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
        <meta charset="UTF-8">
      <style>
  
form .txt_field{
position: relative;
border-bottom: 2px solid #adadad;
margin: 30px 0;
}
.txt_field input{
width: 100%;
padding: 0 5px;
height: 40px;
font-size:16px;
border: none;
background: none;
outline: none;
}
.txt_field label{
position: absolute;
top: 50%;
left:5px;
color: #adadad;
transform: translateY(-50%);
font-size: 16px;
pointer-events: none;
transition: .5s;
}
.txt_field span::before{
content: '';
position: absolute;
top: 40px;
left: 0;
width: 0%;
height: 2px;
background: #2691d9;
} 
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
top: -5px;
color: #2691d9;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
width: 100px;
}
.pass{
 margin: -5px 0 20px 5px;
color: #a6a6a6a;
cursor: pointer;
}
.pass:hover{
text-decoration: underline;
}
input[type="submit"]{
width: 100%;
height: 50px;
border: 1px solid;
background: #2691d9;
border-radius: 25px;
font-size: 18px;
color: #e9f4fb;
font-weight: 700;
cursor: pointer;
outline: none;
}
input[type="submit"]:hover{
border-color: #2691d9;
transition: .5s;
}
.signup_link{
margin: 30px 0;
text-align: center;
font-size: 16px;
color: #666666;
}
.signup_link a{
color: #2691d9;
text-decoration: none;
}
.signup_link a:hover{
text-decoration: underline;
} 
.card
{
    width:600px;
    margin-left: 300px;
    
    margin-top:10px;
}

        </style>   
    </head>
    <body> <?php include_once './header.php';?>
          
   <div class="card bg-light card-shadow">
  
  <div class="card-body">
    
            <h1>Login</h1> 
            
            <form method="post">
            
                <div class="txt_field">
                <input type="text" name="uname"required>
                <span></span>
                <label>Username</label> 
            </div> 
                <div class="txt_field">
                <input type="password" name='pass'required>
                <label>Password</label> 
            </div> 
                <div class="pass"><a href="forgot_password.php"><font color="red">Forgot Password?</font></a></div> 
                <input type="submit" name='submit' value="Login"> 
                <div class="signup_link">
                    Not a member? <a href="register.php">Sign Up</a>
                </div> </form>
  
  </div>
</div>             
    </body>
</html>
