<?php
session_start();
session_unset();
session_destroy();


        // Remove cookie variables
        $days = 1;
        setcookie ("frontuserid","", time() - ($days *  24 * 60 * 60 * 1000) );

        
header("location:login");
?>

