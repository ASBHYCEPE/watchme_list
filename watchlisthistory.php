<?php
    require_once "config.php";

    //Reads data from the database and display all queried results
    function displayShowTitles($sql, $link){
        $result = mysqli_query($link, $sql);
        while($row = mysqli_fetch_array($result)){
            echo "<div class=\"category-item\">";
            echo "<div class=\"col-4\">";
            echo "<h4>".$row['show_title']."</h4>";
            echo "</div>";
            echo "</div>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>WATCHME LIST</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
            <div id="header-wrapper">
                <div id="logo">
                    <div class="logo-item">
                        <img src="img/logo.png" id="img-logo" alt="eye logo">
                    </div>
                    <div class="logo-item">
                        <h1>WATCHME <span style="color: #27ae60">LIST</span></h1>
                    </div>
                </div>
                <div id="nav">
                    <a href="watchmelist.php">HOME</a>
                    <a href="#">WATCHLIST HISTORY</a>
                </div>
            </div>
        </header>
        <div id="container">
            <div id="block">
                <div class="block-item">
                    <h1>YOUR PAST SHOWS</h1>
                </div>
                <div class="block-item">
                    <a href="clearHistory.php">CLEAR ALL SHOWS</a>
                </div>
            </div>
            <div id="category-container">
                <div class="category-block">
                    <div class="category-title">
                        <h2>DROPPED SHOWS</h2>
                    </div>
                    <?php
                        $sql = "SELECT * FROM watchlist WHERE show_status = 3";
                        displayShowTitles($sql, $link);
                    ?>
                </div>
                <div class="category-block">
                    <div class="category-title">
                        <h2>FINISHED WATCHING</h2>
                    </div>
                    <?php
                        $sql = "SELECT * FROM watchlist WHERE show_status = 2";
                        displayShowTitles($sql, $link);
                    ?>
                </div>
            </div>
    </body>
</html>