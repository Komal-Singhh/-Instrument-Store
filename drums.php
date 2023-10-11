<?php include_once("header.php");?>


<html>
    <head>
        <meta charset="utf-8"name="viewport"content="width=device-width initial scale=1">
        
                  <link rel = "stylesheet" href = "footer.css"/>    
                   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
  
<style>
         img{
         max-width:100%;
         height:auto;
          
     }
     .fa-star,.fa-star-half{
         color:yellow;
         padding: 3% 0%;
         
     }card {
    width: 100%;
    height: 15vw;
    object-fit: cover;
      margin-bottom: 40px;
}
  </style>
    
       </head>
       <body>
           
          
           <?PHP  require_once 'component.php';
                             function connect()
{
    $link= mysqli_connect("localhost","root","","project");
    $qry="select ins_name,ins_image,ins_id,ins_brand,prev_price,curr_price,ratings  FROM product where ins_category='Drums'";
    $r=mysqli_query($link,$qry);
    if(mysqli_num_rows($r)>0)
{return $r;}
}

                     ?>
                         <font color="red"><center><h1>DRUMS</h1></center></font>   
        
        <div class="container">
                    <div class="row text-center py-5">
                     <?php
               $result=connect();
               while($row=mysqli_fetch_array($result))
               {component($row['ins_name'],$row['ins_image'],$row['ins_brand'],$row['ins_id'],$row['prev_price'],$row['curr_price'],$row['ratings']);}
               
                     ?>
             
                              
                
              </div></div>
                         <?php include("footer.php"); ?>
    </body>
</html>
