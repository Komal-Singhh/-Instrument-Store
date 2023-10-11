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
            button{
                margin-top: 4px;
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
    <b>     <font color="pink">:-Search by Instrument Id or Instrument Category:-<br><input type="text"name="btn_ins">
       
       <input type="submit"name="btnsubmit" value="Click Here"/></b></center>
            </div>
  </body>
</html>
<?php

          if(isset($_POST["btnsubmit"]))
          {$a=$_POST["btn_ins"];
                 $link= mysqli_connect("localhost","root","","project");
    $qry="select * FROM product where ins_id='$a'or ins_category='$a';";
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
               echo"<th> Operations</th>";
while($row=mysqli_fetch_array($result))
               {       echo"<tr>";$id=$row['ins_id'];
                       echo"<td>".$row['ins_id']."</td>";
                       echo"<td>".$row['ins_name']."</td>";
               
                       echo"<td>".$row['prev_price']."</td>";
                       echo"<td>".$row['curr_price']."</td>";
                       echo"<td>".$row['available']."</td>";
                       echo"<td>".$row['ratings']."</td>";
                       echo"<td>".$row['ins_qty']."</td>";
                       echo"<td>".$row['ins_category']."</td>";
                       echo"<td>".$row['ins_brand']."</td>";
                       echo"<td><img src='Product_image/".$row['ins_image']."'width='200px'height='200px'</td>";
                                  echo"<td><button class='btn btn-primary'><a href='update.php?Id=$id'class='text-light'>update</a></button><button class='btn btn-danger'><a href='delete.php?Id=$id'class='text-light'>delete</a></button></td>"  ;
                       echo"</tr>";
               }echo"</table>";
               

    }
          }
          
                 
          ?>