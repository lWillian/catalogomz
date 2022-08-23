<?php
$validate = new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
$validate->validateIssetEmail($email,"login");
$validate->validateSenha($email,$senha);
$validate->validateAttemptLogin();
$validate->validateFinalLogin($email);

echo "<script>window.location.href='".DIRPAGE."areaRestrita';</script>";
