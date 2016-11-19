<?php
class dashboard extends controler{
	public 
	  function index(){

	  	
	  	$dashboard = new dashboardmodel();
	  	$dashboard_lista = $dashboard -> select();
	  	$data['dashboard'] = $dashboard_lista;
	    $this->loadview('index',$data);
	    
	    
	  }
			
	
}