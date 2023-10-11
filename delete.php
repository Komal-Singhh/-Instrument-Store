<html><?php $product_id=$_GET['Id'];
    $lin= mysqli_connect("localhost","root","","project");$qry="select * FROM product where ins_id='$product_id'";
    $r=mysqli_query($lin 
            ,$qry); 
    if(mysqli_num_rows($r)>0)
           
    while($row=mysqli_fetch_array($r))
               {      
                      $p_id= $row['ins_id'];
                      $p_name= $row['ins_name'];
               
                      $p_prev=$row['prev_price'];
                      $p_curr=$row['curr_price'];
                       $p_avail=$row['available'];
                       $p_ratings=$row['ratings'];
                       $p_qty=$row['ins_qty'];
                       $p_cat=$row['ins_category'];
                       $p_brand=$row['ins_brand'];
                       $p_img=$row['ins_image'];
                        $p_desc=$row['description'];
                       }
          
    if(isset($_POST['btnsubmit']))
    {
    $link= mysqli_connect("localhost","root","","project");
    $qr="delete from product where ins_id='$product_id'";
       $res=mysqli_query($link,$qr);
       if($res)
       {
           echo"<script>alert('You have deleted the product successfully!!');</script>";
       }
       else{
           echo"<script>alert('Product is not deleted Please try again!!');</script>";
       }
    }
    if(isset($_POST['btncancel']))
    {
        header("location:admin_panel.php");
    }

?>
    <head>    
            <script type="text/javascript">
                function fun()
                {
                    alert("Are you sure you want to delete this product");
                }
                </script><style>
            center{
                width:50%;
                border-color: yellowgreen;
                border-decoration:solid;
                     }
            h1{
                color:red;
                text-align:center;
                }
                 table{
                    width:50%;height: 700px;margin-left: 25%;margin-right:15%;
                    border:2px  outset;border-style: dotted solid;font-weight:bolder;
                        border-color:#cc3370;background-color:#8f6260;color:#ede89f;
                    cell-spacing:5px;
                    
                }
                
                td{font-size:22px;
                    padding-left: 20px;
                }
                input type{font-size:42px;
                    padding-left: 30px;
                    
                }
                
         </style>
   
    </head><!-- comment -->
    <body>
        <div class="center">
         <h1>Delete Instrument</h1>
         <form name="frm" method="post"enctype="multipart/form-data"onsubmit="fun();">
                        <table>
                            <tr>
                                <td>Name
                                 </td>
                                 <td><input type="text"name="ins_name"value="<?php echo $p_name;?>">
                                  </td>
                                  
                             </tr>
                             <tr>
                             <td> Id
                                 </td>
                                 <td><input type="text"name="ins_id"value="<?php echo $p_id;?>">
                                  </td>
                                 </tr>
                                   <tr>
                                  <td> Quantity
                                </td>
                                <td><input type="text"name="ins_qty"value="<?php echo $p_qty;?>">
                                </td>
                                </tr>
                                <tr>
                                <td> Image
                               </td>
                              <td><input type="file"name="img"value="<?php echo $p_img;?>">
                              </td>
                              </tr>
                              <tr>
                             <td> Category
                             </td>
                                 <td><input type="text"name="ins_category"value="<?php echo $p_cat;?>">
                               </td>
                               </tr>
                                <tr>
                                    <td> Brand
                              </td>
                              <td><input type="text"name="ins_brand"value="<?php echo $p_brand;?>">
                              </td>
                              </tr>
                              <tr>
                               <td>Previous Price
                              </td>
                              <td><input type="text"name="txtprev"value="<?php echo $p_prev;?>">
                              </td>
                              </tr>
                              <tr>
                               <td>Current Price
                              </td>
                              <td><input type="text"name="txtcrt"value="<?php echo $p_curr;?>">
                              </td>
                              </tr>
                              <tr>
                               <td>Ratings
                              </td>
                              <td><input type="number"name="ratings"value="<?php echo $p_ratings;?>">
                              </td>
                              </tr>
                                <tr>
                             <td>Availability
                             </td>
                                 <td><input type="text"name="ins_avail"value="<?php echo $p_avail;?>"></td>
                               </tr>
                       <tr>
                               <td>Description
                              </td>
                              <td><input type="text"name="desc"value="<?php echo $p_desc;?>">
                              </td>
                              </tr>
                              
                              <tr>
                              <td colspan="2"align="center">
                             <input type="submit"name="btnsubmit" value="Update">
                             <input type="submit"name="btncancel" value="Cancel">
                           </td>
                          </tr>
                             </table>
                    </form>
                    
        </div>    
         
         
         
    </body><!-- comment -->
    </html>