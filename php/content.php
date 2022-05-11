<?php
include '../database/connection.php';
include '../database/content-gen.php';


$db = new Database();
$contentgen = new User($db);

$results = $contentgen->readProductsOfType($type);
while ($products = $results->fetch_all()) {

    foreach ($products as &$product) {

    $name = $product[2];
    $imgsource = $product[3];

    // seperate each parameter
    $parametrstr = $product[4];
    $parametrarr = explode(",", $parametrstr);

    // seperate each value
    $valuestr = $product[5];
    $valuearr = explode(",", $valuestr);

    $price = $product[6];

    echo "
    <div class='product'>
        <p>".$name."</p>
        <div class='object'>
            <img src='".$imgsource."'>
            <div class='objectinfo'>
                <ul>
                    ";
                    foreach ($parametrarr as $parametr) {
                        echo "<li>".$parametr.":</li>";
                    };
                    echo "
                </ul>
                <ul>
                    ";
                    foreach ($valuearr as $value) {
                        echo "<li>".$value."</li>";
                    };
                    echo "
                </ul>
            </div>
            <div class='price'>
                <p>".$price." Kč</p>
            </div>
        </div>
    </div>
    ";
}
}
?>