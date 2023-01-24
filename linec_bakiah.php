<!DOCTYPE html>
<head>
<title>KPI</title>
<style>
body {
  background-image: url("kpi_lec2.png");

}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: purple;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: orangered;
}

li.dropdown {
  display: inline-block;
}

.active{
  background-color: mediumpurple;
  color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: blueviolet;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>

<center>
    <img src="USM LOGO.png" width="80" height="45" alt="">
    <img src="APEX.png" width="80" height="42" alt="">
    <img src="IPPT.png" width="80" height="42" alt="">
</center>


<ul>
  <li><a href="bakiah_kpi.php">HOME</a></li>
  <li class="dropdown">
    <a class="active" href="javascript:void(0)" class="dropbtn">KEY PERFORMANCE INDICATOR(KPI)</a>
    <div class="dropdown-content">
      <a href="linec_bakiah.php">Whole Number</a>
      <a href="columnb_bakiah.php">Percentage</a>
    </div>
  </li>
</ul>

</style>

<br>
<table border="5">
 <tr>
    <th></th>
    <th>TOTAL</th>
  </tr>
<tr>
  <td style="width: 300px"><b>TOTAL WORKLOAD ACADEMIC</td>
  <td style="width: 100px"><center><b>613</b></center></td>
</tr>
<tr>
  <td><b>TOTAL WORKLOAD RESEARCH</b></td>
  <td><center><b>299</b></center></td>
</tr>
<tr>
  <td><b>TOTAL WORKLOAD CLINICAL</b></td>
  <td><center><b>656</b></center></td>
</tr>
<tr>
  <td><b>TOTAL WORKLOAD ADMIN</b></td>
  <td><center><b>0</b></center></td>
  <td width="50">0</td>
</tr>
<tr>
  <td ><b>TOTAL WORKLOAD IN IPPT</b></td>
  <td><center><b>1568</b></center></td>
</tr>
</table>

<br>
<?php
require "config_cline.php";// Database connection
$query="SELECT section_type,marks
 FROM chart_line_bakiah";
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
    for(i=0;i<my_2d.length;i++)
data.addRow([my_2d[i][0],parseInt(my_2d[i][1])]);
var options = {
 title: 'LECTURER KPI FOR DR.BAKIAH',
 curveType: 'function',
width: 500,
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


</head>
</html>