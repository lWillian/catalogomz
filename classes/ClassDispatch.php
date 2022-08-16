<?php

namespace Classes;

use Traits\TraitParseUrl;

class ClassDispatch
{
    private $init;
    private $url;
    private $dir = null;
    private $cont;
    private $file;
    private $page;
    use TraitParseUrl;

    public function __construct()
    {
        $this->url = TraitParseUrl::parseUrl();
        $this->cont = count($this->url);
        $this->verificaParametros();
    }

    #verificar se existem parametros digitados pelo usuário
    private function verificaParametros()
    {
        if ($this->cont == 1 && empty($this->url[0])) {
            $this->page = DIRREQ . 'views/index.php';
        } else {
            $this->verificaDir();
        }
    }

    #fverifica se o indice digitado pelo usuario é um diretorio
    private function verificaDir()
    {
        $this->init = $this->url[0] . '/';

        for ($i = 0; $i < $this->cont; $i++) {
            if (is_dir($this->init)) {
                if ($i == 0) {
                    $this->dir .= $this->init;
                } elseif (is_dir($this->dir . $this->url[$i])) {
                    $this->dir .= $this->url[$i] . '/';
                } else {
                    $this->file = $this->url[$i];
                    break;
                }
            } else {
                if ($i == 0) {
                    $this->dir .= 'views/';
                }
                if (is_dir($this->dir . $this->url[$i])) {
                    $this->dir .= $this->url[$i] . '/';
                } else {
                    $this->file = $this->url[$i];
                    break;
                }
            }
        }

        $this->dir = str_replace("//", "/", $this->dir);
        $this->verificaFile();
    }

    #verificar se existe o arquivo requisitado, se n existir chama index.php se nao chama 404
    private function verificaFile()
    {
        $dirAbs = DIRREQ . $this->dir;
        if (file_exists($dirAbs . $this->file . '.php')) {
            $this->page = $dirAbs . $this->file . '.php';
        } elseif (file_exists($dirAbs . 'index.php')) {
            $this->page = $dirAbs . 'index.php';
        } else {
            $this->page = DIRREQ . 'views/404.php';
        }
    }

    #retorna a pagina final para o sistema
    public function getInclusao()
    {
        return $this->page;
    }
}
