<?php
    require "config.php";

    $showID = $_GET['showID'];
    $sql = "DELETE FROM watchlist WHERE show_id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "s", $showID);
        mysqli_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location:watchmelist.php");
    }
?>