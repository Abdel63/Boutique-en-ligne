
<?php
require("tpl/Smarty.class.php"); // On inclut la classe Smarty


$smarty = new Smarty(); //initialisation de Smarty

// $smarty->assign("DATA", "Hello abdel"); 
//assign permet d'assigner des données à une variable utilisable dans le tpl appelé.
//ici hello abdel sera stocké dans une variable nommée DATA 

$smarty->display("page1.html.tpl");
// echo "je suis un fichier php et pas html";

// $smarty->display("index2.html");
// echo "je suis un fichier php et pas html";

// $smarty->display("page2.html.tpl");


?>
