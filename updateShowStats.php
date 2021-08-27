<?php
    require "config.php";

    $showID = $_GET['showID'];
    $sql = "UPDATE watchlist SET show_status = 1 WHERE show_id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $showID);
        mysqli_execute($stmt);
        mysqli_stmt_close($stmt);
    }else{
        echo "ERROR";
    }
?>