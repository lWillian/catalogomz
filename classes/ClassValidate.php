<?php

namespace Classes;

use Models\ClassCadastro;
use ZxcvbnPhp\Zxcvbn;
use Classes\ClassPassword;
use Models\ClassLogin;

class ClassValidate
{
    private $erro = [];
    private $cadastro;
    private $password;
    private $login;
    private $tentativas;

    public function __construct()
    {
        $this->cadastro = new ClassCadastro();
        $this->password = new ClassPassword();
        $this->login = new ClassLogin();
    }

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
    #Validar se o email existe no banco de dados (action null para cadastro)
    public function validateIssetEmail($email, $action = null)
    {
        $b = $this->cadastro->getIssetEmail($email);

        if ($action == null) {
            if ($b > 0) {
                $this->setErro("Email já cadastrado!");
                return false;
            } else {
                return true;
            }
        } else {
            if ($b > 0) {
                return true;
            } else {
                $this->setErro("Email não cadastrado!");
                return false;
            }
        }
    }

    #Verificar se a senha é igual a confirmação de senha
    public function validateConfSenha($senha, $senhaConf)
    {
        if ($senha === $senhaConf) {
            return true;
        } else {
            $this->setErro("Senha diferente de confirmação de senha!");
        }
    }

    #Verificar a força da senha
    public function validateStrongSenha($senha, $par = null)
    {
        $zxcvbn = new Zxcvbn();
        $strength = $zxcvbn->passwordStrength($senha);

        if ($par == null) {
            if ($strength['score'] >= 3) {
                return true;
            } else {
                $this->setErro("Utilize uma senha mais forte!");
            }
        } else {
            /*login*/
        }
    }

    #Verificação da senha digitada com o hash no banco de dados
    public function validateSenha($email, $senha)
    {
        if ($this->password->verifyHash($email, $senha)) {
            return true;
        } else {
            $this->setErro("Usuário ou senha inválidos");
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

    public function validateFinalCad($arrVar)
    {
        if (count($this->getErro()) > 0) {
            $arrResponse = [
                "retorno" => "erro",
                "erros" => $this->getErro()
            ];
        } else {
            $arrResponse = [
                "retorno" => "success",
                "erros" => null
            ];
            $this->cadastro->insertCad($arrVar);
        }
        return json_encode($arrResponse);
    }

    #validação das tentativas
    public function validateAttemptLogin()
    {
        if ($this->login->countAttempt() >= 5) {
            $this->setErro("Tentativas Excedidas");
            $this->tentativas = true;
            return false;
        } else {
            $this->tentativas = false;
            return true;
        }
    }

    #validação final de login
    public function validateFinalLogin($email)
    {
        if (count($this->getErro()) > 0) {
            $this->login->insertAttempt();
            $arrResponse = [
                "retorno" => "erro",
                "erros" => $this->getErro(),
                "tentativas" => $this->tentativas
            ];
        } else {
            $this->login->deleteAttempt();
            $this->session->setSessions($email);
            $arrResponse = [
                "retorno" => "success",
                "page" => 'areaRestrita',
                "tentativas" => $this->tentativas
            ];
        }
        return json_encode($arrResponse);
    }
}
