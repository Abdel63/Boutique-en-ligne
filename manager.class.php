<?php

class manager
{

    static function recherche($search)
    { 
        foreach (self::getAllproduits() as $produit){
            // if($search == $produit['name']){
             if(stripos($produit['nom'], $search) !== false) || stripos($produit ['descipriton'], $search) !== false{
                 $arrayToReturn[] = $produit;
             }
            }
            return $arrayToReturn;
        }
    }
}
