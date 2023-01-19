<?php
require('db.php');
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<title>Password Reset</title>  
<link rel="stylesheet" href="registration.css" />
</head>
<body>
<div class="bg-image">
        <img src="registration.jpg" class = "image">
    </div>
    <div class="login">

	<?php

    if (isset($_POST['password'])) {

		$password = md5($_REQUEST['password']);
        $cpassword = md5($_REQUEST['cpassword']);
     
        if($password = $cpassword){
     
                $query = "UPDATE `users` SET `password`='$password' WHERE `username` = '$_SESSION[username]'";
                $result1 = mysqli_query($conn, $query);
                

                if ($result1) {
                    echo "<div class='form'>
            <h3>Password changed successfully.</h3>
            <br/>Click here to start <a href='start.php'>Login</a></div>";
                }
                else{
				echo "Something has gone wrong." + 
				"<div class='form'>
				<h3>Error!.</h3>
				<br/>Click here to retry <a href='change-password.php'>TRY AGAIN</a></div>";
				}
                $conn->close();
            }
			else{
				echo "Password are not matched!" + 
				"<div class='form'>
            <h3>Password Unmatched.</h3>
            <br/>Click here to retry <a href='change-password.php'>TRY AGAIN</a></div>";
			}
        }
    
    
else{

?>

    <div class="form">
<h1>Strong Password means GOOD SECURITY!!</h1>
<form name="registration" action="" method="post">
<input type="password" name="password" placeholder="Password" required />
<input type="password" name="cpassword" placeholder="Confirm Password" required />

<br><br>

<input type="submit" name="submit" value="Change Password" />
</form>
</div>
<?php } ?>
</body>
</html>