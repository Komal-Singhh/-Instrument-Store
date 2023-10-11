<html>
    <head>
 <?PHP   error_reporting(0);
if(isset($_POST["btnsubmit"]))
{$link= mysqli_connect("localhost","root","","project");
        $id =$_POST["ins_id"];
        $name=$_POST["ins_name"];
        $prev=$_POST["txtprev"];
        $curr=$_POST["txtcrt"];
        $avail=$_POST["ins-avail"];
        $desc=$_POST["desc"];
        $rat=$_POST["ratings"];
        $qty=$_POST["ins_qty"];
        $category=$_POST["ins_category"];        $image=$_POST["ins_image"];
        $brand=$_POST["ins_brand"];
        
    $fnm=$_FILES["ins_image"]["name"];
    $dst=$_SERVER["DOCUMENT_ROOT"]."/major_product/"."/Product_image/".$fnm;
    $img="/Product_image/".$fnm;
    move_uploaded_file($_FILES["ins_image"]["tmp_name"],$dst);
    $qry="insert into product values('$id','$name',$prev,$curr,'$avail','$desc',$rat,$qty,'$category','$fnm','$brand')";
       $r= mysqli_query($link, $qry);
   
   
   if($r)
   
   
   { echo"<script> alert('Instrument add to the database'') "
       . "</script>";}
    
  else
    { echo $qry;}
    mysqli_close($link);
            
    
}
?>
       <meta charset="UTF-8">
        <title></title><?php include './admin_panel.php';?>
        <style>
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
                        border-color:#cc3370;background-color:#99ffcc;color:#cc3370;
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
         <h1>Add Instruments</h1>
         <form name="frm" method="post"enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>Name
                                 </td>
                                 <td><input type="text"name="ins_name">
                                  </td>
                                  
                             </tr>
                             <tr>
                             <td> Id
                                 </td>
                                 <td><input type="text"name="ins_id">
                                  </td>
                                 </tr>
                                   <tr>
                                  <td> Quantity
                                </td>
                                <td><input type="text"name="ins_qty">
                                </td>
                                </tr>
                                <tr>
                                <td> Image
                               </td>
                              <td><input type="file"name="ins_image">
                              </td>
                              </tr>
                              <tr>
                             <td> Category
                             </td>
                                 <td><select name="ins_category">
                                         <option disabled selected>~~select category~~</option>
                                         <option>Guitars</option>
                                         <option>Drums</option><!-- comment -->
                                         <option>Traditional Instrument</option><!-- comment -->
                                         <option>Home Audio</option>

                                         </select>
                               </td>
                               </tr>
                                <tr>
                                    <td> Brand
                              </td>
                              <td><input type="text"name="ins_brand">
                              </td>
                              </tr>
                              <tr>
                               <td>Previous Price
                              </td>
                              <td><input type="text"name="txtprev">
                              </td>
                              </tr>
                              <tr>
                               <td>Current Price
                              </td>
                              <td><input type="text"name="txtcrt">
                              </td>
                              </tr>
                              <tr>
                               <td>Ratings
                              </td>
                              <td><input type="number"name="ratings">
                              </td>
                              </tr>
                                <tr>
                             <td>Availability
                             </td>
                                 <td><select name="ins_avail">
                                         <option disabled selected>~~select~~</option>
                                         <option>InStock</option>
                                         <option>SoldOut</option><!-- comment -->
                              
                                         </select>
                               </td>
                               </tr>
                       <tr>
                               <td>Description
                              </td>
                              <td><input type="text"name="desc">
                              </td>
                              </tr>
                              
                              <tr>
                              <td colspan="2"align="center">
                             <input type="submit"name="btnsubmit" value="Confirm">
                           </td>
                          </tr>
                             </table>
                    </form>
                    
        </div>    </body>
</html>
