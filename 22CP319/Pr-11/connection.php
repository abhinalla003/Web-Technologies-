<?php
    $servername="localhost";
    $dbname="root";
    $dbpass="";
    $db="22cp319";
    $conn=mysqli_connect($servername,$dbname,$dbpass,$db);
    if(!$conn)
    {
        die("Connection Failed: " . mysqli_connect_error());
        echo "<br>";
    }
?>