<?php

//connectdb
$con = mysqli_connect("203.151.137.146", "root", "ditcadmin", "dcta_trc");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "connect OK";
}
?>