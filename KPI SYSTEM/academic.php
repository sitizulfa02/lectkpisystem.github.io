<!DOCTYPE html>
<html>
<head>
<style>

body {
  background-image: url("academic_bg.png");

}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
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
  <li><a class="active" href="academic.php">ACADEMIC GRAPH</a></li>
  <li><a href="sorted_academic.php">ACADEMIC TABLE</a></li>
</ul>

</body>
</html>

<?php
$con  = mysqli_connect("localhost","root","","kpi system");
 if (!$con) {
     # code...
    echo "Problem in database connection! Contact administrator!" . mysqli_error();
 }else{
         $sql ="SELECT * FROM academic";
         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) { 
 
            $Name[]  = $row['Name']  ;
            $Mark[] = $row['Mark'];
        }
 
 
 }
 
 
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ACADEMIC GRAPH</title> 
    </head>
    <body>
        <div style="width:100%;height:50%;text-align:center">
            <h2 class="page-header" >KPI LECTURER(PERCENTAGE) </h2>
            <div>ACADEMIC </div>
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
                        labels:<?php echo json_encode($Name); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#5969ff",
                                "#ff407b",
                                "#25d5f2",
                                "#ffc750",
                                "#2ec551",
                                "#7040fa",
                                "#ff004e",
                                "#A52A2A",
                                "#A9A9A9",
                                "#8B008B",
                                "#B22222",
                                "#FFD700",
                                "#66CDAA",
                                "#808000",
                                "#DDA0DD"
                            ],
                            data:<?php echo json_encode($Mark); ?>,
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
</html>