<?php

include('system\system.php');
include('config.php');

require_once ('system\controller.php');
require_once ('system\model.php');

 
function __autoload($file){
	if (file_exists($file.'.php'))
		require_once ($file.'.php');
	else die('classe nao encontrada');
}

$obj = new system();
$obj->run();
//var_dump($obj);

require 'vendor/autoload.php';

/**
 $slugifier = new \Slug\Slugifier();

 $slugifier->setTransliterate(true);
 $frase = 'fase acentuada para teste de criação de slug';
 $slug = $slugifier->slugify($frase);
 echo '<b> Frase natural: </b>'.$frase."<br /> <br  />";
 echo '<b> Frase com aplicaçao de slugs: </b>'.$slug."<br /> <br  />";
 **/


