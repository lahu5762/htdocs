<?php
$hostname = "linne.it.uu.se";
$username = "
$password = "
$
dbname =
$link =
mysqli_connect ($hostname, $username, $password,
dbname
if (!$link) {
echo "Error: Unable to connect to MySQL." .
mysqli_connect_error () . PHP_
exit;
}
?>