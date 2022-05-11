<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hlavní stránka</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/nav.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/index.css?v=<?php echo time();?>">
</head>
<body>
    <?php
        include '../php/header.php';
    ?>
    <main>
        <?php
            include '../php/nav.php';
        ?>
        <div class="indexcontainer">
            <h1>Vyber si bednu s komponenty podle vlastních očekávání</h2>
            <div class="indexcontent">
                <p>U všech komponentů najdeš stručné informace, podle čeho by jsi měl vybírat a k čemu komponent slouží.</p>
                <p>Nakonec zjistíš jakým výkonem bude tvá bedna disponovat a nakolik tě vyjde.
                <p>PC bedna má 6 základních komponentů jeden chladič procesoru a větráky na chlazení celé mašiny.</p>
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "
                    <p>Po registraci se stačí příhlasit a můžeš jít na to.</p>
                    ";
                }
                ?>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>