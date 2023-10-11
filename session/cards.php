<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <style>.box-shadow
        {
            box-shadow:0px 2px 10px rgba(0,0,0,0.2);
        }
     </style>
    </head>
    <body>
          <div class="row">
           <div class="col-sm-12">
           <center>  <h1>Browse By Categories</h1></center>
           <hr width="1500px"height="1500px"align="center">
           </div>  
          </div>
          <div class="container">
              <div class="row">
                <div class="col-sm-3 py-3 py-sm-0">
                 <div class="card box-shadow" >
           <img class="card-img-top" src="guitars.jpg" alt="Card image cap" width="200" height="200"">
          <div class="card-body">
           <h5 class="card-title">Guitars</h5>
           <a href="guitar.php" class="btn btn-info">View</a>
          </div>
               </div>    
               </div>
                          <div class="col-sm-3 py-3 py-sm-0">
                              <div class="card box-shadow">
  <img class="card-img-top" src="drums.png" alt="Card image cap" width="200" height="200"">
  
  <div class="card-body">
    <h5 class="card-title">Drums</h5>
    <a href="drums/php" class="btn btn-info">View</a>
    </div>
                               </div>
                         </div>
                        <div class="col-sm-3 py-3 py-sm-0">
                         <div class="card box-shadow">
  <img class="card-img-top" src="studio.jpg" alt="Card image cap" width="200" height="200"">
  
  <div class="card-body">
    <h5 class="card-title">Studio/Live Equipment</h5>
    <a href="home_audio.php" class="btn btn-info">View</a>
    </div>
    </div> 
                        
                        </div>
                    
                    
                       
                        <div class="col-sm-3 py-3 py-sm-0">
                      <div class="card box-shadow" >
  <img class="card-img-top" src="trad.png" alt="Card image cap" width="200" height="200"">
  
  <div class="card-body">
    <h5 class="card-title">Traditional Instruments</h5>
    <a href="Trad_ins.php" class="btn btn-info">View</a>
    
    </div>
    </div>      </div>
                    </div></div>
    </body>
</html>
<div class='col-lg-4 col-sm-6 my-5 my-md-0'><form method='post'action='add_to_cart.php'>
                 <div class='cardshadow'><div><img src='./Product_image/$product_image'width='200px'height='200px'class='img-fluid card img-top'></div>
                 <div class='card-body'>
          <h6><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='fas fa-star'></i><i class='far fa-star'></i></h6>
                 <p class='card-text'>Brand:<b>$product_brand</b></p>
                 <h5><small><s>₹$prev&nbsp&nbsp</s></small><span class='price'>  ₹$curr</span></h5><br>
                    <center> <button type='submit' name='add' class='btn btn-success'>+Quick View</button></center>
                 <input type='hidden' name='product_id' value='$product_id'></div></div></form></div>
  