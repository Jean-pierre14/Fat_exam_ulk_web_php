<?php
    session_start();
    if(!isset($_SESSION['user_level']) or ($_SESSION['user_level']!=0))
    {
        header('location:Login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to the member page</title>
</head>
<body>
    <?php
        echo '<h2>Welcome Mr/Mrs <u>';
        if(isset($_SESSION['fname']))
        {
            echo "{$_SESSION['fname']}";
        }
        echo '</u>,<br>You are one amoung our members</h2>';
    ?>
</body>
</html>