<?php

class categorie
{

    private $_nom;
    private $_description;
    private $_image;

    function __consctruct($nom, $description, $image)
    {

        $this->_nom = $nom;
        $this->_description = $description;
        $this->_image = $image;
    }
}
