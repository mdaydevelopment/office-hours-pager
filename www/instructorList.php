<?php
$host       = "mariadb";
$username   = getenv('MYSQL_USER');
$dbname     = getenv('MYSQL_DATABASE');
$password   = getenv('MYSQL_PASSWORD');
$link = mysqli_connect($host, $username, $password, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



$query = "SELECT Name FROM users WHERE userid IN (SELECT DISTINCT userid FROM office_hours o JOIN terms t ON o.termid = t.termid WHERE WEEKDAY(NOW()) = o.day_of_week AND NOW() > o.hourstart AND NOW() < o.hourend AND NOW() > t.startdate AND NOW() < t.enddate);"
?>
<div class="btn-group">
<?php
if ($result = mysqli_query($link, $query)) {

    /* fetch associative array */
    $i = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if ($i % 2 == 0){
             printf ("<button>%s\n</button>", $row["Name"]);
             $i++;
        }
        else{
            printf ("<button>%s\n</button><br>", $row["Name"]);
            $i++;
        }
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>
</div>
