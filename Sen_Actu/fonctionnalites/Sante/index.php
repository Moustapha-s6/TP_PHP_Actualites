<?php
$c = isset($_GET['c']) ? $_GET['c'] : "Ajouter";
switch ($c) {
    case "Ajouter":
        include("./fonctionnalites/Sante/add.php");
        break;
    case "modifier":
        include("./fonctionnalites/Sante/edit.php");
        break;
    case "lister":
        include("./fonctionnalites/Sante/list.php");
        break;
    case "voir":
        include("./fonctionnalites/Sante/view.php");
        break;
    default:
        include("./fonctionnalites/404.php");
        break;
}
