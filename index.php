<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/semantic/semantic.min.css">
</head>
<body>
    <div>
        <p>
            <?php
                require ('mysqli_connect.php');
                if($_SERVER['REQUEST_METHOD'] == 'POST')
                {
                    if(!empty($_POST['user']))
                    {
                        $un = mysqli_real_escape_string($dbcon, trim($_POST['user']));
                    }
                    else
                    {
                        $un = FALSE;
                        echo '<p class="alert alert-danger">You forgot to fill in the username field</p>';
                    }
                    if(!empty($_POST['pass']))
                    {
                        $p = mysqli_real_escape_string($dbcon, trim($_POST['pass']));
                    }
                    else
                    {
                        $p = FALSE;
                        echo '<p class="alert alert-danger">You forgot to fill in the password field</p>';
                    }
                    if($un && $p)
                    {
                        $query = "SELECT user_id, fname,user_level FROM usersregistration WHERE (userName = '$un' OR Email = '$un' AND password = SHA1('$p'))";
                        $result = mysqli_query($dbcon, $query);
                        if(@mysqli_num_rows($result) ==1)
                        {
                            session_start();
                            $_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);
                            $_SESSION['user_level'] = (int) $_SESSION['user_level'];
                            $url  = ($_SESSION['user_level'] === 1) ? 'Admin-page.php':'member-page.php';
                            header('location:'.$url);
                            exit();
                            mysqli_free_result($result);
                            mysqli_close($dbcon);
                        }
                        else
                        {
                            echo '<h2>The username and the password entered do not match our records.<h2><br>
                                  <p>May be you wish get registerd by clicking the link bellow</p>';
                        }
                    }
                    else
                    {
                        echo '<p class="alert alert-danger">Please try it again</p>';
                    }
                    mysqli_close($dbcon);
                }
            ?>
        </p>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-1">
                <div class="row">
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-6 col-xl-4">
                    
                        <div class="col-md-6 col-xl-12">
                            <h1 class="text-center">Log In</h1>
                            <div class="alert alert-danger">
                                <p>Email or password are empty or incorrect</p>
                            </div>
                            <form action="index.php" method="POST">
                                <div class="form-group">
                                    <label for="lbl" class="label"><i class="icon user"></i><b>Username or Email :</b></label>
                                    <input type="text" id="lbl" name="user" class="form-control"
                                    value=<?php if(isset($_POST['user'])) echo $_POST['user'];?>>
                                </div>
                                <div class="form-group">
                                    <label for="lbl1"><i class="icon lock"></i><b>Password : </b></label>
                                    <input type="password" id="lbl1" name="pass" class="form-control"
                                    value=<?php if(isset($_POST['pass'])) echo $_POST['pass'];?>>
                                </div>
                                <div class="form-group">
                                    <a href="register.php" class="text-center">I don't have an account</a><br>
                                    <label for="c" class="text-center"><input type="checkbox" id="c" class="ui checkbox">Remember me</label>
                                </div>
                                <p>
                                    <button type="submit" name="login" class="ui icon labeled submit button blue"><i class="icon send"></i>Log In</button>
                                </p>
                            </form>
                        </div>
                    <div>
                </div>
            </div>
        </div>
    </div>
   
</body>
</html>
