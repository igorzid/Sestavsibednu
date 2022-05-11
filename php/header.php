<?php session_start(); ?>
<div class="headerscontainer">
    <div class="headercontainer">
        <h2>Sestav si bednu</h2>
            <?php
                if (!isset($_SESSION['username'])) {
                    echo "
                    <form class='login' method='GET'>
                        <input type='text' id='usernameInput' placeholder='Uživatelské jméno'>
                        <input type='password' id='userPasswordInput' placeholder='Heslo'>
                        <div class='buttons'>
                            <button type='button' onclick='login()'>Přihlásit se</button>
                            <button type='button' onclick='logRegistration()'>Registrace</button>
                        </div>
                    </form>
                    ";
                }
                else {
                    echo"
                    <form class='logged' action='../api/logout.php'>
                        <p>Vítejte " . $_SESSION['username']."</p>
                        <a>Komponenty v bedně</a>
                        <button class='logoutbutton' type='submit'>Odhlásit se</button>
                    </form>
                    ";
                }
            ?>
        <img src="../img/logo.svg" alt="PC" height="130" width="132";>
    </div>
<!--Nedodělané     
    <div class="loc">
        Cesta
    </div> -->
</div>

