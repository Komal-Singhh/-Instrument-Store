<?php

$id = $_GET['id'];

if (strlen($id) > 1) {
    $link = mysqli_connect('localhost', 'root', '', 'project');
    $query = "SELECT ins_name FROM product where ins_id  = $id ";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_row($result)) {
        echo $row;
    }
}
?> 


