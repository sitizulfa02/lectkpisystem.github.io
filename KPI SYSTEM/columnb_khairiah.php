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
  <li><a href="khairiah_kpi.php">HOME</a></li>
  <li class="dropdown">
    <a class="active" href="javascript:void(0)" class="dropbtn">KEY PERFORMANCE INDICATOR(KPI)</a>
    <div class="dropdown-content">
      <a href="linec_khairiah.php">Whole Number</a>
      <a href="columnb_khairiah.php">Percentage</a>
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
  <td style="width: 100px"><center><b>3.7</b></center></td>
</tr>
<tr>
  <td><b>TOTAL WORKLOAD RESEARCH</b></td>
  <td><center><b>17.4</b></center></td>
</tr>
<tr>
  <td><b>TOTAL WORKLOAD CLINICAL</b></td>
  <td><center><b>10.6</b></center></td>
</tr>
<tr>
  <td><b>TOTAL WORKLOAD ADMIN</b></td>
  <td><center><b>80.0</b></center></td>
</tr>
<tr>
  <td ><b>TOTAL WORKLOAD IN IPPT</b></td>
  <td><center><b>111.7</b></center></td>
</tr>
</table>

<br>
<center>
<?php
$con  = mysqli_connect("localhost","root","","kpi system");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM chart_column_khairiah";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $sectiontype[]  = $row['sectiontype']  ;
            $percentage[] = $row['percentage'];
        }
 
 
 }
 
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GRAPH</title> 
    </head>
    <body>
        <div style="width:70%;height:50%;text-align:center">
            <h2 class="page-header" >LECTURER KPI(PERCENTAGE) </h2>
            <div>LECTURER KPI FOR DR.KHAIRIAH</div>
            <canvas  id="chartjs_bar"></canvas> 
        </div>    
    </body>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript">
      var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($sectiontype); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750"
                            ],
                            data:<?php echo json_encode($percentage); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
 
 
                }
                });
    </script>
 </center>
</html>