<?php 
 ?>
<html>
    <head>     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
        <link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 

        <style>
            .table
            {   color:#e36b10;
                border-color:red;
                margin-left: 41px;
                text-align: justify-all;
                width:4347px;
            }
            .submit_field
            {
                
                color:white;
                border:none;
                padding:21px;
                text-decoration:none;
                display:inline-block;
                font-size: 15px;
                
                margin: 4px 2px;
                border-radius: 12px;
            }
            content
            {
            overflow: auto;
            width:600px;
            background: graytext;
            }
            left
            {
                width: 50%;
                float: left;
                margin:5px;
                padding:1em;
                background: white;
            }
            right
            {
                width: 50%;
                float:right;
                margin-left:45px;
                color:red;
                padding:1em;
                background:pink;
            }
            .para
          { color:#e36b10;
            font-weight: bolder;
            margin-left:800px;
            font-size:30px;
            
          }
       
        </style>
        <script type='text/javascript'>


        </script>


    </head>
    <body><form  name="frm" method="post" action="payment.php">
            <h2> Review Your Order</h2>
            <div class="content">
                <div class="left">

                    <table class="table table-bordered">
                        <th>Product Details</th>
                        <th></th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <hr size="1">  
                        <?php session_start();
                        $link = mysqli_connect("localhost", "root", "", "project");
                        $qty = explode(',', $_POST['isha']);
                        $con = explode(',', $_POST['i_id']);
                        $id = implode(',', $con);
                        $quantity = implode(',', $qty);
                        $_SESSION['qty'] = $_POST['isha'];
                        $_SESSION['pro_id'] = $id;
                        $_SESSION['total'] = $_POST['grand_total'];
                        $k = 0;
                        $i = 0;
                        $j = 0;
                        $price = array();
                        while ($k < count($con)) {
                            $qry = "select * from product where ins_id ='" . $con[$k++] . "'";
                            $r = mysqli_query($link, $qry);
                            while ($row = mysqli_fetch_array($r)) {
                                $id = $row['ins_id'];
                                echo "<tr><td><img src='product_image/" . $row['ins_image'] . "'width='100px'height='100px'></td>";
                                echo "<td>" . $row['ins_name'] . "</td>";
                                echo "<td>" . $qty[$j++] . "</td><td>₹" . $row['curr_price'] . "</td>";
                                $calc = $row['curr_price'] * $qty[$i++];
                                array_push($price, $row['curr_price']);
                                echo "<td>₹" . $calc . "</td></tr>";
                            }
                        }$_SESSION['per_price'] = implode(",", $price);
                        ?>
                    </table>
                </div>

                <div class="right">

      <table class="para table-sm">
 <tr>
     <td> Sub_total:</td>
     <td>₹<?php echo $_POST['sub_total']; ?></td>
 </tr>
 <tr>
     <td>Shipping Charges:</td>
     <td>₹<?php echo $_POST['ship']; ?></td>
 </tr>
  <tr>
     <td>Tax(5%):</td>
     <td>₹<?php echo $_POST['tax']; ?></td>
 </tr>
 <tr>
     <td>Total:</td>
     <td>₹<?php echo $_POST['grand_total']; ?></td>
 </tr>
 <tr>
     <td>
<center>         <input type="submit"name="btncontinue"value="Continue"class="btn-success submit_field"onclick='fun()'></center>
     </td>
 </tr>
</table>

                
                
                
                
                
                
                
                </div>
            </div>
        </form>
    </body>
</html>
