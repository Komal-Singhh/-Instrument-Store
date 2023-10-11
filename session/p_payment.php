<html><?php session_start(); ?>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .card
            {    background-color: #fcfaf5;
                width: 64%;
                margin-left: 247px;
            
            
            }
         </style>
    </head>
    <body><form method="post">
           <div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title">Payment Options</h5>
    <h4 class="card-text">Please select which payment method are you going to choose</h4>
    
    <input type="radio"name="r"value="cash">Cash On Delivery
    <input type="submit"name="btncheck"value='place order'>
    
  </div>
</div>

</form>
    </body>
</html>
<?php
if(isset($_POST['btncheck']))
{
}


?>

<!DOCTYPE html>
