<?php
include('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wecome Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class = "form">
    <p> <?php echo $_SESSION['username'];?>!</p>
    <p>This is home page and secure area.</P>
    <p><a href = "login.php" >logout</a></p>   
</div>
<body>
<html>