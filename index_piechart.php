<!DOCTYPE html>
<html>
<head>
  <title>Creating dynamic data chart using PHP and Chart.js</title>
  <style type="text/css">
    BODY {
      width: 550PX;
    }

    #chart-container {
      width: 100%;
      height: auto;
    }
    .card {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
    }

    .card-body {
      -webkit-box-flex: 1;
      -ms-flex: 1 1 auto;
      flex: 1 1 auto;
      padding: 1.25rem;
    }
  </style>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
  <div class="card-body" >
    <p>How to create pie chart with Mysql dynamic data </p>
    <div class="card"  id="chart-container" >
      <canvas id="graphCanvas"></canvas>
    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        url: "data.php",
        method: "GET",
        success: function(data){
          console.log(data);
          var type = [];
          var marks = [];

          for (var i in data){
            type.push(data[i].section_type);

            marks.push(data[i].marks);
          }
          var chartdata = {
            labels: type,
            datasets: [{
              label: 'Marks',
              backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
              hoverBackgroundColor: 'rgba(230, 236, 235, 0.75)',
              hoverBorderColor: 'rgba(230, 236, 235, 0.75)',
              data: marks

            }]
          };
          var graphTarget = $("#graphCanvas");
          var barGraph = new Chart(graphTarget, {
            type: 'pie',
            data: chartdata,

          });
        },
        error: function(data) {
          console.log(data);
        }

      });
    });
  </script>

</body>
</html>