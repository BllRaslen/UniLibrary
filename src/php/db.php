<?php
function Createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "bll.raslen";
    $dbname = "uni_library";

    // create connection
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check Connection
    if (mysqli_connect_errno()) {
        die("Connection Failed: " . mysqli_connect_error());
    } else {
        echo "Connected successfully!";
    }

    return $con;
}

?>
