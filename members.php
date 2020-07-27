<?php
    session_start();
    if(!isset($_SESSION['user_level']) OR ($_SESSION['user_level']!=1))
    {
        header('location:index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Memenbers List</title>
</head>
<body>
    <center><h2>View our company's members list</h2></center>
    <table border="solid">
        <thead>
            <td>ID</td>
            <td>Full Name</td>
            <td>User Name</td>
            <td>Email address</td>
            <td>Creditial</td>
            <td>Registration Date</td>
            <td>User Permission</td>
        </thead>
    </table>
</body>
</html>