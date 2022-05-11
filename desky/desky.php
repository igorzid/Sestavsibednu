<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Základní desky</title>
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
            <h2>Základní desky</h2>
            <p>Základní deska propojuje jednotlivé součástky počítače.
                <br/>
                <br/>
                Pro procesory INTEL je potřeba vybrat základní desku s INTEL chipsetem, pro AMD procesory s AMD chipsetem.
            </p>
            <div class="menu">
                <a href="./deskyintel.php">
                    <p>Intel</p>
                    <img src="../img/desky/deskyintel.png">
                </a>
                <a href="./deskyamd.php">
                    <p>AMD</p>
                    <img src="../img/desky/deskyamd.png">
                </a>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>