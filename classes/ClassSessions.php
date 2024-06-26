<?php

namespace Classes;

use Models;
use Traits\TraitGetIp;

class ClassSessions
{
    private $login;
    private $timeSession = 1200;
    private $timeCanary = 300;

    public function __construct()
    {
        if (session_id() == '') {
            ini_set("session.save_handler", "files");
            ini_set("session.use_cookies", 1);
            ini_set("session.use_only_cookies", 1);
            ini_set("session.cookie_domain", DOMAIN);
            ini_set("session.cookie_httponly", 1);
            if (DOMAIN != "localhost") {
                ini_set("session.cookie_secure", 1);
            }
            /*Criptografia das nossas sessions*/
            ini_set("session.entropy_length", 512);
            ini_set("session.entropy_file", '/dev/urandom');
            ini_set("session.hash_function", 'sha256');
            ini_set("session.hash_bits_per_character", 5);
            session_start();
        }
        $this->login = new Models\ClassLogin();
    }

    #Setar as sessões do nosso sistema
    public function setSessions($email)
    {
        $this->verifyIdSessions();
        $_SESSION["login"] = true;
        $_SESSION["time"] = time();
        $_SESSION["id"] = $this->login->getDataUser($email)['data']['id'];
        $_SESSION["name"] = $this->login->getDataUser($email)['data']['user'];
        $_SESSION["email"] = $this->login->getDataUser($email)['data']['email'];
        #$_SESSION["permition"]=$this->login->getDataUser($email)['data']['permissoes'];
        return $_SESSION;
    }

    #Proteger contra roubo de sessão
    public function setSessionCanary($par = null)
    {
        session_regenerate_id(true);
        if ($par == null) {
            $_SESSION['canary'] = [
                "birth" => time(),
                "IP" => TraitGetIp::getUserIp()
            ];
        } else {
            $_SESSION['canary']['birth'] = time();
        }
    }

    #verificar a integridade da sessão
    public function verifyIdSessions()
    {
        if (!isset($_SESSION['canary'])) {
            $this->setSessionCanary();
        }
        if ($_SESSION['canary']['IP'] != TraitGetIp::getUserIp()) {
            $this->destructSessions();
            $this->setSessionCanary();
        }
        if ($_SESSION['canary']['birth'] < time() - $this->timeCanary) {
            $this->setSessionCanary("time");
        }
    }

    #Destruir sessions existentes
    public function destructSessions()
    {
        foreach (array_keys($_SESSION) as $key) {
            unset($_SESSION[$key]);
        }
    }

    #Validar as páginas internas do sistema
    public function verifyInsideSession()
    {
        $this->verifyIdSessions();
        if (!isset($_SESSION['login']) || !isset($_SESSION['canary'])) {
            $this->destructSessions();
            echo "<script>
            alert('Você não está logado');
            window.location.href='" . DIRPAGE . "login';
            </script>";
        } else {
            if ($_SESSION['time'] >= time() - $this->timeSession) {
                $_SESSION['time'] = time();
            } else {
                echo "<script>
            alert('Sua sessão expirou');
            window.location.href='" . DIRPAGE . "login';
            </script>";
            }
        }
    }
}
