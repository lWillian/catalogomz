<?php

namespace Classes;

class ClassValidate
{
    private $erro = [];

    public function validateFields($par)
    {
        $i = 0;
        foreach ($par as $key => $value) {
            if (empty($value)) {
                $i++;
            }
        }
        if ($i == 0) {
            return true;
        } else {
            $this->setErro("Preencha todos os dados");
            return false;
        }
    }

    public function validateEmail($par)
    {
        if (filter_var($par, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            $this->setErro("Email inválido!");
            return false;
        }
    }

    public function getErro()
    {
        return $this->erro;
    }

    public function setErro($erro)
    {
        array_push($this->erro, $erro);
    }
}
