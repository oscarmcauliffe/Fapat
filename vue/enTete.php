<div class="entete">
    <div class="logoFapat">
    <a href="index.php?action=main">
        <img src="public/images/LogoProduit.png" style="height: 100%; width: 100%; object-fit: contain; cursor: pointer; left: 0;">
    </a>
    </div>
    <div class="fapatText">
        <img src="public/images/FAPAT.png" style="height: 100%; width: 100%; object-fit: contain">
    </div>
    <div class ="navBar" style="flex-basis: 50%; white-space:nowrap; overflow: auto">
         <ul>
             <li><a class ="animated" href ="index.php?action=main">Home</a></li>
             <?php
             if(isset($_SESSION['logged'])==false){
                 echo "<li><a class =\"animated\" href =\"index.php?action=connect\">Se connecter</a></li>";
             }
             else {
                 echo "<li><a class =\"animated\" href =\"index.php?action=profil\">Profil</a></li>";
             }
             ?>
             <li><a class ="animated" href ="index.php?action=quiSommesNous">Qui sommes-nous ?</a></li>
             <li><a class ="animated" href ="index.php?action=faq">FAQ</a></li>
             <li><a class ="animated" href ="index.php?action=documentation">Documentation</a></li>
             <li><a class ="animated" href ="#">Aide</a></li>
             <?php
             if(isset($_SESSION['logged'])==true){
                 echo "<li><a class =\"animated\" href =\"index.php?action=logOut\">Déconnexion</a></li>";
             }
             ?>
         </ul>
    </div>
    <div class="dropdown">
        <img src="public/images/internet.png" style="height: 100%; width: 25%; object-fit: contain">
            <div class="dropdown-content" style="right: 0">
                 <?php
                 $url = $_SERVER['HTTP_HOST'];
                 $url .= $_SERVER['REQUEST_URI'];

                 if (strpos($url, 'En') !== false) {
                     $urlEn = $url;
                     $urlEn = substr($urlEn, 16);

                     $urlFr = substr($urlEn,0,-6);
                     $urlFr .= "main.php";

                     echo ("<a href=\"".$urlFr."\">Francais (FR)</a>");
                     echo ("<a href=\"".$urlEn."\">English (EN)</a>");
                 }
                 else{
                     $urlFr = $url;
                     $urlFr = substr($urlFr, 16);

                     $urlEn = substr($urlFr, 0, -4);
                     $urlEn .= "mainEN.php";

                     echo ("<a href=\"".$urlFr."\">Francais (FR)</a>");
                     echo ("<a href=\"".$urlEn."\">English (EN)</a>");
                 }
                 ?>
             </div>
    </div>
</div>
