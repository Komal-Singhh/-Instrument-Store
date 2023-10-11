<?php session_start();
 include_once './header.php';


?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
                  <link rel = "stylesheet" href = "footer.css"/>    
                   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
        <title></title>
    </head>
    <body><form method="post">
    <div class="container">

  <div class="card">
    <div class="card-header"><h2>Edit Profile</h2></div>
    <div class="card-body">
           <table><?php $link= mysqli_connect("localhost","root","","project");
        $qry="select * from register_user where id=".$_SESSION['user_id'];
        $r= mysqli_query($link, $qry);
        while ($row = mysqli_fetch_array($r)) {?>
             
        
               <tr>
            <td>Name:-
             </td>
             <td>
              <input type="text"name="txtname"value="<?php  echo $row['username'];?>">
             </td>    
            </tr> 
        <tr>
            <td>Mobile:-
             </td>
             <td>
              <input type="text"name="txtmob"max="10"value="<?php  echo $row['mobile'];?>">
             </td>    
            </tr> 
      
              <tr>
            <td>Email:-
             </td>
             <td>
              <input type="email"name="txtemail"value="<?php  echo $row['email'];?>">
             </td>    
            </tr> 
            
            
            
            
            
            <tr>
            <td>Address:-
             </td>
             <td>
              <input type="text"name="txtadd"value="<?php  echo $row['address'];?>">
             </td>    
            </tr> 
        <tr>
            <td>City:-
             </td>
             <td>
              <input type="text"name="txtcity"value="<?php  echo $row['city'];?>">
             </td>    
            </tr> 
        <tr>
            <td>State:-
             </td>
             <td>
              <input type="text"name="txtstate"value="<?php  echo $row['state'];?>">
             </td>    
            </tr> 
        <tr>
            <td>Pin Code:-
             </td>
             <td>
        <input type="text"name="txtpin"value="<?php  echo $row['pin_code'];}?>">
             </td>    
            </tr> 
   <tr>
   <td>
       
       <center> <input type="submit"name="btnsubmit"value="update"></center>
    </td>
 </tr>          
           
           
           
           </table>
    </div> 
   
  </div>
</div>
</form>
    </body>
</html>
<?php
if(isset($_POST['btnsubmit']))
{
    $name=$_POST['txtname'];
    $mob=$_POST['txtmob'];
    $add=$_POST['txtadd'];
    $state=$_POST['txtstate'];
    $city=$_POST['txtcity'];
    $pin=$_POST['txtpin'];
      $email=$_POST['txtemail'];

    $qry1="update register_user set username='$name',mobile=$mob,address='$add',state='$state',city='$city',pin_code=$pin,email='$email'";
    $res= mysqli_query($link,$qry1);
    if($res)
    {   echo "<script type=text/javascript> alert('Profile Has Been Updated Succesfully')</script>";
        echo "<script type=text/javascript> window.location.href='home.php'</script>";
    }
 else 
 {
   echo "<script type=text/javascript> alert('Profile Can not be updated')</script>";     
    }
    
    
    
}

?>
<div class="footer">
    <?php include_once './footer.php';?>
</div>