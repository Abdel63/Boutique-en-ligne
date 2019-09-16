<?php
require("tpl/Smarty.class.php"); // On inclut la classe Smarty
include "database.class.php";


$smarty = new Smarty(); //initialisation de Smarty


$product = "SELECT * FROM produits WHERE id = ?";
$sql = $connexion->prepare($product);
$sql->execute([$_GET['id']]);
$product = $sql->fetch();
//var_dump($products);
$smarty->assign("produit", $product);
$smarty->display("categories.html.tpl");
