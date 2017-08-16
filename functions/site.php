<?php
	spl_autoload_register(function($class_name){
		require_once $class_name.'.inc.php';
		require_once $class_name.'.php';
	});

	$obj = new RandomString();
	echo $obj->numberString(20);