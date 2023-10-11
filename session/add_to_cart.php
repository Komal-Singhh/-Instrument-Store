<?php error_reporting(0); 
session_start();
$product_id=$_GET['id'];
//echo $product_id;
if(isset($_GET['id']))
{
    $c=0;
    $arr=$_SESSION['myCart'];
    if(!in_array($product_id,$arr))     
     {
       array_push($arr,$product_id); 
       
       $c=1;
     } 
     
     $_SESSION['myCart']=$arr;
     echo $c;
if($c)
{
    $arr=$_SESSION['myCart'];    
    $a=implode(",",$arr);
    $link=mysqli_connect("localhost","root","","project");
    $qry="update register_user set mycart='$a' where id=$_SESSION[user_id] ";
    mysqli_query($link,$qry);


}}
if(isset($_GET['did']))
{
    $c=1;
    $arr=$_SESSION['myCart'];
    
    unset($arr[array_search($_GET['did'] , $arr)]);
      
    $arr = array_values($arr);
    $_SESSION['myCart']=$arr; 
    
    echo "Product Deleted...";
    
}

?>    
    
