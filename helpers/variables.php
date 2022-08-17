<?php
$objPass=new Classes\ClassPassword();
if(isset($_POST['user'])){$user=filter_input(INPUT_POST,'user',FILTER_SANITIZE_FULL_SPECIAL_CHARS);}else{$nome=null;}
if(isset($_POST['email'])){$email=filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);}else{$email=null;}
if(isset($_POST['password'])){$senha=$_POST['password']; $hashSenha=$objPass->passwordHash($senha);}else{$senha=null; $hashSenha=null;}
if(isset($_POST['passwordconf'])){$senhaConf=$_POST['passwordconf'];}else{$senhaConf=null;}

if(isset($_POST['user'])){
    $arrVar=[
        "user"=>$user,
        "email"=>$email,
        "password"=>$hashSenha,
        "passwordconf"=>$senhaConf,
    ];
}
