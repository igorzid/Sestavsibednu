<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrace</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/nav.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/registrace.css?v=<?php echo time();?>">
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
            <div class="regcontainer">
                <div id="errorReg"></div>
                <form class="regform" method="POST" id="regform">
                    <label for="usernameReg">Uživatelské jméno</label>
                    <input type="text" name="usernameReg" id="usernameReg" required></input>

                    <label for="passwordReg">heslo</label>
                    <input type="password" name="passwordReg" id="passwordReg" required></input>

                    <label for="emailReg">email</label>
                    <input type="email" name="emailReg" id="emailReg" required></input>

                    <button type="button" onclick="registration()">Registrovat</button>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
<script src="../js/burger.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>