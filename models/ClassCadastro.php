<?php

namespace Models;

class ClassCadastro extends ClassCrud
{
    #Insere no BD
    public function insertCad($arrVar){
        $this->insertDB(
            "usuario",
            "?,?,?,?",
            array(
                0,
                $arrVar['user'],
                $arrVar['email'],
                $arrVar['password']
            )
        );
    }

    public function insertImg($arrVar){
        $this->insertDB(
            "img",
            "?,?,?,?",
            array(
                0, 
                $arrVar['descricao'],
                $arrVar['valor'],
                $arrVar['imagem']
            )
        );
    }

    #Veriricar se já existe o mesmo email cadastro no db
	public function getIssetEmail($email)
	{
	    $b=$this->selectDB(
	        "*",
	        "usuario",
	        "where email=?",
	        array(
	            $email
	        )
	    );
	    return $r=$b->rowCount();
	}
}
