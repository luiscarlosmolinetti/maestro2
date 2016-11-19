<?php
 class system {
 	private 
 	  $url, $parteurl;
 	public
 	  $controller,$action,$params;
 	  function __construct() {
 	  	
 	  	$this->seturl();
 	  	$this->setparteurl();
 	  	$this->setcontroller();
 	  	$this->setaction();
 	  	
 	  }
 	  
 	  function seturl() {
 	  	$this->url=(isset($_GET['url']))?$_GET['url']:'dashboard/index';
 	
 	  }
 	  function setparteurl() {
 	  	 $this->parteurl=explode('/',$this->url);
 	  	
 	  }
 	  function setcontroller() {
 	  	 $this->controller=$this->parteurl[0];
 	  }
 	  function  setaction(){
 	  	$this->action=$this->parteurl[1];
 	  }
 	  
 	  function run() {
 	  	require('application/controllers/'.$this->controller.'.php');
 	  	
 	  	$control = '\\application\\controllers\\'.$this->controller;
 	  	$app = new $control();
 	  	
 	  	$action =$this->action;
 	  	$app ->$action();
 	  }
 	
 	
 }