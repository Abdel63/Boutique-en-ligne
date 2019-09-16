<?php
require("tpl/Smarty.class.php"); // On inclut la classe Smarty
include "database.class.php";

$smarty = new Smarty(); //initialisation de Smarty

$smarty->assign("products", $products);
$smarty->display("page4.html.tpl");
