<?php

namespace Classes;

use Models\ClassCadastro;

class ClassUploadImg
{
    private $erro = [];
    private $cadastro; 

    public function __construct()
    {
        $this->cadastro = new ClassCadastro();
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

    public function getErro()
    {
        return $this->erro;
    }

    public function setErro($erro)
    {
        array_push($this->erro, $erro);
    }

    // public function validateUpload($imagem)
    // {
    //     #Verificar se imagem foi enviada
    //     if (isset($_FILES['imagem'])) {

    //         #Pegando dados da imagem
    //         $img_name = $_FILES['imagem']['name'];
    //         $img_size = $_FILES['imagem']['size'];
    //         $tmp_name = $_FILES['imagem']['tmp_name'];
    //         $error = $_FILES['imagem']['error'];

    //         #Verificando se houve algum erro no upload
    //         if ($error === 0) {
    //             if ($img_size > 3000000) {
    //                 #mensagem de erro
    //                 $this->setErro("Tamanho do arquivo excedido");
    //                 return false;
    //             } else {
    //                 #Pegar extensão da imagem
    //                 $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

    //                 #Convertendo extensão para minuscula
    //                 $img_ex_lc = strtolower($img_ex);

    //                 #Array extensões aceitas
    //                 $allowed_exs = array("jpg", "jpeg", "png");

    //                 if (in_array($img_ex_lc, $allowed_exs)) {
    //                     #Renomeando imagem 
    //                     $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;

    //                     #Criando caminho para upload
    //                     $img_upload_path = "img/produtos/" . $new_img_name;

    //                     #Movendo imagem para pasta
    //                     move_uploaded_file($tmp_name, $img_upload_path);

    //                     #Save in DB
    //                     return $imagem =  $img_upload_path;
    //                 } else {
    //                     #mensagem de erro
    //                     $this->setErro("Tipo de arquivo inválido");
    //                     exit();
    //                 }
    //             }
    //         } else {
    //             #mensagem de erro
    //             $this->setErro("Erro desconhecido");
    //             exit();
    //         }
    //     }
    // }

    public function validateFinalUpload($arrVar)
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
            #$this->cadastro->insertImg($arrVar);
        }
        return json_encode($arrResponse);
    }
}
