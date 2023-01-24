<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$email_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $email_err = "<br><b>*Please enter email.</b>*";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "<br><b>*Please enter your password.*</b>";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($email_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if email exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $email, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err ="<b>Invalid email or password.</b>";
                        }
                    }
                } else{
                    // Email doesn't exist, display a generic error message
                    $login_err = "<b>Invalid email or password.</b>";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN</title>
    <style>
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>

<style>
body 
{
  background-image: url("USM.jpg");
}
</style>
<p>
  <center>
  <style>
div {
  background-color: floralwhite;
  width: 300px;
  border: 15px solid purple;
  padding: 50px;
  margin: 30px;
  position: absolute; /*or fixed*/
  right: 0px;
  text-align: left
}
</style>
</center>
  </p>

  <center>
  <div>
  <center>
    <p>
  <center>
    <img src="USM LOGO.png" width="80" height="45" alt="">
    <img src="APEX.png" width="80" height="45" alt="">
    <img src="IPPT.png" width="80" height="45" alt="">
  </center>
  </p>

    <h1>
        <i>LECTURER KPI EVALUATION SYSTEM</i>
    </h1>
    <h2>
        LOGIN
    </h2>

        <p>Please fill in your credentials to login.</p>
    </h1>
  </center>

        <?php 
        if(!empty($login_err)){
            echo '<class="alert alert-danger">' . $login_err . '';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <center>
            <class="form-group">
            <p>
                <label>Email:</label>
                <br>
                <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                <span class="invalid-feedback"><?php echo $email_err; ?></span>
            </p>   
            
            <class="form-group">
            <p>
                <label>Password:</label>
                <br>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </p>
            

            <class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
             </center>

            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>