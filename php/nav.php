<nav>
    <button class="hamburger" type="button" id="burger" onclick="burgerbut()">
        <div class="burger"></div>
        <div class="burger"></div>
        <div class="burger"></div>
    </button>
    <ul  class="navcontainer" id="navmenu">
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../index/index.php">
                    Hlavní  stránka
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../bedny/bedny.php">
                    Bedny
                </a>
            </div>
            <div class="navextension">
                <a class="extensionobjects" href="../bedny/zakladni.php">
                    Základní
                </a>
                <a class="extensionobjects" href="../bedny/pruhledne.php">
                    Průhledné
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../procesory/procesory.php">
                    Procesory
                </a>
            </div>
            <div class="navextension">
                <a class="extensionobjects" href="../procesory/intelcpu.php">
                    Intel
                </a>
                <a class="extensionobjects" href="../procesory/amdcpu.php">
                    AMD
                </a>
            </div>
        </li>
        <li class="navlist">    
            <div class="objectborder">
                <a class="navobjects" href="../desky/desky.php">
                    Základní desky
                </a>
            </div>
            <div class="navextension">
                <a class="extensionobjects" href="../desky/deskyintel.php">
                    Intel
                </a>
                <a class="extensionobjects" href="../desky/deskyamd.php">
                    AMD
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../karty/karty.php">
                    Grafické karty
                </a>
            </div>
            <div class="navextension">
                <a class="extensionobjects" href="../karty/gpunvidia.php">
                    NVIDIA
                </a>
                <a class="extensionobjects" href="../karty/gpuamd.php">
                    AMD
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../ram/ram.php">
                    Operační pamět RAM
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../uloziste/disky.php">
                    Uložiště
                </a>
            </div>
            <div class="navextension" id="threeobjects">
                <a class="extensionobjects" href="../uloziste/hdd.php">
                    HDD
                </a>
                <a class="extensionobjects" href="../uloziste/ssd.php">
                    SSD
                </a>
                <a class="extensionobjects" href="../uloziste/m-2.php">
                    M.2
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../chladice/chladice.php">
                    Chlazení, ventilátory   
                </a>
            </div>
            <div class="navextension">
                <a class="extensionobjects" href="../chladice/chlazeni.php">
                    Chlazení CPU
                </a>
                <a class="extensionobjects" href="../chladice/vetraky.php">
                    Ventilátory
                </a>
            </div>
        </li>
        <li class="navlist">
            <div class="objectborder">
                <a class="navobjects" href="../zdroje/zdroje.php">
                    Zdroje
                </a>
            </div>
        </li>

        <!-- rozdělaná editace
        < ?php
            if (isset($_SESSION['username'])) {
                echo "
                <li class='navlist'>
                <div class='objectborder'>
                    <div class='navobjects'>
                        Editovat produkty   
                    </div>
                </div>
                <div class='navextension'>
                    <a class='extensionobjects' href='../editace/pridat.php'>
                        Přidat produkt
                    </a>
                    <a class='extensionobjects' href='../editace/upravit.php'>
                        Upravit produkt
                    </a>
                </div>
                </li>";
            }
        ?> -->
    </ul>
</nav>


