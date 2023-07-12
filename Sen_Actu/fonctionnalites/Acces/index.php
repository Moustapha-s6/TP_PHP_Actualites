<?php
$c = isset($_GET['c']) ? $_GET['c'] : "Ajouter";
switch ($c) {
    case "Ajouter":
        include("./fonctionnalites/Acces/add.php");
        break;
    case "modifier":
        include("./fonctionnalites/Acces/edit.php");
        break;
    case "lister":
        include("./fonctionnalites/Acces/list.php");
        break;
    case "voir":
        include("./fonctionnalites/Acces/view.php");
        break;
    default:
        include("./fonctionnalites/404.php");
        break;
}
