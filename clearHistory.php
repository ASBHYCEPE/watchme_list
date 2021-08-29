<?php
    require "config.php";

    $sql = "DELETE FROM watchlist WHERE show_status = 2 AND show_status = 3";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:watchmelist.php");
    }
?>