<?php
$link = mysqli_connect("localhost", "root", "", "project");
$qry = "select ins_category, count(*) as no from product group by ins_category";
$r = mysqli_query($link, $qry);
?><html>
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
<?php
while ($row = mysqli_fetch_assoc($r)) {
    echo "['" . $row['ins_category'] . "'," . $row['no'] . "],";
}
?>
                        ], false);
                var options = {
                    'title': "PIN",
                    "is3D": true,
                    "width": 500,
                    'height': 500
                };
                var chart = new google.visualization.PieChart(document.getElementById("graph_div"));
                // var chart = new google.visualization.BarChart(document.getElementById("graph_div"));
                // var chart = new google.visualization.ColumnChart(document.getElementById("graph_div"));
                chart.draw(data, options);
            }
        </script>
    </head>
    <BODY>
        <div id ="graph_div">

        </div>


    </BODY>
</html>
