<?php
    //contains database info
    include("../config/config.php");
    
    //connects to the database
    $conn = mysqli_connect($host, $username, $password, $dbname);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_error());
    }

    //gets the users account type for the nav bar
    $accountType=mysqli_query($conn, "SELECT AccountType FROM Users WHERE Username='" . $_SESSION['username'] . "';");
    $row = mysqli_fetch_assoc($accountType);

    //decides which nav bar to display, shows admin info if account type corresponds
    if($row['AccountType'] == 1) {
    echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Home</a> <br />
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item nav-link">
                    <a href="menu.php" alt="Menu" class="text-white">Menu</a>
                </li>
                <div class="nav-item nav-link">
                    <a href="createInstructor.php" alt="Create Instructor" class="text-white">Create Instructor</a>
                </div>
                <div class="nav-item nav-link">
                    <a href="defineSemester.php" alt="Define Semester" class="text-white">Define Semester</a>
                </div>
                <div class="nav-item nav-link">
                    <a href="setOfficeHours.php" alt="Set Office Hours" class="text-white">Set Office Hours</a>
                </div>
                <div class="nav-item nav-link account">
                    <img src="images/account.png" href="account.php" class="imgSmall" /><a href="account.php" alt="Manage Your Account" class="text-white"> Admin </a>
                </div>
            </ul>
        </div>
    </nav> ';
    } else {
    echo '<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Home</a> <br />
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item nav-link">
                    <a href="menu.php" alt="Menu" class="text-white">Menu</a>
                </li>
                <div class="nav-item nav-link">
                    <a href="setOfficeHours.php" alt="Set Office Hours" class="text-white">Set Office Hours</a>
                </div>
                <div class="nav-item nav-link account">
                    <img src="images/account.png" href="account.php" class="imgSmall" /><a href="account.php" alt="Manage Your Account" class="text-white"> Dummy </a>
                </div>
            </ul>
        </div>
    </nav> ';
    }

?>