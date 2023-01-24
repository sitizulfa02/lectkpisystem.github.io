<!doctype>
<html>
<head>
<title>plus2net.com : Line chart using data from MySQL table</title>
</head>
<body >

<?Php
require "config_cpie.php";// Database connection
$query="SELECT section_type,marks,percentage
 FROM chart_data_line";
$step=$dbo->prepare($query);
if($step->execute()){
$php_data_array=$step->fetchAll();
//print_r($php_data_array);
echo "<script>
      var my_2d= ".json_encode($php_data_array)."
            </script>";
}
?>
<div id='curve_chart'></div>
<script type="text/javascript"
    src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
google.charts.load('current',{packages:['corechart']})
google.charts.setOnLoadCallback(drawChart);
function drawChart(){
    //var data=new google.visualization
    var data=new google.visualization.DataTable();
    data.addColumn('string','Section_type');
    data.addColumn('number','Marks');
    data.addColumn('number','Percentages');
    for(i=0;i<my_2d.length;i++)
data.addRow([my_2d[i][0],parseInt(my_2d[i][1]),parseInt(my_2d[i][2])]);

var options = {
 title: 'plus2net.com Sale Profit',
 curveType: 'function',
width: 800,
 height: 500,
     legend: { position: 'bottom' },
       animation:{'startup':true,
        duration: 5000,
        easing: 'out',
      },
 };
 var chart=new
 google.visualization.LineChart(document.getElementById('curve_chart'))
chart.draw(data,options);
}
</script>












</body></html>