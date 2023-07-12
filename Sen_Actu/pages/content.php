<?php
$p = isset($_GET['page']) ? $_GET['page'] : "dashboard";
switch ($p) {
    case "dashboard":
        include("./pages/main.php");
        break;
    case "sport":
        include("./fonctionnalites/Sport/index.php");
        break;
    case "sante":
        include("./fonctionnalites/Sante/index.php");
        break;
    case "education":
        include("./fonctionnalites/Education/index.php");
        break;
    case "politique":
        include("./fonctionnalites/Politique/index.php");
        break;
    case "utilisateur":
        include("./fonctionnalites/Utilisateur/index.php");
        break;
    case "acces":
        include("./fonctionnalites/Acces/index.php");
        break;
    default:
        include("./404.php");
        break;
}
