<html>
    <head>
    <meta charset="utf-8">
    <style>
        fieldset{
            background-color: #bf7526;
            width: 300px;
            height:300px;
            margin:auto;
            border-style:none;
        }    
        label{
            font-weight:bold;
            color:white;
        }
        placeholder{
            color:gray;
            font-weight: lighter;
            
        }
        input[type=email]{
            border-radius:10px;
            padding:5px 30px;
            margin-left:2px;
            margin-top:4px;
        }
        input[type=submit]
        {
           background-color:green;
           color:white;
           border-radius:5px;
           padding:4px 20px;
           border-style:none;
           margin-top:34px;
           margin-left:54px;
        }
        input[type=password]{
            border-radius:10px;
            padding:5px 32px;
            margin-left:13px;
            margin-top:4px;
        }
        input[type=button]
        {
           background-color:#bd453c;
           color:white;
           border-radius:5px;
           padding:4px 20px;
           border-style:none;
           margin-top:34px;
           margin-left:14px;
           
        }
        
        
         
        
    </style>
    </head>
    <body><fieldset>
    <form method="post">
            <legend>Login</legend>
        <label>User Name</label>
        <input type="email"name="uname"placeholder="User name"><br>
        <label>Password</label>
        <input type="password"name="psw"placeholder="Password"><br>
        <input type="checkbox"><label>Remember me</label><br>
        <input type="submit"name="btnsubmit" value='Submit'>
        <input type="button" name="btncancel"value='Cancel'><br>
        <label>Don't have an account?</label>&nbsp&nbsp<a href='head.php'>Register Here</a><br>
    </form> </fieldset>  
     </body>
     <?php $admin_id="admin";
            $admin_psw="admin";
    $link= mysqli_connect("localhost","root","","project");
    if(isset($_POST['btnsubmit']))
    { 
        if(isset($_POST['uname']))
        {
             echo 'you have succesfully logged in';
            header("location:admin_panel.php");
        }
    if(isset($_POST['uname']) and isset($_POST['psw']))
    
     {  $uname=$_POST['uname'];
     $password=$_POST['psw'];
         
         $qry="select User_id,Password from user where User_id='$uname' AND  Password='$password'";
         $r=mysqli_query($link,$qry);
         if(mysqli_num_rows($r)==1)
         {             echo 'you have succesfully logged in';
            header("location:admin_panel.php");
         exit(0);
         mysqli_close($link);
         }
     }
 else {             echo 'not inserted';
     header("location:admin_panel.php");
    }}
 
     ?>