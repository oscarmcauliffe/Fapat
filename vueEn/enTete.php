<div class="entete">
    <div class="logoFapat">
        <a href="?lan=en&action=main">
            <img src="public/images/LogoProduit.png" style="height: 100%; width: 100%; object-fit: contain; cursor: pointer; left: 0;">
        </a>
    </div>
    <div class="fapatText">
        <img src="public/images/FAPAT.png" style="height: 100%; width: 100%; object-fit: contain">
    </div>
    <div class ="navBar" style="flex-basis: 50%; white-space:nowrap; overflow: auto">
        <ul class"ongletActif">
        <li><a class ="animated" href ="?lan=en&action=main">Home</a></li>
        <?php
        if(isset($_SESSION['logged'])==false){
            echo "<li><a class =\"animated\" href =\"?lan=en&action=connect\">Log In</a></li>";
        }
        else {
            echo "<li><a class =\"animated\" href =\"?lan=en&action=profil\">Profile</a></li>";
        }
        ?>
        <li><a class ="animated" href ="?lan=en&action=faq">FAQ</a></li>
        <li><a class ="animated" href ="?lan=en&action=documentation">Documentation</a></li>
        <?php
        if(isset($_SESSION['logged'])==true){
            echo "<li><a class =\"animated\" href =\"?lan=en&action=logOut\">Log Out</a></li>";
        }
        ?>
        </ul>
    </div>
    <div class="dropdown">
        <img src="public/images/internet.png" style="height: 100%; width: 25%; object-fit: contain">
        <div class="dropdown-content" style="right: 0">
            <a href="?lan=fr">Francais (FR)</a>
            <a href="?lan=en">English (EN)</a>
        </div>
    </div>
</div>