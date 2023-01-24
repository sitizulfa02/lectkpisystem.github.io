<?php
$Username=$_POST["Username"];
$Password=$_POST["Password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kpi system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
	
$sql = "SELECT * FROM login WHERE Password='$Password'";

$result=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($result);
		if(!$result || mysqli_num_rows($result) <1)
{
		 $data=$result->fetch_assoc();
			
		if([$data="Password"] === $Password)
		{
			echo "<script>alert('Successfully Login!');window.location.href='adminpage.html';</script>";
		}
                  else
            {
                  die("<script>alert('Invalid email or password!');window.location.href='index.html';</script>");
            }
            }
                  else
            {
                  die("<script>alert('Succesfully Login!');window.location.href='adminPage.html';</script>");
            }


		
$conn->close();


?>