<?php

    $conn = mysqli_connect("localhost","root","root");

    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    echo"connection successful";

?>