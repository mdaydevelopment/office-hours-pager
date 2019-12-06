<?php
    include 'config/config.php';
    session_start();

    $msg = "";

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    
?>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Instructor Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php include("templates/nav.php"); ?> 
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <form action="login.php" method="post">
                    <h2>Instructor Login</h2>
                    <!--<?php if($msg = "") echo $msg . "<br><br>" ?>-->
                    <input class="form-control" minlength="3" name="username" placeholder="Username"><br>
                    <input class="form-control" minlength="5" name="password" placeholder="Password" type="password"><br>
                    <input class="btn btn-primary" type="submit" name="login" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>