<div class="entete">
    <div class="logoFapat">
        <a href="?lan=fr&action=main">
            <img src="public/images/LogoProduit.png" style="height: 100%; width: 100%; object-fit: contain; cursor: pointer; left: 0;">
        </a>
    </div>
    <div class="fapatText">
        <img src="public/images/FAPAT.png" style="height: 100%; width: 100%; object-fit: contain">
    </div>
    <div class ="navBar" style="flex-basis: 50%; white-space:nowrap; overflow: auto">
        <ul class"ongletActif">
        <li><a class ="animated" href ="?lan=fr&action=main">Accueil</a></li>
        <?php
        if(isset($_SESSION['logged'])==false){
            echo "<li><a class =\"animated\" href =\"?lan=fr&action=connect\">Se connecter</a></li>";
        }
        else {
            echo "<li><a class =\"animated\" href =\"?lan=fr&action=profil\">Profil</a></li>";
        }
        ?>
        <li><a class ="animated" href ="?lan=fr&action=faq">Questions fréquentes</a></li>
        <li><a class ="animated" href ="?lan=fr&action=documentation">Documentation</a></li>
        <?php
        if(isset($_SESSION['logged'])==true){
            echo "<li><a class =\"animated\" href =\"?lan=fr&action=logOut\">Déconnexion</a></li>";
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
