<?php
class dashboardmodel extends model {
	
	public function select() {
		$this->_tabela = "usuario";
		return $this->read(null,null,null,'id ASC');
	}
}