<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <script>

            function findCity() {

                var val1=document.form1.txt_state.value;
                var strURL = "state.php?snm="+val1;
                
                var xmlHttpObj = new XMLHttpRequest();

                if (xmlHttpObj)
                {
                    xmlHttpObj.onreadystatechange = function () {
                        if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                        {
                            var sel = document.getElementById("citylist");
                            sel.innerHTML = xmlHttpObj.responseText;
                        }

                    }
                    xmlHttpObj.open("GET", strURL, true);
                    xmlHttpObj.send(null);
                }
            }
        </script>




    </head>

    <body bgcolor="aqua">

        <form method="post" action="" name="form1" >
            <table width="400px" border="5" align="center" cellpadding="5">
                <tr>
                    <td>Enter Name to Search</td>
                    <td><input type="text" name="txt_state" onkeyup="findCity()" list="datalist" autocomplete="off"  >
                        <datalist id="datalist">    
<?php
$link=mysqli_connect("localhost","root","","project");
$qry="select state_name from state_master";
$resultset=mysqli_query($link,$qry);
while($row=mysqli_fetch_row($resultset))
{echo "<option>",$row[0],"<option>";
}



?>
                        </datalist>


                     </td>
                               <td><input type="text" name="txt_city"  list="citylist" autocomplete="off"  >
                        <datalist id="citylist">
                            
                            
                            
                            
                            
                        </datalist>   
                            </td>
                </tr>

            </table>
        </form>
    </body>
</html>
