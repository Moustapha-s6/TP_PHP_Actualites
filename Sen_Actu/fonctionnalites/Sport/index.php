<?php
$c = isset($_GET['c']) ? $_GET['c'] : "Ajouter";
switch ($c) {
    case "Ajouter":
        include("./fonctionnalites/Sport/add.php");
        break;
    case "modifier":
        include("./fonctionnalites/Sport/edit.php");
        break;
    case "lister":
        include("./fonctionnalites/Sport/list.php");
        break;
    case "voir":
        include("./fonctionnalites/Sport/view.php");
        break;
    default:
        include("./fonctionnalites/404.php");
        break;
}
