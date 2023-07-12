<?php
$c=isset($_GET["c"])?$_GET["c"]:"Ajouter";
switch ($c)
    {
        case"Ajouter":
            include("./fonctionnalites/Politique/add.php");
            break;
        case"modifier":
            include("./fonctionnalites/Politique/edit.php");
            break;
        case"lister":
            include("./fonctionnalites/Politique/list.php");
            break;
        case"voir":
            include("./fonctionnalites/Politique/view.php");
            break;
        default:
            include("./fonctionnalites/404.php");
            break;                    
            
    }
