<!DOCTYPE html>
<head>
<title>FORM DATA</title>
<style>
body {
  background-image: url("form.png");

}

</body>
</style>

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
print "<table width=400 border=1 align='center'>\n";
print "<th bgcolor='00cc33'>Lecturer Name";
print "<th bgcolor='00cc33'>Department";
print "<th bgcolor='00cc33'>Staff Number";
print "<th bgcolor='00cc33'>Position";
print "<th bgcolor='00cc33'>Email";
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

</head>
</html>