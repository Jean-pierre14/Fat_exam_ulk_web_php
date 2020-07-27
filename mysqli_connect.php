<?php 
     DEFINE('DB_USER','root');
     DEFINE('DB_HOST','localhost');
     DEFINE('DB_NAME','fatdb');
     DEFINE('DB_PASSWORD','');
    $dbcon = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not be connected due to: '.mysqli_connect_error());
    mysqli_set_charset($dbcon, 'utf8');
?>