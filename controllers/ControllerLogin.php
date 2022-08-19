<?php
$validate = new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email,"login");
$validate->validateSenha($email,$senha);
$validate->validateAttemptLogin();
$validate->validateFinalLogin($email);
var_dump($validate->getErro());

