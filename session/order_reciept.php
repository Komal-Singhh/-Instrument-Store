<?php 
session_start();

?>


<html>
    <head><script type="text/javascript">
        function home()
{   window.location.href='home.php';
}
function fun()
{
    var content=document.getElementById("print");
    var WinPrint=window.open('','','left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
        WinPrint.document.write(content.innerHTML);
        WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();

}
        </script>
          <style>
          .card
          { color:grey;
              width:75%;
              box-shadow: 5px 5px 5px 5px;
              margin-top: 40px;
              margin-left: 40px;
                
          }  
          .table
          {
             color:grey; 
          }
          
          ab
{   margin-left: 40px;
    margin-top:40px;outline:none;
}
             
        
        </style>
        
           <meta charset="utf-8"name="viewport"content="width=device-width initial scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
    </head>
    <body>
    <div class="card py-5 mx-12">
  <div class="card-body text-responsive"><div id="print">
      <center><h3>Order receipt</h3></center>
                                                        <?php
                                                        $link=mysqli_connect('localhost','root','','project');
                                                        $user="select * from register_user where  id= $_SESSION[user_id]";
                                                      $r= mysqli_query($link, $user);
                                                      while ($row = mysqli_fetch_array($r))
                                                      {
                                                      $name=$row['username'];
                                                      $email=$row['email'];
                                                      $mobile=$row['mobile'];
                                                      }
                                                        
                                                        ?>
 
  <div class="user">
  Name:<?php  echo $name;?><br>
  Email id:<?php  echo $email;?><br>
  Mobile:<?php  echo $mobile;?><hr>
  </div>
                                                        <table class="table text-responsive">
                                                        <th>Product Name</th>
                                                        <th>Quantity</th>
                                                        <th>Price(₹)</th>
                                                        <th>Amount(₹)</th>
                                                        <?php $i=0;$j=0;$k=0;$l=0;$m=0;
                                                    $order="select * from order_table where user_id=$_SESSION[user_id]";
                                                    $res=mysqli_query($link, $order);
                                                    while ($row1 = mysqli_fetch_array($res))
                                                    {  $ins_id=explode(',',$row1['pro_id']);
                                                        $qty=explode(',',$row1['quantity']);
                                                        $p_price=explode(',',$row1['per_price']);
                                                        $total=$row1['total_price'];
                                                      $add=$row1['address'];
                                                      $pin_code=$row1['pin_code'];
                                                      $state=$row1['state'];
                                                      $city=$row1['city'];
                                                      $date=$row1['Date'];
                                                      while($i<count($ins_id))
                                                        {
                                                          $fetch="select ins_name from product where ins_id='" .$ins_id[$i++] . "'";
                                                          $resu=mysqli_query($link,$fetch);
                                                          while ($row2 = mysqli_fetch_array($resu))
                                                          {
                                                              echo "<tr>";
                                                              echo"<td>$row2[ins_name]</td>";
                                                              echo"<td>".$qty[$k++]."</td>";
                                                              echo"<td>".$p_price[$j++]."</td>";
                                                              $calc=$qty[$l++]*$p_price[$m++];
                                                              echo "<td>".$calc."</td>";
                                                              echo "</tr>";
                                                          }
                                                        }
                                                    }
                                                    
                                                     ?>
                                                    </table>
 <div class="add">
 
      <h4>Shipping Address:</h4>
  <?php  echo $add;?><br>
<?php  echo $city;?><br>
<?php  echo $state;?><br>
<?php  echo $pin_code;?><hr>
Order Date:<?php  echo $date;?>
  </div>
  <div class="footer">
      <center><h2>Total Paid(₹):<?php  echo $total;?></h2></center>
  </div>
  </div>
      <hr>
        <button type="submit" class=" ab btn btn-success" onclick="fun()">Print</button>
      <button type="submit" class=" ab btn btn-danger"onclick="home()">Cancel</button>
  
  </div>
   
    
    
    </div>  
    </body>
</html>
