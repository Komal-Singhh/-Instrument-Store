<?php
session_start();
if (isset($_POST['btnaddress'])) {
    header("location:p_payment.php");
}
?>

<html>
    <head> <meta name = "viewport" content = "width = device-width, initial-scale=1">     
        <style>

            label {

                font-size:large;
                font-weight:bold;
                font-style:bold;
                
            }

            #btn{
                width:500px;
                height:70px;
                background-color:greenyellow;
                color:white;
                font-weight:bold;
                font-style:italic;
                border-radius:30px;
                padding-left:250;
            }
            .ab{
                margin:auto;
                text:large;
            }
            .box
            {
                color:blue;
                background-color:#e7f2e6; 
                height:650px;
            }

        </style>   

        <link rel = "stylesheet" href = "footer.css"/>    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
        <link rel='stylesheet'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>    
        <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>    

    </head>
    <body>
    
        <?php include_once("header.php") ?>
        <form method="post" action='payment.php'><br><br>
            <center> <font color='red'><h2>Billing Address</h2></font></center>
            <div class="row g-2""box">
                <div class=" ab box col-6 mb-3 quick">
                    <div class="p-3 border"><br>
                        <?php
                        $link = mysqli_connect("localhost", "root", "", "project");
                        $qry = "select * FROM register_user where id=$_SESSION[user_id]";
                        $res = mysqli_query($link, $qry);
                        if (mysqli_num_rows($res) > 0)
                            $result = $res;
                        while ($row = mysqli_fetch_array($result)) {
                            ?><center>
                            <div class ="ab">
                                
                                <label >Name</label>
                                <br><input type="text"name="txtname" required style="border:2px solid blue;width:500;height:40;border-radius:25px;padding-left: 50px;" value="<?php echo $row['username']; ?>">
                                <br>
                                <label>Phone No.</label>
                                <br><input type="text"name="txtphone"max="10" required style="border:2px solid blue;width:500;height:40;border-radius:25px;padding-left: 50px;"value="<?php
                                echo $row['mobile'];
                            }
                            ?>">
                                       <?php
                                       if (isset($_POST['btnaddress'])) {
                                           $link = mysqli_connect("localhost", "root", "", "project");
                                           $add = $_POST["txtadd"];
                                           $pin_code = $_POST["txtpincode"];
                                           $state = $_POST["txtstate"];
                                           $city = $_POST["txtcity"];
                                           $phone = $_POST["txtphone"];
                                           $id = $_SESSION['user_id'];
                                           $link = mysqli_connect("localhost", "root", "", "project");
                                           $add = $_POST["txtadd"];
                                           $pin_code = $_POST["txtpincode"];
                                           $state = $_POST["txtstate"];
                                           $city = $_POST["txtcity"];
                                           $phone = $_POST["txtphone"];
                                           $id = $_SESSION['user_id'];
                                           $qryy = "UPDATE register_user SET address = '$add',mobile = '$phone',pin_code =$pin_code,state = '$state',city= '$city' WHERE id = $id";
                                           $r = mysqli_query($link, $qryy);
                                           if ($r) {
                                               echo"<script type=text/javascript>window.location.href='order_summary.php'</script>";
                                            } else {
                                               echo"<script type=text/javascript>alert('Address not added');</script>";
                                           }
                                       }
                                       ?>
                            <br><label>Pin Code</label>

                            <br><input type="text"name="txtpincode"required style="border:2px solid blue;width:500;height:40;border-radius:25px;padding-left: 50px;">
                            <br><label>Address</label>
                            <br><input type="text"name="txtadd" required style="border:2px solid blue;width:500;height:40;border-radius:25px;padding-left: 50px;"><br>
                            <label>State</label>
                            <br><input type="text"name="txtstate"style="border:2px solid blue;width:500;height:40;border-radius:25px;padding-left: 50px;"><br>
                            <label>City</label>
                            <br><input type="text"name="txtcity" style="border:2px solid blue;width:500;height:40;border-radius:25px;padding-left: 50px;"required><br>
                             </div>
                                 </center>
                    </div>
                </div>
            </div>
             <center>
            <div style="width:51%;">
                <div class="p-4 border '"><input type="submit"name="btnaddress" id="btn"class='bg-success' style="color:whitesmoke;width:30%;padding:12px 20px;border:2px solid;margin-left:18px;background-color:#509ea1;border-style:outset;font-size:23px;"value="Continue"></div>
            </div>
            </center>
        </form>
    
</body>
</html>
