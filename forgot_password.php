     
     
        
<html>
    <head>
        <meta charset="UTF-8">
        <meta name = "viewport" content = "width = device-width, initial-scale=1">     


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
   <form method="post">
               
                              
                                    <div class="form_field">
                                   <label>
                               Enter your E-mail
                                  </label>
                             <br>  
                                  <input type="email"name="email"required></div><br>
                                   <div class="form_field">
                                  <label>
                               Old Password
                                  </label>                                         
                                <br>
                                  <input type="paswword"name="pass"required>
                                     </div>                                                   <br>
                                   
                                   <div class="form_field">
                                  <label class="label">
                                           New password
                                  </label>
                                            <br>
                                <input type="password"name="npass"required></div>    <br>
                              
                                                                    <div class="form_field">
                                
                                       <label class="label">
                                          Confirm Password
                                  </label>
                                            <br>
                                            <input type="password"name="cpass"required></div>    <br>
                              <div class="submit_field">
                                 <input type="submit"name="btnsubmit">
                                 <input type="reset"name="btncancel" value="Cancel">
                                  </div>
 </form></div> 
        
    </body>
   
</html>

<?php
if(isset($_POST['btnsubmit']))
{   
    $email=$_POST['email'];
    $old_pass=$_POST['pass'];
    $new_pass=$_POST['npass'];
    $c_pass=$_POST['cpass'];
    if($new_pass==$c_pass)
    {
        $link=mysqli_connect("localhost","root","","project");
        $qry="select id from register_user where email='$email'and password='$old_pass'";
       $r= mysqli_query($link, $qry);
       while ($row = mysqli_fetch_array($r))
       {
        $update="update register_user set password='$c_pass' where id='$row[id]'";
        $u=mysqli_query($link, $update);
        if($u){
            echo "<script type='text/javascript'>alert('Your Password is Changed succesfully!!')</script>";
        }else{   echo "<script type='text/javascript'>alert('Something Wnet Wrong Please Try again!')</script>";}
       }
       
       
       
       
    }
    else
    {
            echo "<script type='text/javascript'>alert('New Paasword and Confirm Password are not matched!!')</script>";
        
    }
  }
        
        




?>