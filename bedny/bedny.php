<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedny</title>
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
            <h2>Bedny</h2>
            <p>Bedny mají různé velikosti, rozdělují se na Big Midi a Mini. U nás najdete pouze Midi, jelikož jsou nejvíce používané, ale dáváme na výběr mezi průhlednou bočnicí a neprůhlednou.</p>
            <div class="menu">
                <a class="zakladni" href="./zakladni.php">
                    <p>Základní</p>
                    <img src="../img/bedny/zakladni.png">
                </a>
                <a class="pruhledne" href="./pruhledne.php">
                    <p>Průhledné</p>
                    <img src="../img/bedny/pruhledne.png">
                </a>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>