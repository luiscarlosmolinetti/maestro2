<?php

namespace application\controllers;

class cursos extends \controler{
	public
	function index(){

		$dashboard = new \application\models\cursos_model();
		$dashboard_lista = $dashboard -> select();
		
		$data['cursos'] = $dashboard_lista;
		
		$this->loadview('cursos_lista',$data);
	}
	function  adicionar(){
		;
	}
	function listar(){
		;
	}
}

