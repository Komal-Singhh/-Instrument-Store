<?php
session_start();

if (isset($_POST['btnfinal'])) {
    $link = mysqli_connect("localhost", "root", "", "project");
    $add = $_POST["txtadd"];
    $pin_code = $_POST["txtpincode"];
    $state = $_POST["txtstate"];
    $city = $_POST["txtcity"];
    $id = $_SESSION['user_id'];
    $qry = "insert into order_table(user_id,pro_id,quantity,total_price,per_price,address,pin_code,state,city)values($id,'$_SESSION[pro_id]','$_SESSION[qty]',$_SESSION[total],'$_SESSION[per_price]','$add',$pin_code,'$state','$city')";
    $res = mysqli_query($link, $qry);
    if ($res) {
        header("location:confirm.php");
    } else {
        echo "not okk";
    }
}
?>





<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

            *{
                font-family: 'Poppins', sans-serif;
                margin:0;
                padding:0;
                box-sizing: border-box;
                outline: none;
                border:none;
                text-transform: capitalize;
                transition: all .2s linear;
            }

            .container{
                display: flex;
                justify-content: center;
                align-items: center;
                padding:25px;
                min-height: 100vh;
                background-color:#faf3a5;
            }

            .container form{
                padding:20px;
                width:700px;
                background: #fff;
                box-shadow: 0 5px 10px rgba(0,0,0,.1);
            }

            .container form .row{
                display: flex;
                flex-wrap: wrap;
                gap:15px;
            }

            .container form .row .col{
                flex:1 1 250px;
            }

            .container form .row .col .title{
                font-size: 20px;
                color:#333;
                padding-bottom: 5px;
                text-transform: uppercase;
            }

            .container form .row .col .inputBox{
                margin:15px 0;
            }

            .container form .row .col .inputBox span{
                margin-bottom: 10px;
                display: block;
            }

            .container form .row .col .inputBox input{
                width: 100%;
                border:1px solid #ccc;
                padding:10px 15px;
                font-size: 15px;
                text-transform: none;
            }

            .container form .row .col .inputBox input:focus{
                border:1px solid #000;
            }

            .container form .row .col .flex{
                display: flex;
                gap:15px;
            }

            .container form .row .col .flex .inputBox{
                margin-top: 5px;
            }

            .container form .row .col .inputBox img{
                height: 34px;
                margin-top: 5px;
                filter: drop-shadow(0 0 1px #000);
            }

            .container form .submit-btn{
                width: 100%;
                padding:12px;
                font-size: 17px;
                background: #27ae60;
                color:#fff;
                margin-top: 5px;
                cursor: pointer;
            }

            .container form .submit-btn:hover{
                background: #2ecc71;
            }



        </style>

    </head>
    <body> 


        <div class="container">
            <form  method="post"class='form'>

                <div class="row">

                    <div class="col">

                        <h3 class="title">Billing address</h3>

                        <div class="inputBox">
                            <span accesskey="">full name :</span>
                            <input type="text" placeholder="john deo"name='txtname'required>
                        </div>
                        <div class="inputBox">
                            <span>address :</span>
                            <input type="text" placeholder="room - street - locality"name="txtadd"required>
                        </div>
                        <div class="inputBox">
                            <span>city :</span>
                            <input type="text" placeholder="mumbai"name="txtcity"required>
                        </div>

                        <div class="flex">
                            <div class="inputBox">
                                <span>state :</span>
                                <input type="text" placeholder="india"name="txtstate"required>
                            </div>
                            <div class="inputBox">
                                <span>zip code :</span>
                                <input type="text" placeholder="123 456"name="txtpincode"required>
                            </div>
                        </div>

                    </div>

                    <div class="col">

                        <h3 class="title">Payment Options</h3>
                        <font color='#2b5c6e'> <input type="radio"name="r"value="cash"checked>Cash On Delivery</font>
                        <img src="del.jpg" alt=""width='316px'height='443px'/>
                        <input type="submit" value="Place Order" class="submit-btn"name="btnfinal">


                    </div>

                </div></form>
        </div>


    </body>
</html>
