<?php

namespace Models;

class ClassImage extends ClassCrud
{
    public $select;

    public function __construct()
    {
        $this->select = new ClassCrud();
    }
    public function getProductImage()
    {
        $img = $this->select->selectAllDB("nome,vendav,foto", "material","10", array());

        $retDados = $img->fetchAll();
        return $retDados;
    }
}
