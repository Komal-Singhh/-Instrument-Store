<?php session_start();?>

<html>
 <head>    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
<script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
 </head>
<body>
  <center><h1>Your Orders</h1></center>
<table class="table text-responsive">     <th>Order_id</th>
                                                        <th>Product Name</th>
                                                        <th>Quantity</th>
                                                        <th>Price(₹)</th>
                                                        <th>Amount(₹)</th>
                                                        <th>Date</th>
                                                        <?php $i=0;$j=0;$k=0;$l=0;$m=0;
                                                        $link= mysqli_connect('localhost','root','','project');
                                                    $order="select * from order_table where user_id=$_SESSION[user_id]";
                                                    $res=mysqli_query($link, $order);
                                                    while ($row1 = mysqli_fetch_array($res))
                                                    {  $ins_id=explode(',',$row1['pro_id']);
                                                        $qty=explode(',',$row1['quantity']);
                                                        $p_price=explode(',',$row1['per_price']);
                                                        $order_id=$row1['order_id'];
                                                      $date=$row1['Date'];
                                                      while($i<count($ins_id))
                                                        {
                                                          $fetch="select ins_name from product where ins_id='" .$ins_id[$i++] . "'";
                                                          $resu=mysqli_query($link,$fetch);
                                                          while ($row2 = mysqli_fetch_array($resu))
                                                          {
                                                              echo "<tr>";
                                                              echo"<td>$order_id</td>";
                                                              echo"<td>$row2[ins_name]</td>";
                                                              echo"<td>".$qty[$k++]."</td>";
                                                              echo"<td>".$p_price[$j++]."</td>";
                                                              $calc=$qty[$l++]*$p_price[$m++];
                                                              echo "<td>".$calc."</td>";
                                                               echo"<td>$date</td>";
                                                              echo "</tr>";
                                                          }
                                                        }
                                                    }
                                                    
                                                     ?>
                                                    </table>
  
</body>
</html>