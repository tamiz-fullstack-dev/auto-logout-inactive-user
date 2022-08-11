<?php
    session_start();
    if(!isset($_SESSION['username']))
    {
        header('location:logout.php');
    }
    else
    {
        include("update_activity_time.php");
    }
?>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="timeout.js"></script>
    </head>
    <body>
        <p>WELCOME TO STUDENT</p>
        <a href="home.php">Go to Home page</a><br><br>
        <a href="logout.php">logout</a>
        <button onclick="activityCheck()">check</button>
    </body>
</html>