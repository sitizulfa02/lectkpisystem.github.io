<?php
$db="patient";
$fname=$_POST["fname"];
$age=$_POST["age"];
$dadmission=$_POST["dadmission"];
$time=$_POST["time"];
$gender=$_POST["gender"];

$DB_HOST = "localhost"; 
    $DB_DBNAME = "patient"; 
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
  
$sql = "INSERT INTO form (fname,age,dadmission,time,gender) VALUES ('$fname','$age','$dadmission','$time','$gender')";

mysqli_query($connection, $sql);

mysqli_close($connection);


?>
</body>
</html>


<html>
<head><title>SHOW AGENT</title></head>
<body>
<?php
$DB_HOST = "localhost"; 
    $DB_DBNAME = "patient"; 
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
  
$sql = "SELECT * FROM form ORDER BY fname,age,dadmission,time,gender" ;
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $num_rows = mysqli_num_rows($result);
print "<h2>There are $num_rows records</h2><P>";
print "<h5>Please refresh to show the latest update</h5>";
print "<table width=400 border=1 align='center'>\n";
print "<th bgcolor='00cc33'>Name";
print "<th bgcolor='00cc33'>Age";
print "<th bgcolor='00cc33'>Date";
print "<th bgcolor='00cc33'>Time";
print "<th bgcolor='00cc33'>Gender";
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