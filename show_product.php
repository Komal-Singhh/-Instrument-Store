<!doctype html>
<html>
    <head><style>
            table th{
                color:pink;
                
            }
            
            table tr{
                color:violet;
                
            }
            input [type="submit"]
            {
                text-align:center;
                text-decoration: none;
            }
          </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <title></title>
  </head>
  <body><div class="container">
          <form method="post"><center>
    <b>     <font color="pink">:-Search by Instrument Id:-<br><input type="text"name="ins_id"><input type="submit"name="btn_id" value="Click Here"/>
         <br><br>
       :-Search by Instrument Category:-<br><input type="text"name="ins_cat"><input type="submit"name="btn_cat" value="Click Here"/>
            </font></b> </form></center>
             </div>
  </body>
</html>
<?php

          if(isset($_POST["btn_id"]))
          {$id=$_POST["ins_id"];
                 $link= mysqli_connect("localhost","root","","project");
    $qry="select * FROM product where ins_id='$id'";
    $r=mysqli_query($link,$qry); 
    if(mysqli_num_rows($r)>0)
    {   $result=$r;
                       echo "<table class='table table-striped table-hover'";
               echo"<th> Data Table--</th>";
                       echo"<th> Id</th>";
               echo"<th> Name</th>";
               echo"<th>Previous price</th>";
               echo"<th>Current price</th>";
              
               echo"<th>Availability</th>";
               echo"<th>ratings</th>";
               echo"<th>Quantity</th>";
               echo"<th>Category</th>";
               echo"<th>Brand</th>";
               echo"<th> Image</th>";
while($row=mysqli_fetch_array($result))
               {       echo"<tr>";
                       echo"<td>$id</td>";
                       echo"<td>".$row['ins_name']."</td>";
               
                       echo"<td>".$row['prev_price']."</td>";
                       echo"<td>".$row['curr_price']."</td>";
                       echo"<td>".$row['available']."</td>";
                       echo"<td>".$row['ratings']."</td>";
                       echo"<td>".$row['ins_qty']."</td>";
                       echo"<td>".$row['ins_category']."</td>";
                       echo"<td>".$row['ins_brand']."</td>";
                       echo"<td>".$row['ins_image']."</td>";
                       
                       echo"</tr>";
               }echo"</table>";
               

    }
          }
          else if(isset($_POST["btn_cat"]))
          {$cat=$_POST["ins_cat"];
          $link= mysqli_connect("localhost","root","","project");
    
          $qry1="select * FROM product where ins_category='$cat'";
    $r=mysqli_query($link,$qry1);
    if(mysqli_num_rows($r)>0)
    {   $result=$r;
              echo "<table class='table table-striped table-hover'";
               echo"<th> Data Table--</th>";
               echo"<th> Id</th>";
               echo"<th> Name</th>";
               echo"<th>Previous price</th>";
               echo"<th>Current price</th>";
              
               echo"<th>Availability</th>";
               echo"<th>ratings</th>";
               echo"<th>Quantity</th>";
               echo"<th>Category</th>";
               echo"<th>Brand</th>";
               echo"<th> Image</th>";
while($row=mysqli_fetch_array($result))
               {       echo"<tr>";
                       echo"<td>".$row['ins_id']."</td>";
                       echo"<td>".$row['ins_name']."</td>";
               
                       echo"<td>".$row['prev_price']."</td>";
                       echo"<td>".$row['curr_price']."</td>";
                       echo"<td>".$row['available']."</td>";
                       echo"<td>".$row['ratings']."</td>";
                       echo"<td>".$row['ins_qty']."</td>";
                       echo"<td>".$row['ins_category']."</td>";
                       echo"<td>".$row['ins_brand']."</td>";
                       echo"<td>".$row['ins_image']."</td>";
                       
                       echo"</tr>";
               }echo"</table>";
               

    }}
                 
          ?>