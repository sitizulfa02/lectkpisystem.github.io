<!DOCTYPE html>
<html>
<head>
<title>KPI LECTURER</title>
<style>
body {
  background-image: url("kpi background.jpg");
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #38444d;
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
  background-color: mediumpurple;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
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
<center><h1>LECTURER KPI</h1></center>

<style>

.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-y: hidden;
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
  .overlay {overflow-y: auto;}
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
    <a href="lectform.html">Lecturer Form</a>
  </div>
</div>

<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776;FORM</span>

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
     
</body>
</html>

<p>
<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DEPT. BIOMEDICAL SCIENCE</a>
    <div class="dropdown-content">
      <a href="badrul_kpi.php" target="dropbtn">DR.BADRUL</a>
      <a href="bakiah_kpi.php" target="dropbtn">DR.BAKIAH</a>
      <a href="tanjj_kpi.php" target="dropbtn">DR.TAN JUN JIE</a>
      <a href="tangth_kpi.php" target="dropbtn">DR.TANG THEAN HOCK</a>
    </div>

    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DEPT. CLINICAL MEDICINE</a>
    <div class="dropdown-content">
      <a href="salmah_kpi.php" target="dropbtn">DR.SITI SALMAH</a>
      <a href="zarina_kpi.php" target="dropbtn">DR.ZARINA THASNEEM</a>
    </div>

    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DEPT. TOXICOLOGY</a>
    <div class="dropdown-content">
      <a href="azman_kpi.php" target="dropbtn">DR.MD AZMAN</a>
      <a href="lim_kpi.php" target="dropbtn">DR.LIM VUANGHAO</a>
    </div>

    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DEPT. DENTAL SCIENCE</a>
    <div class="dropdown-content">
      <a href="fatanah_kpi.php" target="dropbtn">DR.FATANAH</a>
      <a href="norehan_kpi.php" target="dropbtn">DR.NOREHAN</a>
      <a href="fazliah_kpi.php" target="dropbtn">DR.SITI NOOR FAZLIAH</a>
    </div>

    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DEPT. COMMUNITY HEALTH</a>
    <div class="dropdown-content">
      <a href="farris_kpi.php" target="dropbtn">DR.FARRIS IMAN</a>
      <a href="munir_kpi.php" target="dropbtn">DR.AHMAD MUNIR</a>
    </div>

    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">DEPT.BIOMEDICAL IMAGING</a>
    <div class="dropdown-content">
      <a href="khairiah_kpi.php" target="dropbtn">DR.KHAIRIAH</a>
      <a href="rafidah_kpi.php" target="dropbtn">DR.RAFIDAH</a>
    </div>

    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">OVERALL KPI SCORE </a>
    <div class="dropdown-content">
      <a href="ippt.php" target="dropbtn">OVERALL KPI GRAPH</a>
      <a href="sorted.php" target="dropbtn">OVERALL KPI TABLE</a>
    </div>
  </li>
</ul>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>LIST OF LECTURERS</h2>

<table>
  <tr>
    <th>DEPARTMENT BIOMEDICAL SCIENCE</th>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. BADRUL HISHAM BIN YAHAYA</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. BAKIAH BINTI SHAHARUDDIN</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. TAN JUN JIE</td>
  </tr>
  <tr>
    <td>PROFESSOR DR. TANG THEAN HOCK</td>
  </tr>
  <tr>
    <th>DEPARTMENT CLINICAL MEDICINE</th>
  </tr>
  <tr>
    <td>DR. SITI SALMAH BT NOORDIN</td>
  </tr>
  <tr>
    <td>DR. ZARINA THASNEEM BINTI ZAINUDEEN</td>
  </tr>
  <tr>
    <th>DEPARTMENT TOXICOLOGY</th>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. MD AZMAN BIN PKM SEENI MOHAMED</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. LIM VUANGHAO</td>
  </tr>
  <tr>
    <th>DEPARTMENT DENTAL SCIENCE</th>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR TS. DR. FATANAH BINTI MOHAMAD SUHAIMI</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. NOREHAN BINTI MOKHTAR</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. SITI NOOR FAZLIAH BINTI MOHD NOOR</td>
  </tr>
  <tr>
    <th>DEPARTMENT COMMUNITY HEALTH</th>
  </tr>
  <tr>
    <td>DR. MOHAMMAD FARRIS IMAN LEONG BIN ABDULLAH</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. AHMAD MUNIR CHE MUHAMED</td>
  </tr>
  <tr>
    <th>DEPARTMENT BIOMEDICAL IMAGING</th>
  </tr>
  <tr>
    <td>DR. NOOR KHAIRIAH BINTI A. KARIM</td>
  </tr>
  <tr>
    <td>ASSOCIATE PROFESSOR DR. RAFIDAH BINTI ZAINON</td>
  </tr>
</table>

</body>
</html>


</body>
</html>


