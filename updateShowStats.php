<?php
    require "config.php";

    $showID = $_GET['showID'];
    $showStats = $_GET['showStats'];
    $sql = "UPDATE watchlist SET show_status = ? WHERE show_id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "is", $showStats, $showID);
        mysqli_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:watchmelist.php");
    }
?>