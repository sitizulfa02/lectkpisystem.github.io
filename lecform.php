<!DOCTYPE html>
<head>
<title>DATA FORM</title>
<style>
body {
  background-image: url("kpi_lec2.png");

}

</style>

<center>
    <img src="USM LOGO.png" width="80" height="45" alt="">
    <img src="APEX.png" width="80" height="42" alt="">
    <img src="IPPT.png" width="80" height="42" alt="">
</center>
<html>

<form method="post" action="">

<center>
<h1>LECTURER INFORMATION FORM</h1>

<p> &nbsp;</p>

<p>LECTURER NAME:
  <input type="text" name="Lectname">
</p>
<br>

<p>
DEPARTMENT: <select name="department">
<option value="BIOMEDICAL SCIENCE">BIOMEDICAL SCIENCE
<option value="CLINICAL MEDICINE">CLINICAL MEDICINE
<option value="TOXICOLOGY">TOXICOLOGY
<option value="DENTAL SCIENCE">DENTAL SCIENCE
<option value="COMMUNITY HEALTH">COMMUNITY HEALTH
<option value="BIOMEDICAL IMAGING">BIOMEDICAL IMAGING
</select>
</p>
<br>

<p>STAFF NUMBER:
  <input type="text" name="StaffNum">
</p>
<br>

<p>POSITION:
  <input type="text" name="Position">
</p>
<br>

<p>EMAIL:
  <input type="text" name="Email">
</p>
<br>

  <input type="submit" name="Submit" value="Submit">
  <input type="reset" name="Reset" value="Reset">
  </p>

</center>
</form>
</html>

<?php
$db="kpi system";
$Lectname=$_POST["Lectname"];
$department=$_POST["department"];
$StaffNum=$_POST["StaffNum"];
$Position=$_POST["Position"];
$Email=$_POST["Email"];


  
  $DB_HOST = "localhost"; 
    $DB_DBNAME = "kpi system"; 
    $DB_USER = "root"; 
    $DB_PWD = ""; 
  
  // 1. Create a database connection
$connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PWD,$DB_DBNAME);
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection,$DB_DBNAME);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
  
$sql = "INSERT INTO lectform (Lectname,department,StaffNum,Position,Email) VALUES ('$Lectname','$department','$StaffNum','$Position','$Email')";

mysqli_query($connection, $sql);

mysqli_close($connection);


?>

<?php
$DB_HOST = "localhost"; 
    $DB_DBNAME = "kpi system"; 
    $DB_USER = "root"; 
    $DB_PWD = ""; 
  
  // 1. Create a database connection
$connection = mysqli_connect($DB_HOST,$DB_USER,$DB_PWD,$DB_DBNAME);
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection, $DB_DBNAME);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}
  
$sql = "SELECT * FROM lectform ORDER BY LectName" ;
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $num_rows = mysqli_num_rows($result);
print "Successfully Record!!!";
while ($get_info = mysqli_fetch_row($result)){ 
print "<tr>\n";
foreach ($get_info as $field) 
print "\t<td><font face=arial size=1/>$field</font></td>\n";
print "</tr>\n";
}
print "</table>\n";
    }
} else {
    echo "0 results";
} 
  

mysqli_close($connection);
?>
</body>
</html>