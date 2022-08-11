<?php
    session_start();
    $auto_logout_time = '500';
    if(isset($_SESSION['username']) && isset($_POST['data']))
    {
        $last_active_time =  $_COOKIE['activetime'];
        $time = time();
        if(($time - $last_active_time) > 5) {
            echo "sleep mode";
        }
        else
        {
            echo "active mode";
        }
        
    }
    else
    {
        echo "no user activity";
    }

?>