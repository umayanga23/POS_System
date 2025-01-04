<?php
    define('DB_SERVER', "localhost");
    define('DB_USERNAME', "root");
    define('DB_PASSWORD', "");
    define('DB_DATABASE', "pos");

    $conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    IF(!$conn){

        die("Connection feild : ".mysqli_connect-error());
    }


?>