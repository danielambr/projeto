<?php
#Arquivos de diretórios raízes
$pastaInterna="";

define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

if (substr($_SERVER['DOCUMENT_ROOT'],-1) == '/'){
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}");
}else{
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}");
}

#Diretórios específicos
define('DIRIMG',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}public/assets/img/");

?>