<?php

     // class auto loader to load all classes
     // for me it work by include the init file i my app/index.php 

 	function autoLoader($className){
		$dirs 	= array('', MODELS, 'models/', '../app/models/');

		$formats 	= array('$s.php.inc', '$s.php');

		foreach($dirs as $dir){
			foreach ($formats as $format) {
				$path = $dir.sprintf($format, $className);
				if(file_exists($path)){
					require_once $path;
					return;
				}
			}
		}
	}
	spl_autoload_register('autoLoader');
