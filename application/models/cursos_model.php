<?php
namespace application\models;

class cursos_model extends \model{
	public function select() {
		$this->_tabela = "curso";
		return $this->read(null,null,null,'id ASC');
	}
	function  insert_model(){
		;
	}


}

