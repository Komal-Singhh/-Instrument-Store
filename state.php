<?php

$snm=$_GET['snm'];
$link=mysqli_connect("localhost","root","","project");
$qry="select city_name from city_master where state_id=(select state_id from state_master where state_name='$snm')";
$resultset=mysqli_query($link,$qry);
while($row=mysqli_fetch_row($resultset))
{echo "<option>",$row[0],"<option>";
}



?>