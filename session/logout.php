<?php
 session_start(); 
 ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
 session_abort();
 header("location:/major_product/home.php");
        ?>
    </body>
</html>
