<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" href="registration.css" />
</head>
<body>
<div class="bg-image">
        <img src="registration.jpg" class = "image">
    </div>
    <div class="login">

<?php
require('db.php');
if(array_key_exists('button1', $_POST)) {
    $query1 = "DELETE FROM `diary_entry` WHERE `username` = '$_SESSION[username]'";
    $result1 = mysqli_query($conn, $query1);

    $query2 = "DELETE FROM `user_profile` WHERE `username` = '$_SESSION[username]'";
    $result2 = mysqli_query($conn, $query2);

    $query3 = "DELETE FROM `users` WHERE `username` = '$_SESSION[username]'";
    $result3 = mysqli_query($conn, $query3);

    if ($result3) {
        echo "<script>
        alert('Your account has been deleted');
        window.location.href='index.php';
        </script>";
    }
    else{
        echo "Something has gone wrong." + 
				"<div class='form'>
				<h3>Error!.</h3>
				<br/>Click here to retry <a href='delete-account.php'>TRY AGAIN</a></div>";
    }

    $conn->close();
}
else if(array_key_exists('button2', $_POST)) {
    button2();
}

function button2() {
    header("location: start.php");
}

?>

<div class="form">
<form name="registration" action="" method="post">
<h3 align="center">Are you sure you want to delete your account? It will lost FOREVER!</h3><br/>
<input type="submit" name="button1"
                class="button" value="Yes" />
<input type="submit" name="button2"
                class="button" value="No" />
</form>
</div>
<?php  ?>
</body>
</html>