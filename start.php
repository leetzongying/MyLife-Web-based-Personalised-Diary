<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
exit(); }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="start.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <title>Document</title>
</head>

<body>
        <img class="clipart" src="book clipart.png"/>
        
    <div class="login">
        <h1 >Welcome !!</h1>
        <br><br><br><br><br><br>
        <a href = "basicdiary.php ">Write today's Diary..</a><br>
        <a href ="change-password.php"> Change Password Here!</a>
   <br>
    
</div>
<div class="icon-bar">
  <a  href="logout.php"><i class="fa fa-home"></i></a>
  <a href="display.php"><i class="fa fa-calendar"></i></a>
  <a href="message.php"><i class="fa fa-envelope"></i></a>
  <a href="feedback.php"><i class="fa fa-pencil"></i></a>
  <a href="delete-account.php"><i class="bi-shield-exclamation"></i></a>
</div>
</body>
</html>
    