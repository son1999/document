<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "qlct";

$conn = mysqli_connect($servername, $username, $password, $database);
mysqli_set_charset($conn,"utf8");
if (!isset($conn)) {
    echo "ket noi that bai";
} else {

}