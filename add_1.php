<!DOCTYPE html>
<?php
include"admin_panel.php";
$img="";
if(isset($_POST["btnsubmit"]))
{$link= mysqli_connect("localhost","root","","project");
        $id =$_POST["ins_id"];
        $name=$_POST["ins_name"];
        $price=$_POST["ins_price"];
        $qty=$_POST["ins_qty"];
        $category=$_POST["ins_category"];        $image=$_POST["ins_image"];
        $brand=$_POST["ins_brand"];
        
    $fnm=$_FILES["ins_image"]["name"];
    $dst=$_SERVER["DOCUMENT_ROOT"]."/Product_image/".$fnm;
    $img="/Product_image/".$fnm;
    move_uploaded_file($_FILES["ins_image"]["tmp_name"],$dst);
    $qry="insert into product values('$id','$name','$price','$qty','$fnm' ,'$category','$brand')";
       $r= mysqli_query($link, $qry);
   echo $qry;
   
   if($r)
   
   
   { echo"<script> alert('Instrument add to the database'')</script>";}
    
  else
    { echo"<script> alert('Not Added ')</script>";}
    mysqli_close($link);
            
    
}
?>

<html>
    <head><style>
        .block
        {
            background-color: #d46687;
            color:white;
           
        }
        </style>
        <meta charset="UTF-8">
        
        <title></title>
    </head>
    <body>
        <div class="grid_10 ">
            <div class="box round first">
                <div class="block"><fieldset><legend>Add</legend>
                    <form name="frm" method="post"enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Instrument Name
                                 </td>
                                 <td><input type="text"name="ins_name">
                                  </td>
                                  
                             </tr>
                             <tr>
                             <td>Instrument Id
                                 </td>
                                 <td><input type="text"name="ins_id">
                                  </td>
                                 </tr><tr> <td>Instrument Price
                                 </td>
                                 <td><input type="text"name="ins_price">
                                  </td></tr>
                                    <tr>
                             <td>Product Quantity
                                 </td>
                                 <td><input type="text"name="ins_qty">
                                  </td>
                                 </tr>
                                     <tr>
                             <td>Instrument Image
                                 </td>
                                 <td><input type="file"name="ins_image">
                                  </td>
                                 </tr>
                                     <tr>
                             <td>Instrument Category
                                 </td>
                                 <td><select name="ins_category">
                                         <option disabled selected>~~select category~~</option>
                                         <option>Guitars</option>
                                         <option>Drums</option><!-- comment -->
                                         <option>Traditional Instrument</option><!-- comment -->
                                         <option>Home Audio</option>

                                         </select>
                                  </td>
                                     </tr><tr>
                             <td>Instrument Brand
                                 </td>
                                 <td><input type="text"name="ins_brand">
                                  </td>
                                 </tr>
                                        <tr>
                                            <td colspan="2"align="center">
                                                <input type="submit"name="btnsubmit">
                                             </td>
                                         </tr>
                        </table>
                    </form>
                    </fieldset>
                </div></div></div>
    </body><?php include 'footer.php';?>
</html>
