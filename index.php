<?php

include('system\system.php');
include('config.php');

require_once ('system\controller.php');
require_once ('system\model.php');

function __autoload($file) {
	if (file_exists(MODELS.$file.'.php'))
		require_once (MODELS.$file.'.php');
	else die('classe não encontrada');
}

$obj = new system();
$obj->run();
var_dump($obj);

