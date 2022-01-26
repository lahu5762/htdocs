<html>
<body>
    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = 'moviedb';

    $link = mysqli_connect ($hostname, $username, $password, $dbname);

    if (!$link) {
    echo "Error: Unable to connect to MySQL." . mysqli_connect_error () . PHP_;
    exit;
    }
    ?>
</body>
</html>