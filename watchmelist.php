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
            <form action="">
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
        </div>
    </body>
</html>