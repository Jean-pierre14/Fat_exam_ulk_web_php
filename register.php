<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/semantic/semantic.min.css">
</head>
<body>
    <div class="container-fluid">
        <p>
           <?php
                require ('mysqli_connect.php');
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    $error = array();
                    if(empty($_POST['fname']))
                    {
                        $error[] = 'You did no fill the fullname field';
                    }
                    else
                    {
                        $fn = mysqli_real_escape_string($dbcon, trim($_POST['fname']));
                    }
                    if(empty($_POST['user']))
                    {
                        $error[] = 'You did not fill the username field';
                    }
                    else
                    {
                        $un = mysqli_real_escape_string($dbcon, trim($_POST['user']));
                    }
                    if(empty($_POST['email']))
                    {
                        $error[] = 'You did no t fill in the Email field';
                    }
                    else
                    {
                        $e = mysqli_real_escape_string($dbcon, trim($_POST['email']));
                    }
                    if(!empty($_POST['pass']))
                    {
                        if($_POST['pass']!=$_POST['password'])
                        {
                            $error[] = 'Your passwords do not match each otheer try again...';
                        }
                        else
                        {
                            $p = mysqli_real_escape_string($dbcon, trim($_POST['pass']));
                        }
                    }
                    else
                    {
                        $error[] = 'You did not fill in the password field';
                    }
                    if(empty($error))
                    {
                        $query = "INSERT INTO usersregistration(user_id,FName,userName,Email,password,Registration_Date)
                        VALUE('','$fn','$un','$e',SHA1('$p'),NOW())";
                        $result = mysqli_query($dbcon,$query);

                        if($result)
                        {
                            header("location:thanks.php");
                        }
                        else
                        {
                            echo '<h2>System Failor</h2>
                            <p>You cannot be registered due to system failor. We realy appologize for the inconvenience </p>';
                            echo '<p>'.mysqli_error($dbcon).'<br><br>'.$query.'</p>';
                            
                        }
                        mysqli_close($dbcon);
                        exit();
                    }
                    else
                    {
                        echo '<h1 class="alert alert-danger text-center">404 Errors Girlfriend not found!</h1>
                        <p>The following error(s) occured:<br>';
                        foreach($error as $notification)
                        {
                            echo"* $notification<br>\n";
                        }
                        echo '<p><h3>Please try again...</h3></p><br></p>';
                    }
                }
           ?>
        </p>
        <div class="row">
            <div class="col-md-12 p-1">
                <div class="row">
                    <div class="col-md-6 col-xl-4">
                        <!-- <img src="./img/main.png" alt="" class="img-responsive img-fluid"> -->
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <h1 class="text-center">Registration</h1>
                        <div class="alert alert-danger">
                            <!-- <p>Email or password are empty or incorrect</p> -->
                        </div>
                        <form action="register.php" method="post">
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="fullname"><i class="icon user"></i><b>YOUR NAME</b></label>
                                        <input type="text" id="fullname" name="fname" placeholder="Fullname" class="form-control" required
                                        value=<?php if(isset($_POST['fname'])) echo $_POST['fname']; ?> >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="username"><i class="icon user"></i><b>CHOOSE A USERNAME</b></label>
                                        <input type="text" id="username" name="user" placeholder="Username" class="form-control" required
                                        value=<?php if(isset($_POST['user'])) echo $_POST['user'];?>>
                                    </div>
                                    <div class="form-group col-md-12 ui">
                                        <label for="email"><i class="icon mail"></i>EMAIL</label>
                                        <input type="email" id="email" name="email" placeholder="Email@example.com" class="form-control" required
                                        value=<?php if(isset($_POST['e'])) echo $_POST['email'];?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password"><i class="icon lock"></i><b>CHOOSE PASSWORD</b></label>
                                        <input type="password" id="password" name="pass" placeholder="Choose password" class="form-control" required
                                        value=<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cpassword"><i class="icon lock"></i><b>CONFIRM PASSWORD</b></label>
                                        <input type="password" id="cpassword" name="password" placeholder="Confirm password" class="form-control" required
                                        value=<?php if(isset($_POST['password'])) echo $_POST['password'];?>>
                                    </div>
                            </div>

                            <div class="form-group">
                                <a href="index.php" class="text-center">I have an account</a><br>
                                <label for="c" class="text-center"><input type="checkbox" id="c" class="ui checkbox">Remember me</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="ui icon labeled submit button blue"><i class="icon send"></i>Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>