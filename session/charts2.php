<html>
    <head>
        <script src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawchart);
            function drawchart( )
            {
                //var data= new google.visualization.DataTable();
                var data = new google.visualization.arrayToDataTable(
                        [["topping", "Slices"],
                    ["Mozilla cheese", 4],
                            ["Olives", 5],
                            ["Zucchini", 1],
                            ["Pepperoni", 2]],
                        false);
                var options = {
                    'title': "PIN",
                    "is3D": true,
                    "width": 500,
                    'height': 500
                };
                var chart = new google.visualization.PieChart(document.getElementById("graph_div"));
                chart.draw(data, options);
            }
        </script>
    </head>
    <BODY>
        <div id ="graph_div">

        </div>


    </BODY>
</html>
<?php
?>