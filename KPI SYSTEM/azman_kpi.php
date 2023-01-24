<!DOCTYPE html>
<html>
<head>
<title>DR. MD AZMAN</title>
<style>
body {
  background-image: url("kpi_lec.jpeg");

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
  <li><a class="active" href="azman_kpi.php">HOME</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">KEY PERFORMANCE INDICATOR(KPI)</a>
    <div class="dropdown-content">
      <a href="linec_azman.php">Whole Number</a>
      <a href="columnb_azman.php">Percentage</a>
    </div>
  </li>
</ul>
<p>

<style>

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
</head>
<body>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="data_azman.php">EXCEL DATA(2019-2021)</a>
  </div>
</div>

<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;DATA EXCEL</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     
</body>
</html>

<p>
<center>
<table border="10">
<tr>
  <td rowspan='5' valign='top '><img src="azman.jpeg" width="150" height="203"></td>
  <td style="width:150px;height: 40px"><b>NAME:</b></td>
  <td style="width:600px;height: 40px"><b>ASSOCIATE PROFESSOR DR. MD AZMAN BIN PKM SEENI MOHAMED</b></td>
</tr>
<tr>
  <td><b>DEPARTMENT:</b></td>
  <td><b>TOXICOLOGY</b></td>
</tr>
<tr>
  <td><b>STAFF NUMBER:</b></td>
  <td><b>0416/08</b></td>
</tr>
<tr>
  <td><b>POSITION:</b></td>
  <td><b>UNIVERSITY LECTURER DS54</b></td>
</tr>
<tr>
  <td><b>EMAIL:</b></td>
  <td><b>azmanseeni@usm.my</b></td>
</tr>

</body>
</html>


