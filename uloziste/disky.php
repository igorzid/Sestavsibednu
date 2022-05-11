<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uložiště</title>
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
            <h2>Uložiště</h2>
            <p>Grafické karty vytváří obraz pro monitory. Čím vyšší výkon tím kvalitnější obraz si můžeme zobrazit. AMD grafické karty se dají používat i s procesorem  INTEL, ale i zde platí, že výkon grafické karty by měl odpovídat výkonu Vašeho procesoru.
                <br/>
                <br/>
                Výrobce NVIDIA je asi nejznámější značkou grafických karet, které podporují možnot G-SYNC zatímco značka AMD podporuje možnost FreeSync.
            </p>
            <div class="menu">
                <a href="./hdd.php">
                    <p>HDD</p>
                    <img src="../img/disky/hdd.png">
                </a>
                <a href="./ssd.php">
                    <p>SSD</p>
                    <img src="../img/disky/ssd.png">
                </a>
                <a href="./m-2.php">
                    <p>M.2</p>
                    <img src="../img/disky/m-2.png">
                </a>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>