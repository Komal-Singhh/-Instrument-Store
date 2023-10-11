<?php

$product_id=$_GET['Id'];if(isset($_POST['btnsubmit']))
                       {
                           $link= mysqli_connect("localhost","root","","project");
        $id =$_POST["ins_id"];
        $name=$_POST["ins_name"];
        $prev=$_POST["txtprev"];
        $curr=$_POST["txtcrt"];
        $avail=$_POST["ins_avail"];
        $desc=$_POST["desc"];
        $rat=$_POST["ratings"];
        $qty=$_POST["ins_qty"];
        $category=$_POST["ins_category"];       
        $brand=$_POST["ins_brand"];
        
    $fnm=$_FILES["img"]["name"];
    $dst=$_SERVER["DOCUMENT_ROOT"]."/major_product/"."/Product_image/".$fnm;
    $img="/Product_image/".$fnm;
    move_uploaded_file($_FILES["img"]["tmp_name"],$dst);
    $qryy="UPDATE product SET ins_id = '$id',ins_name = '$name',prev_price = $prev,curr_price = $curr,available = '$avail',description= '$desc',ratings= $rat,ins_qty= $qty,ins_category= '$category',ins_brand= '$brand' WHERE ins_id = '$product_id'";
       $r= mysqli_query($link, $qryy);
   
   
   if($r)
   
   
   { echo'<script>alert("succesfully Updated");</script>';
       }
    
  else
    { echo '<script>alert("unable to update Please try again!!");</script>';}
    mysqli_close($link);
            
    }
 $link= mysqli_connect("localhost","root","","project");
    $qry="select * FROM product where ins_id='$product_id'";
    $r=mysqli_query($link,$qry); 
    if(mysqli_num_rows($r)>0)
           $result=$r;
    while($row=mysqli_fetch_array($result))
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
          
    if(isset($_POST['btncancel']))
    {
        header("location:admin_panel.php");
    }
?>






<html>
    <head><style>
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
                        border-color:#cc3370;background-color:#d3dbb8;color:#de2f86;
                    cell-spacing:5px;
                    
                }
                
                td{font-size:22px;
                    padding-left: 20px;
                }
                input type{font-size:42px;
                    padding-left: 30px;
                    
                }
                
         </style>
    
     </head>
     <body>
     <div class="center">
         <h1>Update Instruments</h1>
         <form name="frm" method="post"enctype="multipart/form-data">
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
         
         
         
     </body>
 </html>