<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafické karty</title>
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
            <h2>Grafické karty</h2>
            <p>Grafické karty vytváří obraz pro monitory. Čím vyšší výkon tím kvalitnější obraz si můžeme zobrazit. AMD grafické karty se dají používat i s procesorem  INTEL, ale i zde platí, že výkon grafické karty by měl odpovídat výkonu Vašeho procesoru.
                <br/>
                <br/>
                Výrobce NVIDIA je asi nejznámější značkou grafických karet, které podporují možnot G-SYNC zatímco značka AMD podporuje možnost FreeSync.
            </p>
            <div class="menu">
                <a href="./gpuamd.php">
                    <p>NVIDIA</p>
                    <img src="../img/karty/nvidiagpu.png">
                </a>
                <a href="./gpunvidia.php">
                    <p>AMD</p>
                    <img src="../img/karty/amdgpu.png">
                </a>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>