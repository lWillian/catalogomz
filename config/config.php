<?php 
#Caminhos absolutos
#Variavel para caso o sistema esteja em uma subpasta
$pastaInterna = "catalogomz/";
#constante com o caminho absoluto do sistema
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}"); 
#verificação se existe barra no final, se não existir, acrescenta
(substr($_SERVER['DOCUMENT_ROOT'],-1) == '/')?$barra='':$barra="/"; 
#Utilizado para inclusao e requisição de arquivos
define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$barra}{$pastaInterna}");

#atalhos
#atalho para imagens
define('DIRIMG',DIRPAGE.'img/');
#atalho para stylesheet
define('DIRCSS',DIRPAGE.'lib/css/');
#atalho para arquivos JS
define('DIRJS',DIRPAGE.'lib/js/');

#Acesso ao DB
#local do banco
define('HOST', "localhost");
#nome do banco
define('DB',"sysmz");
#usuário 
define('USER',"root");
#senha
define('PASS',"");

#pega o host do site
define("DOMAIN",$_SERVER["HTTP_HOST"]);