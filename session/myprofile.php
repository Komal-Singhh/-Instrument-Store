        <?php
        session_start();
 include_once 'header.php';
        ?>





<html>
    <head>
        <meta charset="UTF-8">
             
                  <link rel = "stylesheet" href = "footer.css"/>    
                   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
<link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    
        <title></title>
    </head>
    <body>
        <?php
        $link= mysqli_connect("localhost","root","","project");
        $qry="select * from register_user where id=".$_SESSION['user_id'];
        $r= mysqli_query($link, $qry);
        while ($row = mysqli_fetch_array($r)) {
         
        ?>
        <div class="card mx-auto" style="width:400px">
  <img class="card-img-top" src="userprofile.jpg" alt="Card image" width="300px"height="300px">
  <div class="card-body bg-light">
    <h4 class="card-title"><?php echo $_SESSION['user'];?></h4>
    <p class="card-text">Email-id-:<?php    echo $row['email'];?>
    </p>
    <p class="card-text">Mobile-no-:<?php    echo $row['mobile'];?>
    </p>
    <p class="card-text">Address-:<?php    echo $row['address']."<br>";
                                                    echo $row['city']."<br>";
                                                       echo $row['state']."<br>";
        echo $row['pin_code'];}
                                                   ?>
    </p>
    
    
    <a href="editprofile.php" class="btn btn-primary">Edit</a>
  </div>
</div>
    </body>
</html>

