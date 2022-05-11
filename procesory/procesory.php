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
            <h2>Procesory</h2>
            <p>Procesor je něco jako mozek počítače. Jeho rychlost závisí také na rychlosti vaší operační paměti RAM a výkon by měl odpovídat výkonu vaší grafické karty.
                <br/>
                <br/>
                Výrobce Intel je ověřená kvalita, zatímco AMD za poslední dobu Intelu konkuruje a u některých typů může ušetřit peníze, díky chlazení, které  je v balení samotného procesoru.
            </p>
            <div class="menu">
                <a href="./intelcpu.php">
                    <p>Intel</p>
                    <img src="../img/procesory/intel.png">
                </a>
                <a href="./amdcpu.php">
                    <p>AMD</p>
                    <img src="../img/procesory/amd.png">
                </a>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>