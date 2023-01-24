<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WELCOME</title>
    <style>
        body
        { font: 14px sans-serif; text-align: center; 
          background-image: url("usm colour.jpg");
        }

    </style>
</head>
<body>
    <h2 class="my-5">INSTITUT PERUBATAN & PERGIGIAN TERMAJU| Hi,<b><?php echo htmlspecialchars($_SESSION["email"]); ?></b>. Welcome to our site.</h2>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>

<h1>DASHBOARD</h1>

<br>
<table border="3" align="center">

  <tr>
    <td><b><font color=white>ACADEMIC</font></b><a href="academic.php" target='_blank'><img src="academic.png" alt="" height=150 width=170 /></td>
    <td><b><font color=white>CLINICAL</font></b><a href="clinical.php" target='_blank'><img src="clinical.png" alt="" height=150 width=170 /></td>
  </tr>
  <tr>
    <td height=150 width=150><b><font color=white>RESEARCH</font></b><a href="research.php" target='_blank'><img src="research.png" alt="" height=100 width=100/></td>
    <td height=150 width=150><b><font color=white>KEY PERFOMANCE INDICATOR(KPI)</font></b>
    <a href="kpi.php" target='_blank'><img src='kpi.png'height=100 width=100 /></a></td>
  </tr>
</table>
</html>