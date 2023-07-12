<?php
$c = isset($_GET['c']) ? $_GET['c'] : "Ajouter";
switch ($c) {
    case "Ajouter":
        include("./fonctionnalites/Education/add.php");
        break;
    case "modifier":
        include("./fonctionnalites/Education/edit.php");
        break;
    case "lister":
        include("./fonctionnalites/Education/list.php");
        break;
    case "voir":
        include("./fonctionnalites/Education/view.php");
        break;
    default:
        include("./fonctionnalites/404.php");
        break;
}
