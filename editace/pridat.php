<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editace</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/header.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/nav.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/editace.css?v=<?php echo time();?>">
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
            <div class="addcontainer">
                <div class="inputcontainer" id="selectcontainer">
                    <div class="selecttype">
                        <span id="type">type</span>
                    </div>
                    <div class="selectdrop">
                        <div class="selectlist">zakladni</div>
                        <div class="selectlist">pruhledne</div>
                        <div class="selectlist">cpuintel</div>
                        <div class="selectlist">cpuamd</div>
                        <div class="selectlist">inteldesky</div>
                        <div class="selectlist">amddesky</div>
                        <div class="selectlist">gpunvidia</div>
                        <div class="selectlist">gpuamd</div>
                        <div class="selectlist">ram</div>
                        <div class="selectlist">hdd</div>
                        <div class="selectlist">ssd</div>
                        <div class="selectlist">m-2</div>
                        <div class="selectlist">cpuchlazeni</div>
                        <div class="selectlist">ventilatory</div>
                        <div class="selectlist">zdroje</div>
                    </div>
                </div>
                <div class="inputcontainer">
                    <p>productName</p>
                    <div class="addinput" id="productname" contenteditable></div>
                </div>
                <div class="inputcontainer">
                    <p>parameter</p>
                    <div class="addinput" id="parameter"></div>
                </div>
                <div class="inputcontainer">
                    <p>value</p>
                    <div class="addinput" id="value"></div>
                </div>
                <div class="inputcontainer">
                    <p>price</p>
                    <div class="addinput" id="price" contenteditable></div>
                </div>
                <button type="button">Přidat</button>
            </div>
        </div>
    </main>
</body>
<script src="../js/login.js?v=<?php echo time();?>" type="text/javascript"></script>
</html>