<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html><?php session_start();?>
    <head>
        
          <meta charset="UTF-8" name = "viewport" content = "width = device-width, initial-scale=1">     
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
        
       
        <title></title>
        <STYLE>
            .row{
                background:#d46687 ;
                color:white;
            }
                    .glyphicon-user{
                margin-top: 25px;
                    }
                    
                   .nav navbar-nav ul li
                    {
                        color:white;
                    }
                    
        </STYLE>
    </head>
    <body>
        <div class="row ">
            <div class="col-sm-8"><H3>Admin Panel</H3>
            </div>
            <div class="col-sm-4 "><form>
         <label>       <b class="glyphicon glyphicon-user"></b>
               <?php echo  $_SESSION['user'];?> |</label> <font color='brown'><input type="submit"name="logout"value="logout"class="sub">  </form>
                 </font>  <?php if(isset($_GET['logout']))
                   {     session_destroy();     header('location:home.php');}
                   ?>
            </div>
        </div>
       <nav class="navbar">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="add.php">Add</a></li>
      <li><a href="edit_product.php">Edit</a></li>
      <li><a href="view.php">Sales</a></li>
    </ul>
  </div>
</nav>
.     
    </body>
</html>
