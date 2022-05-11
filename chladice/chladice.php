<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesory</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/nav.css?v=<?php echo time();?>">
</head>
<body>
    <?php
        include '../php/header.php';
    ?>
    <main>
        <?php
            include '../php/nav.php';
        ?>
        <div class="contentcontainer">
            <h2>Chlazení</h2>
            <p>Chlazení CPU odvádí teplo z procesoru, bez něj by se procesor velmi rychle přehřál a došlo by k poškození samotného procesoru.
                <br/>
                <br/>
                Ne všechy PC bedny obsahují ventilátory, proto je potřeba je dokoupit nebo jen navýšít a zefektivnit odvod tepla z bedny od všech komponetů.
            </p>
            <div class="menu">
                <a href="./chlazeni.php">
                    <p>Chlazení CPU</p>
                    <img src="../img/chlazeni/chlazeni.png">
                </a>
                <a href="./vetraky.php">
                    <p>Ventilátory</p>
                    <img src="../img/chlazeni/fan.png">
                </a>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>