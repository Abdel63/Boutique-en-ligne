<?php


class produits
{
    private $_id;
    private $_nom;
    private $_description;
    private $_prix;
    private $_image;


    function __construct($nom, $description, $prix, $image)
    {

        $this->_id = $id;
        $this->_nom = $nom;
        $this->_description = $description;
        $this->_prix = $prix;
        $this->_image = $image;
    }
}
