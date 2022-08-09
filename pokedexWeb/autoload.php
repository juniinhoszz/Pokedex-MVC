<?php 

spl_autoload_register(function ($nome_classe){

    include dirname(__FILE__, 2) . '/' . $nome_classe .'.php';

});