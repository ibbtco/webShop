<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "goberdns_infoeducatia";

$connection = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Database Connection Failed" . mysql_error());
}
?>