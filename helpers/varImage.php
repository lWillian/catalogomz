<?php
if(isset($_POST['descricao'])){
    $descricao = $_POST['descricao'];
}else{
    $descricao = null;
}
if(isset($_POST['valor'])){
    $valor = $_POST['valor'];
}else{
    $valor = null;
}
if(isset($_POST['imagem'])){
    $imagem = $_POST['imagem'];
}else{
    $imagem = null;
}

if(isset($_POST['descricao'])){
    $arrVar=[
        "descricao"=>$descricao,
        "valor"=>$valor,
        "imagem"=>$imagem,
    ];
}