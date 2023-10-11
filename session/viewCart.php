<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <script type="text/javascript">
            function delete_from_cart(pro_id)
            {
            var strURL = "add_to_cart.php";
            strURL = strURL + "?did=" + pro_id;
            var xmlHttpObj = new XMLHttpRequest();
            if (xmlHttpObj)
            {
            xmlHttpObj.onreadystatechange = function ()
            {

            if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
            {
            alert(xmlHttpObj.responseText);
            window.location.reload();
            }
            }
            xmlHttpObj.open("GET", strURL, true);
            xmlHttpObj.send();
            }

            }
            function fun(qty, sid)
            {
            var v = document.getElementById("p_" + sid).textContent;
            var amount = qty * v;
            document.getElementById("a_" + sid).innerHTML = amount;
            total();
            }
            function total()
            {
            var total = document.getElementsByName("tot[]"); var t = 0;
            for (i = 0; i < total.length; i++)

            {
            t = t + parseInt((total[i].textContent));
            } document.getElementById("total_amount").innerHTML = "₹" + t;
            var tax = (t * 5) / 100;
            document.getElementById("tax").innerHTML = "₹" + tax;
            var shipping = 479;
            document.getElementById("ship").innerHTML = "₹" + shipping;
            var grandtotal = t + tax + shipping;
            document.getElementById("grand").innerHTML = "₹" + grandtotal;
            document.getElementById("h_grand").value = grandtotal;
            document.getElementById("h_ship").value = shipping;
            document.getElementById("h_tax").value = tax;
            document.getElementById("h_sub").value = t;
        
        var pro_id = document.frm.i_id.value;
            var ar = pro_id.split(",");
            var ok = "";
            for ( var i = 0; i < ar.length; i++)
            {
            var qr = "q_" + ar[i];
            var qtyy = document.getElementById(qr).value; 
            var final = qtyy;
            ok = ok + final + ','; 
            document.getElementById("put").value = ok;
            }
            var ins = document.frm.i_id.value;
           var d = ins.split(",");
           var ar1="";
        
          for (var k=0; k<total.length;k++)
            { ar1 = parseInt(total[k].textContent) ;
              document.getElementById("am_"+d[k]).value = ar1;    
              
           
            } 
            



            }

        </script>





        <style>* {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                background: #faf3a5;
                font-family: montserrat;
            }
            .wrapper {
                max-width: 1000px;
                margin: 0 auto;
            }
            .wrapper h1 {
                padding: 20px 0;
                text-align: center;
                text-transform: uppercase;
            }
            .project {
                display: flex;
            }
            .shop {
                flex: 75%;
            }
            .box {
                display: flex;
                width: 100%;
                height: 150px;
                overflow: hidden;
                margin-bottom: 20px;
                background: #fff;
                transition: all .6s ease;
                box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            }
            .box:hover {
                border: none;
                transform: scale(1.01);
            }
            .box img {
                width: 140px;
                height: 140px;
                object-fit: cover;
            }
            .content {
                padding: 20px;
                width: 100%;
                position: relative;
            }
            .content h3 {
                margin-bottom: 30px;
            }
            .content h4 {
                margin-bottom: 50px;
            }
            .btn-area {
                position: absolute;
                top: 10px;
                right: 10px;
                padding: 5px 10px;
                background-color: #e66260;
                color: white;
                cursor: pointer;
                font-weight: 100;
                border:none;
                border-radius: 5px;
            }
            .btn-area:hover {
                background-color: #d43533;
                color: #fff;
                font-weight: 600;
            }
            .unit input {
                width: 40px;
                padding: 5px;
                text-align: center;
            }

            .right-bar {
                flex: 25%;
                margin-left: 20px;
                padding: 20px;
                height: 400px;
                border-radius: 5px;
                background: #fff;
                box-shadow:rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            }
            .right-bar hr {
                margin-bottom: 25px;
            }
            .right-bar p {
                display: flex;
                justify-content: space-between;
                margin-bottom: 30px;
                font-size: 20px;
            }
            .right-bar a {
                background-color: #76bfb6;
                color: #fff;
                text-decoration: none;
                display:block;
                text-align: center;
                height: 40px;
                line-height: 40px;
                font-weight: 900;
            }
            .right-bar i {
                margin-right: 15px;
            }
            .right-bar a:hover {
                background-color: #3972a7;
            }
            @media screen and (max-width: 700px) {
                .content h3 {
                    margin-bottom: 15px;
                }
                .content h4 {
                    margin-bottom: 20px;
                }
                .btn2 {
                    display: none;
                }
                .box {
                    height: 150px;
                }
                .box img {
                    height: 150px;
                    width: 200px;
                }
            }
            @media screen and (max-width: 900px) {
                .project {
                    flex-direction: column;
                }
                .right-bar {
                    margin-left: 0;
                    margin-bottom: 20px;
                }
            }
            @media screen and (max-width: 1250px) {
                .wrapper {
                    max-width: 95%;
                }
            }</style>
        <meta charset="UTF-8">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="style.css" rel="stylesheet">
    </head>
    <body onload="total()"><form  name="frm"method="post"action="order_summary.php">
            <div class="wrapper">
                <h3>Shopping Cart</h3>
                <div class="project">
                    <div class="shop">
                        <?php
                        if (isset($_GET['v'])) {
                            $arr = $_SESSION['myCart'];

                            if (count($arr)) {

                                $a = implode("','", $arr);
                                //var_dump($a);
                                $link = mysqli_connect("localhost", "root", "", "project");
                                $qry = "select * from product where ins_id in ('$a')";
                                $resultset = mysqli_query($link, $qry);
                                echo"<input type='hidden'name='i_id'value=" . implode(",", $arr) . ">";
                                echo"<input type='hidden' name='isha'id='put'>";
                                
                                while ($row = mysqli_fetch_array($resultset)) {
                                    ?> 


                                    <div class="box">
                                        <img src="Product_image/<?php echo "$row[ins_image]"; ?>"width='500PX'height='500PX'>
                                        <div class="content">
                                            <h6><?php echo" $row[ins_name]"; ?></h6><input type='hidden' name='<?php echo "$row[ins_id]"; ?>'id='am_<?php echo "$row[ins_id]"; ?>'>
                                            <small>₹<span id="p_<?php echo "$row[ins_id]"; ?>"><?php echo "$row[curr_price]"; ?></span></small>
                                            <p class="unit">Quantity: <input  type='number' value="1"id="q_<?php echo "$row[ins_id]"; ?>"onchange=fun(this.value,<?php echo "\"$row[ins_id]\""; ?>) MIN="1"MAX="4"></p>
                                            <button class="btn-area"onclick=delete_from_cart(<?php echo "\"$row[ins_id]\""; ?>)><i aria-hidden="true" class="fa fa-trash"></i> <span class="btn2"></span></button>
                                            <p>Amount: ₹<span name="tot[]" id="a_<?php echo "$row[ins_id]"; ?>">
            <?php echo "$row[curr_price]"; ?></span></P>	
                                        </div>	
                                    </div>
                                    <?php
                                }echo '</DIV>';
                            } else {
                                echo"<center>Your Cart Is Empty</center><center><img src='sad.png'width='200px'height='200px'></center>";
                            }
                        }
                        ?>	
                        <div class="right-bar">
                            <p><span>Subtotal:</span> <span name="sub_total" id="total_amount"></span></p>
                            <hr><input type="hidden"name="sub_total"id="h_sub"/>
                            <p><span >Tax (5%)</span> <span  name="tax_amount"id="tax"></span></p>
                            <hr><input type="hidden"name="tax"id="h_tax"/><input type="hidden"name="ship"id="h_ship"/>
                            <p><span>Shipping</span> <span  name="ship_amount"id="ship"></span></p>
                            <hr><input type="hidden"name="grand_total"id="h_grand"value="kkk"/>
                            <p><span>Total</span> <span  id="grand"></span></p><a href="order_summary.php"><input type="submit"name="btnsubmit" class="fa fa-shopping-cart bg-success" value="CheckOut">
                        </a></div>

                    </div> 
                </div>


        </form></body>
</html>


