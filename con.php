<?php
ob_start();
session_start();

try {
    $con = new PDO("mysql:dbname=dproj1;host=localhost", "dil", "b");

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection Failed:" . $e->getMessage();

}
?>