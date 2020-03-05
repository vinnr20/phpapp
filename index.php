<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = 3306;
$dbuser = "userD5T";
$dbpwd = "redhat123";
$dbname = "testing";

$connection = mysql_connect($dbhost, $dbport, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database ");
    echo $dbname;
}
?>
