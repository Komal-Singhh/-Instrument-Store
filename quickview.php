<html>
    <head></head>
    <body>
        <?php
        $product_id = $_POST['pid'];
        $link = mysqli_connect("localhost", "root", "", "project");
        $qry = "select * FROM product where ins_id='$product_id'";
        $r = mysqli_query($link, $qry);
        while ($row = mysqli_fetch_array($r)) {
            ?>        
            <div class="row"><div class="col-sm-6"><img src="Product_image/<?php echo $row['ins_image']; ?>"width="411px"height="411px">
                </div>
                <div class="col-sm-6">
                    <h1><?php echo $row['ins_name']; ?></h1>
                    <h3 ><input type="text"name="btnadd"value="<?php echo $row['ins_brand']; ?>"></h3>
                    <h2>Brand:<?php echo $row['ins_brand']; ?></h2>
                    <br><!-- comment -->
                    <small><s>₹<?php echo $row['prev_price']; ?>&nbsp&nbsp</s></small><span class='price'>  ₹<?php echo $row['curr_price']; ?></span>
                    <p><?php echo $row['description']; ?>
                    </p> 
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button"data-id="<?PHP echo $row['ins_id']; ?>" name="add"class="add btn btn-warning"onclick="check()">ADD TO CART</a><i class="fas fa-shopping-cart"></i></button>
                </div>

            <?php } ?>


        </div>




    </body>

</html>







