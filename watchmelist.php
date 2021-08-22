<?php
    require_once "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $showID = idGenerator();
        $showTitle = $_POST['showTitle'];
        $showStatus = $_POST['showCategory'];
        $sql = "INSERT INTO watchlist VALUES(?,?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ssi", $showID, $showTitle, $showStatus);
            mysqli_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }

    //Generates random ID for each show
    function idGenerator(){
        $num = array("1", "2", "3", "4", "5", "6", "7", "8","9");
        $generatedID = "";

        for($i = 0; $i<4; $i++){
            $generatedID .= $num[rand(0, 8)];
        }

        return $generatedID;
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
            <div id="title-wrapper">
                <img src="img/logo.png" id="logo" alt="eye logo">
                <h1>WATCHME <span style="color: #27ae60">LIST</span></h1>
            </div>
        </header>
        <div id="container">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
                <div class="col-3">
                    <input type="text" placeholder="Enter the title of the show..." name="showTitle" required>
                </div>
                <div class="col-1">
                    <select name="showCategory" >
                        <option value=0>PLANNING</option>
                        <option value=1>WATCHING</option>
                    </select>
                </div>
                <div class="col-1">
                    <input type="submit" value="ADD SHOW">
                </div>
            </form>
            <div id="category-container">
                <div class="category-block">
                    <div class="category-title">
                        <h2>PLANNED TO WATCH</h2>
                    </div>
                </div>
                <div class="category-block">
                    <div class="category-title">
                        <h2>CURRENTLY WATCHING</h2>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>