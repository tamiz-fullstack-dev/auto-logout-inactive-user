<form action="default.php" method="POST">
    <input type="text" name="username" placeholder="Enter username"></br></br>
    <input type="password" name="password" placeholder="Enter password"></br></br>
    <input type="submit" name="submit" value="Login">
</form>

<?php
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username=='admin' && $password='12345'){
            session_start();
            $_SESSION['username'] = $username;
            header('location:home.php');
        }
        else
        {
            echo "Invalid password";
        }
    }
?>