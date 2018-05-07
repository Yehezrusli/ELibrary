<?php
    $con = new mysqli("localhost", "root", "", "elibrary");

    if($con->connect_errno){
        echo "failed to connect";
    }
?>
