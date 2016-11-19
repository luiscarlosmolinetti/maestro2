<?php
class controler extends system{
	
	 /*private 
	   $layout;
	   public function __construct() {
	     	$this->setlayout('index');
      }*/
	 
     protected 
        function loadview($nome,$vars=array()) {
        	
        	$conteudo = $layout = '';
        	
          ob_start();
          if (is_array($vars) && count($vars) > 0) {
          	  extract($vars,EXTR_PREFIX_ALL,'view');          	  
          }
          require_once ('application/views/' .$nome.'.phtml');
          $conteudo = ob_get_contents();
          ob_end_clean();
         
          
          ob_start();
      	    require_once('public/layout/layout.php');
         	 $layout = ob_get_contents();
          ob_end_clean();
          
          echo str_replace('{{{content}}}', $conteudo, $layout);
        	        	
        }
	   
	
}