<?php
$validate = new Classes\ClassValidate();
$validate->validateFields($_POST);
$validate->validateEmail($email);
var_dump($validate->getErro());