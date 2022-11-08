<?php
$upload = new Classes\ClassUploadImg();
$upload->validateFields($_POST);
#$upload->validateUpload($imagem);
echo $upload->validateFinalUpload($arrVar);